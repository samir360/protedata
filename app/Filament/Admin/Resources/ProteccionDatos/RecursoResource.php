<?php

namespace App\Filament\Admin\Resources\ProteccionDatos;

use App\Models\Recurso;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Radio;

class RecursoResource extends Resource
{
    protected static ?string $model = Recurso::class;

    protected static ?string $navigationIcon = 'heroicon-o-server';
    protected static ?string $navigationLabel = 'Recursos';
    protected static ?string $navigationGroup = 'Protección de Datos';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Card::make()->schema([
                Tabs::make('Recursos')
                    ->tabs([
                        Tab::make('Hardware')
                            ->schema([
                                TextInput::make('servidores')->numeric()->label('Nº servidores'),
                                TextInput::make('servidores_so')->label('Sistema operativo servidores'),
                                TextInput::make('pcs_sobremesa')->numeric()->label("Nº PC's de sobremesa"),
                                TextInput::make('pcs_sobremesa_so')->label("Sistema operativo PC's sobremesa"),
                                TextInput::make('portatiles')->numeric()->label('Nº portátiles/tablets'),
                                TextInput::make('portatiles_so')->label('Sistema operativo portátiles/tablets'),
                                TextInput::make('impresoras_locales')->numeric()->label('Nº impresoras locales'),
                                TextInput::make('impresoras_red')->numeric()->label('Nº impresoras en red'),
                                TextInput::make('tipo_red')->label('Tipo de red'),
                            ]),
                        Tab::make('Software')
                            ->schema([
                                TextInput::make('copias_seguridad_ubicacion')->label('¿Dónde se realizan las copias de seguridad?'),
                                Radio::make('copias_seguridad_frecuencia')
                                    ->label('¿Cada cuánto tiempo se realiza una copia de seguridad?')
                                    ->options([
                                        'Diaria' => 'Diaria',
                                        'Semanal' => 'Semanal',
                                        'Mensual' => 'Mensual',
                                        'Sin frecuencia' => 'Sin frecuencia',
                                    ])
                                    ->inline(),
                                TextInput::make('software')->label('Software'),
                            ]),
                        Tab::make('Seguridad')
                            ->schema([
                                TextInput::make('medidas_seguridad')->label('Medidas de seguridad: En el local/oficinas'),
                                TextInput::make('doc_papel_ubicacion')->label('¿Dónde se almacena la documentación en papel?'),
                                Radio::make('camaras_vigilancia')
                                    ->label('¿Tienen cámaras de videovigilancia?')
                                    ->options(['1' => 'Sí', '0' => 'No'])
                                    ->inline(),
                                Radio::make('carteles_grabacion')
                                    ->label('¿Se informa con carteles de que se está grabando?')
                                    ->options(['1' => 'Sí', '0' => 'No'])
                                    ->inline(),
                            ]),
                    ])
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('servidores')->label('Servidores'),
                TextColumn::make('pcs_sobremesa')->label('PCs sobremesa'),
                TextColumn::make('portatiles')->label('Portátiles'),
                TextColumn::make('impresoras_locales')->label('Impresoras locales'),
                TextColumn::make('impresoras_red')->label('Impresoras red'),
                TextColumn::make('tipo_red')->label('Tipo de red'),
            ])
            ->defaultSort('id', 'desc')
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
            'index' => \App\Filament\Admin\Resources\ProteccionDatos\RecursoResource\Pages\ListRecursos::route('/'),
            'create' => \App\Filament\Admin\Resources\ProteccionDatos\RecursoResource\Pages\CreateRecurso::route('/create'),
            'edit' => \App\Filament\Admin\Resources\ProteccionDatos\RecursoResource\Pages\EditRecurso::route('/{record}/edit'),
        ];
    }
} 