<?php

namespace App\Filament\Resources\KapalResource\Pages;

use App\Filament\Resources\KapalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKapal extends EditRecord
{
    protected static string $resource = KapalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
