<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\TerceroResource\Pages;
use App\Filament\Admin\Resources\TerceroResource\RelationManagers;
use App\Models\Tercero;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;

class TerceroResource extends Resource
{
    protected static ?string $model = Tercero::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('razon_social')->required()->label('Razón social'),
            TextInput::make('cif_nif_pasaporte')->required()->label('CIF/NIF/Pasaporte'),
            TextInput::make('direccion')->label('Dirección'),
            TextInput::make('cp')->label('CP'),
            TextInput::make('localidad')->label('Localidad'),
            TextInput::make('provincia')->label('Provincia'),
            TextInput::make('email')->email()->required()->label('Email'),
            TextInput::make('telefono')->label('Teléfono'),
            TextInput::make('responsable')->label('Responsable'),
            TextInput::make('dni')->label('DNI'),
            TextInput::make('servicio')->required()->label('Servicio'),
            TextInput::make('duracion_servicio')->label('Duración del servicio'),
            Toggle::make('accede_datos')->label('Accede a datos'),
            Select::make('tratamientos_relacionados')
                ->label('Tratamientos relacionados')
                ->options([
                    'Otro' => 'Otro',
                    'Riesgos' => 'Riesgos',
                    'CV' => 'CV',
                    'Proveedores' => 'Proveedores',
                    'RRHH' => 'RRHH',
                    'Clientes' => 'Clientes',
                    'Contabilidad' => 'Contabilidad',
                ])
                ->required()
                ->placeholder('Ninguno seleccionado'),
            Toggle::make('subcontratacion_permitida')->label('Subcontratación permitida'),
            Toggle::make('notificacion_violacion')->label('Notificación violación por encargado'),
            Toggle::make('es_grupo_empresarial')->label('¿Es de su grupo empresarial?'),
            TextInput::make('destino_final_datos')->label('Destino final de los datos'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('razon_social')->searchable()->label('Razón social'),
                TextColumn::make('cif_nif_pasaporte')->label('CIF/NIF/Pasaporte'),
                TextColumn::make('email')->label('Email'),
                TextColumn::make('servicio')->label('Servicio'),
                IconColumn::make('accede_datos')->boolean()->label('Accede a datos'),
                TextColumn::make('created_at')->date('d/m/Y')->label('Fecha de alta'),
            ])
            ->defaultSort('created_at', 'desc')
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
            'index' => Pages\ListTerceros::route('/'),
            'create' => Pages\CreateTercero::route('/create'),
            'edit' => Pages\EditTercero::route('/{record}/edit'),
        ];
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Protección de Datos';
    }
}
