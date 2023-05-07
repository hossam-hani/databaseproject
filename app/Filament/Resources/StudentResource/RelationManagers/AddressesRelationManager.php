<?php

namespace App\Filament\Resources\StudentResource\RelationManagers;

use App\Models\Address;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;

class AddressesRelationManager extends RelationManager {

    protected static string $relationship = 'addresses';

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('street')
                    ->required(),

                TextInput::make('building_number')
                    ->required(),

                TextInput::make('apartment_number')
                    ->required(),

                TextInput::make('floor_number')
                    ->required(),

                Textarea::make('notes'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('street'),

                TextColumn::make('building_number'),

                TextColumn::make('apartment_number'),

                TextColumn::make('floor_number'),

                TextColumn::make('notes'),


            ])->headerActions([
              CreateAction::make(),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }



}
