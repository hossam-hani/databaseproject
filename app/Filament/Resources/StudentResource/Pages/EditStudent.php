<?php

namespace App\Filament\Resources\StudentResource\Pages;

use App\Filament\Resources\StudentResource;
use Filament\Pages\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditStudent extends EditRecord {

    protected static string $resource = StudentResource::class;

    protected function getActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

}
