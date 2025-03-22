<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KapalResource\Pages;
use App\Filament\Resources\KapalResource\RelationManagers;
use App\Models\Kapal;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KapalResource extends Resource
{
    protected static ?string $model = Kapal::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('gambar')
                    ->required(),
                Forms\Components\Select::make('id_fasilitas')
                    ->relationship('fasilitas', 'nama')
                    ->label('Fasilitas')
                    ->multiple()
                    ->preload()
                    ->searchable()
                    ->required(),
                Forms\Components\TextInput::make('nama_kapal')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('id_rute')
                ->relationship('rute', 'rute')
                ->preload(),
                Forms\Components\TextInput::make('kapasitas')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('harga_tiket')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('deskripsi')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Select::make('status_kapal')
                    ->options([
                        'tersedia' => 'Tersedia',
                        'sudah penuh' => 'Sudah Penuh',
                        'dalam pemeliharaan' => 'Dalam Pemeliharaan'
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('gambar')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fasilitas.nama')
                    ->listWithLineBreaks()
                    ->bulleted()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama_kapal')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kapasitas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('harga_tiket')
                    ->numeric()
                    ->formatStateUsing(function ($state) {
                        return 'Rp ' . number_format($state, 0, ',', '.');
                    })
                    
                    ->sortable(),
                Tables\Columns\TextColumn::make('status_kapal')
                ->badge(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListKapals::route('/'),
            'create' => Pages\CreateKapal::route('/create'),
            'edit' => Pages\EditKapal::route('/{record}/edit'),
        ];
    }
}
