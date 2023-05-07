<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Filament\Resources\StudentResource\RelationManagers\AddressesRelationManager;
use App\Filament\Resources\StudentResource\RelationManagers\CoursesRelationManager;
use App\Models\Student;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Columns\TextColumn;

class StudentResource extends Resource {

    protected static ?string $model = Student::class;

    protected static ?string $slug = 'students';

    protected static ?string $recordTitleAttribute = 'name';

    protected static function getNavigationGroup(): ?string
    {
        return __('Student');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make('Student Details')->schema([
                    TextInput::make('name')
                        ->required(),

                    TextInput::make('code')
                        ->required(),

                    TextInput::make('official_email')
                        ->required(),
                ])->columns(2),

                Section::make('Personal details')->schema([
                    TextInput::make('phone_number'),
                    TextInput::make('email')
                ])->columns(2),

                Card::make([
                    Placeholder::make('created_at')
                        ->label('Created Date')
                        ->content(fn(?Student $record): string => $record?->created_at?->diffForHumans() ?? '-'),

                    Placeholder::make('updated_at')
                        ->label('Last Modified Date')
                        ->content(fn(?Student $record): string => $record?->updated_at?->diffForHumans() ?? '-'),
                ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('code'),

                TextColumn::make('official_email'),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            AddressesRelationManager::class,
            CoursesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudent::route('/create'),
            'edit' => Pages\EditStudent::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name'];
    }

}
