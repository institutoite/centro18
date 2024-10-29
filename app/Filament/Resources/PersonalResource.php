<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PersonalResource\Pages;
use App\Filament\Resources\PersonalResource\RelationManagers;
use App\Models\Personal;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PersonalResource extends Resource
{
    protected static ?string $model = Personal::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->required()
                    ->maxLength(100),
                    Forms\Components\Select::make('cargo')
                    ->options([
                        'MEDICO' => 'MEDICO',
                        'ENFERMERA' => 'ENFERMERA',
                        'LIMPIEZA' => 'LIMPIEZA',
                        'SECRETARIA' => 'SECRETARIA',
                        'FARMACIA' => 'FARMACIA',
                    ])
                    ->required(),
                Forms\Components\Select::make('turno')
                    ->options([
                        'mañana' => 'MAÑANA',
                        'tarde' => 'TARDE',
                        'noche' => 'NOCHE',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('salario')
                    ->required()
                    ->numeric() // Asegura que solo se acepten números
                    ->step(0.01) // Permite ingresar decimales
                    ->label("Salario"), // Puedes cambiar el label si lo deseas
                Forms\Components\TextInput::make('telefono')
                    ->tel()
                    ->required()
                    ->maxLength(20),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cargo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('turno'),
                Tables\Columns\TextColumn::make('telefono')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
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
            'index' => Pages\ListPersonals::route('/'),
            'create' => Pages\CreatePersonal::route('/create'),
            'edit' => Pages\EditPersonal::route('/{record}/edit'),
        ];
    }
}
