<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PemesananKapalResource\Pages;
use App\Filament\Resources\PemesananKapalResource\RelationManagers;
use App\Models\PemesananKapal;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PemesananKapalResource extends Resource
{
    protected static ?string $model = PemesananKapal::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_pelanggan')
                    ->required()
                    ->relationship('pelanggan', 'id')
                    ->preload()
                    ->getOptionLabelFromRecordUsing(fn ($record) => $record->user->name),
                
                Forms\Components\Select::make('id_kapal')
                    ->label('Kapal')
                    ->required()
                    ->relationship('kapal', 'nama_kapal')
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set, $get) {
                        // Ambil data harga dari model kapal
                        if ($state) {
                            $kapal = \App\Models\Kapal::find($state);
                            if ($kapal) {
                                $jumlahPenumpang = $get('jumlah_penumpang') ?: 0;
                                $hargaPerOrang = $kapal->harga_tiket;
                                $totalHarga = $jumlahPenumpang * $hargaPerOrang;
                                $set('total_harga', $totalHarga);
                            }
                        }
                    }),
                
                Forms\Components\DatePicker::make('tanggal_pemesanan')
                    ->label('Tanggal Pemesanan')
                    ->required(),
                
                Forms\Components\TextInput::make('jumlah_penumpang')
                    ->label('Jumlah Penumpang')
                    ->maxLength('2')
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set, $get) {
                        // Kalkulasi ulang total harga ketika jumlah penumpang berubah
                        $idKapal = $get('id_kapal');
                        if ($idKapal) {
                            $kapal = \App\Models\Kapal::find($idKapal);
                            if ($kapal) {
                                $jumlahPenumpang = $state ?: 0;
                                $hargaPerOrang = $kapal->harga_tiket;
                                $totalHarga = $jumlahPenumpang * $hargaPerOrang;
                                $set('total_harga', $totalHarga);
                            }
                        }
                    }),
                
                Forms\Components\Select::make('status_pemesanan')
                    ->options([
                        'dipesan' => 'Dipesan',
                        'dibatalkan' => 'Dibatalkan',
                        'selesai' => 'Selesai',
                    ])
                    ->label('Status Pemesanan')
                    ->required(),
                
                Forms\Components\TextInput::make('total_harga')
                    ->label('Total Harga')
                    ->required()
                    ->numeric()
                    ->disabled()
                    ->reactive()
                    ->prefix('Rp')
                    ->dehydrated(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('pelanggan.user.name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kapal.nama_kapal'),
                Tables\Columns\TextColumn::make('tanggal_pemesanan'),
                Tables\Columns\TextColumn::make('jumlah_penumpang'),
                Tables\Columns\TextColumn::make('pelanggan.user.email')
                    ->label('Email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pelanggan.alamat')
                    ->label('Alamat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('total_harga')
                    ->numeric()
                    ->formatStateUsing(function ($state) {
                        return 'Rp ' . number_format($state, 0, ',', '.');
                    }),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPemesananKapals::route('/'),
            'create' => Pages\CreatePemesananKapal::route('/create'),
            'edit' => Pages\EditPemesananKapal::route('/{record}/edit'),
        ];
    }
}
