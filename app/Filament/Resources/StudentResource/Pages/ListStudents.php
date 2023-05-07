<?php

namespace App\Filament\Resources\StudentResource\Pages;

use App\Filament\Resources\StudentResource;
use Filament\Pages\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListStudents extends ListRecords {

    protected static string $resource = StudentResource::class;

    protected function getActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

}
