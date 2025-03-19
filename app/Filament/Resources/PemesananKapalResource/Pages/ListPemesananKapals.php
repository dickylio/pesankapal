<?php

namespace App\Filament\Resources\PemesananKapalResource\Pages;

use App\Filament\Resources\PemesananKapalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPemesananKapals extends ListRecords
{
    protected static string $resource = PemesananKapalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
