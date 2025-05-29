<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\EmpleadoResource\Pages;
use App\Models\Empleado;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;

class EmpleadoResource extends Resource
{
    protected static ?string $model = Empleado::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('nombre')->required()->label('Nombre'),
            TextInput::make('apellidos')->required()->label('Apellidos'),
            TextInput::make('dni')->required()->label('DNI'),
            Select::make('nivel_acceso')
                ->options([
                    'Total' => 'Total',
                    'Usuario' => 'Usuario',
                    'Consulta' => 'Consulta',
                ])
                ->required()
                ->label('Nivel de acceso'),
            Toggle::make('acceso_datos')->label('Acceso a datos'),
            TextInput::make('funciones')->label('Funciones'),
            TextInput::make('fecha_alta')->label('Fecha de alta')->type('date')->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nombre')->searchable()->label('Nombre'),
                TextColumn::make('apellidos')->label('Apellidos'),
                TextColumn::make('dni')->label('DNI'),
                TextColumn::make('nivel_acceso')->label('Nivel de acceso'),
                IconColumn::make('acceso_datos')->boolean()->label('Acceso a datos'),
                TextColumn::make('fecha_alta')->date('d/m/Y')->label('Fecha de alta'),
            ])
            ->defaultSort('fecha_alta', 'desc')
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
            'index' => Pages\ListEmpleados::route('/'),
            'create' => Pages\CreateEmpleado::route('/create'),
            'edit' => Pages\EditEmpleado::route('/{record}/edit'),
        ];
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Protección de Datos';
    }
} 