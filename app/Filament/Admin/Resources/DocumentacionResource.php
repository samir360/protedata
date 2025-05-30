<?php

namespace App\Filament\Admin\Resources;

use Filament\Resources\Resource;
use App\Filament\Admin\Resources\DocumentacionResource\Pages;

class DocumentacionResource extends Resource
{
    protected static ?string $model = \App\Models\Documentacion::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Documentación';
    protected static ?string $navigationGroup = 'Protección de Datos';
    protected static ?int $navigationSort = 99;

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDocumentaciones::route('/'),
            'view' => Pages\ViewDocumentacion::route('/{record}'),
        ];
    }
} 