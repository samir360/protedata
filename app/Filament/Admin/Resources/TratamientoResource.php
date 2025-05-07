<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\TratamientoResource\Pages;
use App\Models\Tratamiento;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;

class TratamientoResource extends Resource
{
    protected static ?string $model = Tratamiento::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';
    protected static ?string $navigationLabel = 'Tratamientos';
    protected static ?string $navigationGroup = 'Protección de Datos';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('nombre')->required()->label('Nombre'),
            TextInput::make('fecha')->type('date')->required()->label('Fecha'),
            TextInput::make('estado')->required()->label('Estado'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nombre')->searchable()->label('Nombre'),
                TextColumn::make('fecha')->date('d/m/Y')->label('Fecha'),
                BadgeColumn::make('estado')
                    ->label('Estado')
                    ->colors([
                        'success' => 'completo',
                        'danger' => 'incompleto',
                    ])
                    ->formatStateUsing(fn ($state) => ucfirst($state)),
            ])
            ->defaultSort('fecha', 'desc')
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTratamientos::route('/'),
            'create' => Pages\CreateTratamiento::route('/create'),
            'edit' => Pages\EditTratamiento::route('/{record}/edit'),
        ];
    }
} 