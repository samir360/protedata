<?php

namespace App\Filament\Admin\Resources\ProteccionDatos;

use App\Models\SitioWeb;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\CreateAction;
use Filament\Forms\Components\TextInput;

class SitioWebResource extends Resource
{
    protected static ?string $model = SitioWeb::class;
    protected static ?string $navigationGroup = 'Protección de Datos';
    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';
    protected static ?string $navigationLabel = 'Sitios web';
    protected static ?string $pluralLabel = 'Sitios web';
    protected static ?string $label = 'Sitio web';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('url')
                ->label('URL')
                ->required()
                ->unique(ignoreRecord: true)
                ->url()
                ->placeholder('https://...'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('url')->label('URL')->searchable()->sortable(),
                TextColumn::make('created_at')->label('Creado')->dateTime('d/m/Y')->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->headerActions([
                CreateAction::make(),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSitiosWeb::route('/'),
            'create' => CreateSitioWeb::route('/create'),
            'edit' => EditSitioWeb::route('/{record}/edit'),
        ];
    }
}

class ListSitiosWeb extends ListRecords
{
    protected static string $resource = SitioWebResource::class;
}

class CreateSitioWeb extends CreateRecord
{
    protected static string $resource = SitioWebResource::class;
}

class EditSitioWeb extends EditRecord
{
    protected static string $resource = SitioWebResource::class;
} 