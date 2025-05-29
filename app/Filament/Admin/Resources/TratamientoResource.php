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
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\CheckboxList;
use App\Models\Finalidad;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Toggle;

class TratamientoResource extends Resource
{
    protected static ?string $model = Tratamiento::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';
    protected static ?string $navigationLabel = 'Tratamientos';
    protected static ?string $navigationGroup = 'Protección de Datos';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Card::make()->schema([
                Tabs::make('Tratamiento')
                    ->tabs([
                        Tab::make('Finalidad')
                            ->schema([
                                TextInput::make('nombre')->required()->label('Nombre del tratamiento'),
                                CheckboxList::make('finalidades')
                                    ->label('Finalidades del tratamiento')
                                    ->relationship('finalidades', 'nombre')
                                    ->columns(2)
                                    ->helperText('La finalidad del tratamiento de datos personales no es otra cosa que el por qué tratamos dichos datos, para qué los vamos a utilizar.'),
                                Textarea::make('observaciones')->label('Observaciones'),
                            ]),
                        Tab::make('Interesados')
                            ->schema([
                                Placeholder::make('explicacion_interesados')
                                    ->content('Los interesados son los colectivos de los cuales se tratan datos de carácter personal, distinguidos según la clasificación que posean dentro de la entidad, como pueden ser clientes, empleados, etc.'),
                                CheckboxList::make('interesados')
                                    ->label('Colectivos interesados')
                                    ->options([
                                        'Empleados' => 'Empleados',
                                        'Clientes y usuarios' => 'Clientes y usuarios',
                                        'Proveedores' => 'Proveedores',
                                        'Asociados o miembros' => 'Asociados o miembros',
                                        'Propietarios o arrendatarios' => 'Propietarios o arrendatarios',
                                        'Pacientes' => 'Pacientes',
                                        'Estudiantes' => 'Estudiantes',
                                        'Personas de contacto' => 'Personas de contacto',
                                        'Padres o tutores' => 'Padres o tutores',
                                        'Representante legal' => 'Representante legal',
                                        'Solicitantes' => 'Solicitantes',
                                        'Beneficiarios' => 'Beneficiarios',
                                        'Cargos públicos' => 'Cargos públicos',
                                    ])
                                    ->columns(2),
                            ]),
                        Tab::make('Tipo de datos')
                            ->schema([
                                Placeholder::make('explicacion_tipo_datos')
                                    ->content('Son las diferentes categorías de datos que podemos recoger de los interesados según la finalidad que determine el tratamiento.'),
                                Select::make('categoria')
                                    ->label('Selecciona la categoría de datos')
                                    ->options([
                                        'identificacion' => 'Identificación',
                                        'caracteristicas' => 'Características personales',
                                        'academicos' => 'Académicos',
                                        'profesionales' => 'Profesionales',
                                        'bancarios' => 'Bancarios',
                                        'financieros' => 'Financieros y de crédito',
                                        'sensibles' => 'Sensibles',
                                    ])
                                    ->required()
                                    ->statePath('tipo_datos.categoria')
                                    ->reactive(),
                                Group::make([
                                    CheckboxList::make('identificacion')
                                        ->label('Datos de identificación')
                                        ->options([
                                            'Nombre' => 'Nombre',
                                            'Apellidos' => 'Apellidos',
                                            'NIF' => 'NIF',
                                            'Dirección postal' => 'Dirección postal',
                                            'Teléfono' => 'Teléfono',
                                            'Correo electrónico' => 'Correo electrónico',
                                            'Imagen' => 'Imagen',
                                            'Voz' => 'Voz',
                                            'Nº SS / Mutualidad' => 'Nº SS / Mutualidad',
                                            'Marcas físicas' => 'Marcas físicas',
                                            'Firma' => 'Firma',
                                            'Firma electrónica' => 'Firma electrónica',
                                            'Tarjeta sanitaria' => 'Tarjeta sanitaria',
                                            'Matrícula' => 'Matrícula',
                                        ])
                                        ->columns(2)
                                        ->statePath('tipo_datos.identificacion'),
                                ])->visible(fn($get) => $get('tipo_datos.categoria') === 'identificacion'),
                                Group::make([
                                    CheckboxList::make('caracteristicas')
                                        ->label('Características personales')
                                        ->options([
                                            'Estado civil' => 'Estado civil',
                                            'Fecha y lugar de nacimiento' => 'Fecha y lugar de nacimiento',
                                            'Edad' => 'Edad',
                                            'Sexo' => 'Sexo',
                                            'Nacionalidad' => 'Nacionalidad',
                                        ])
                                        ->columns(2)
                                        ->statePath('tipo_datos.caracteristicas'),
                                ])->visible(fn($get) => $get('tipo_datos.categoria') === 'caracteristicas'),
                                Group::make([
                                    CheckboxList::make('academicos')
                                        ->label('Datos académicos')
                                        ->options([
                                            'Vida laboral' => 'Vida laboral',
                                            'Título' => 'Título',
                                        ])
                                        ->columns(2)
                                        ->statePath('tipo_datos.academicos'),
                                ])->visible(fn($get) => $get('tipo_datos.categoria') === 'academicos'),
                                Group::make([
                                    CheckboxList::make('profesionales')
                                        ->label('Datos profesionales')
                                        ->options([
                                            'Cargo' => 'Cargo',
                                            'Centro de trabajo' => 'Centro de trabajo',
                                            'Registro de entrada y salida' => 'Registro de entrada y salida',
                                        ])
                                        ->columns(2)
                                        ->statePath('tipo_datos.profesionales'),
                                ])->visible(fn($get) => $get('tipo_datos.categoria') === 'profesionales'),
                                Group::make([
                                    CheckboxList::make('bancarios')
                                        ->label('Datos bancarios')
                                        ->options([
                                            'IBAN / Cuenta bancaria' => 'IBAN / Cuenta bancaria',
                                            'Tarjetas de crédito' => 'Tarjetas de crédito',
                                        ])
                                        ->columns(2)
                                        ->statePath('tipo_datos.bancarios'),
                                ])->visible(fn($get) => $get('tipo_datos.categoria') === 'bancarios'),
                                Group::make([
                                    CheckboxList::make('financieros')
                                        ->label('Datos financieros y de crédito')
                                        ->options([
                                            'Obligaciones dinerarias (morosidad)' => 'Obligaciones dinerarias (morosidad)',
                                            'Activos monetarios y no monetarios' => 'Activos monetarios y no monetarios',
                                            'Pasivos monetarios y no monetarios' => 'Pasivos monetarios y no monetarios',
                                            'Patrimonio' => 'Patrimonio',
                                            'Rentas' => 'Rentas',
                                            'Créditos' => 'Créditos',
                                            'Préstamos' => 'Préstamos',
                                            'Avales' => 'Avales',
                                            'Planes de pensiones' => 'Planes de pensiones',
                                            'Seguros' => 'Seguros',
                                            'Hipotecas' => 'Hipotecas',
                                            'Subsidios' => 'Subsidios',
                                            'Impuestos' => 'Impuestos',
                                            'Historial de créditos' => 'Historial de créditos',
                                        ])
                                        ->columns(2)
                                        ->statePath('tipo_datos.financieros'),
                                ])->visible(fn($get) => $get('tipo_datos.categoria') === 'financieros'),
                                Group::make([
                                    Placeholder::make('explicacion_sensibles')
                                        ->content('En esta categoría de datos hay que tener especial cuidado ya que para su tratamiento deberemos cumplir unas medidas de seguridad mucho más estrictas.'),
                                    CheckboxList::make('sensibles')
                                        ->label('Datos sensibles')
                                        ->options([
                                            'Origen étnico o racial' => 'Origen étnico o racial',
                                            'Ideología / Opiniones políticas' => 'Ideología / Opiniones políticas',
                                            'Religión' => 'Religión',
                                            'Afiliación sindical (excepto cuotas sindicales)' => 'Afiliación sindical (excepto cuotas sindicales)',
                                            'Genéticos' => 'Genéticos',
                                            'Biométricos dirigidos a identificar de manera unívoca a una persona' => 'Biométricos dirigidos a identificar de manera unívoca a una persona',
                                            'Salud física o mental' => 'Salud física o mental',
                                            'Orientación sexual o vida sexual' => 'Orientación sexual o vida sexual',
                                            'Condenas o infracciones penales' => 'Condenas o infracciones penales',
                                            'Geolocalización' => 'Geolocalización',
                                        ])
                                        ->columns(2)
                                        ->statePath('tipo_datos.sensibles'),
                                ])->visible(fn($get) => $get('tipo_datos.categoria') === 'sensibles'),
                            ]),
                        Tab::make('Legitimación')
                            ->schema([
                                Placeholder::make('explicacion_legitimacion')
                                    ->content('La base de legitimación es el motivo que justifica que podamos tratar los datos personales correspondientes. Por ejemplo, un contrato laboral con nuestros empleados.'),
                                CheckboxList::make('legitimacion')
                                    ->label('Base de legitimación')
                                    ->options([
                                        'Contrato' => 'Contrato',
                                        'Consentimiento' => 'Consentimiento',
                                        'Interés legítimo' => 'Interés legítimo',
                                    ])
                                    ->columns(2)
                                    ->statePath('legitimacion'),
                            ]),
                        Tab::make('Datos')
                            ->schema([
                                Placeholder::make('explicacion_datos')
                                    ->content('Se trata del número aproximado de interesados, diferenciados por tratamiento. Este número nos permitirá determinar si se tratan datos a gran escala y si es así establecer los procedimientos pertinentes.'),
                                Radio::make('datos_interesados')
                                    ->label('Número aproximado de interesados')
                                    ->options([
                                        'Hasta 1000' => 'Hasta 1000',
                                        '1000 - 5000' => '1000 - 5000',
                                        '5000 - 25000' => '5000 - 25000',
                                        'Big Data' => 'Big Data',
                                    ])
                                    ->inline()
                                    ->columnSpanFull(),
                            ]),
                        Tab::make('Cesión')
                            ->schema([
                                Placeholder::make('explicacion_cesion')
                                    ->content('Una cesión de datos personales es la comunicación de esos datos a terceros distintos del interesado para que los trate con una finalidad propia. Por ejemplo, la cesión de los datos de nuestros empleados a una gestoría para elaborar las nóminas.'),
                                Toggle::make('cesion')
                                    ->label('¿Existe cesión de datos?')
                                    ->inline(false),
                            ]),
                        Tab::make('Transf. Internacional')
                            ->schema([
                                Placeholder::make('explicacion_transferencia')
                                    ->content('Una transferencia internacional de datos es la comunicación de datos personales a terceros que se encuentran situados fuera del territorio de la Unión Europea.'),
                                Toggle::make('transferencia_internacional')
                                    ->label('¿Existe transferencia internacional de datos?')
                                    ->inline(false),
                            ]),
                        Tab::make('Extensión geográfica')
                            ->schema([
                                Placeholder::make('explicacion_extension_geografica')
                                    ->content('La usaremos para determinar, igual que la cantidad de datos, si el tratamiento de datos personales se considera a gran escala y por tanto sujeto a las obligaciones de una Evaluación de Impacto.'),
                                Radio::make('extension_geografica')
                                    ->label('Extensión geográfica del tratamiento')
                                    ->options([
                                        'Regional' => 'Regional',
                                        'Nacional' => 'Nacional',
                                        'Internacional' => 'Internacional',
                                    ])
                                    ->inline()
                                    ->columnSpanFull(),
                            ]),
                        Tab::make('Almacenamiento')
                            ->schema([
                                CheckboxList::make('almacenamiento_recogida')
                                    ->label('¿Cómo se recoge la información personal?')
                                    ->options([
                                        'Papel' => 'Papel',
                                        'Formato electrónico' => 'Formato electrónico',
                                    ])
                                    ->columns(2),
                                CheckboxList::make('almacenamiento_medios')
                                    ->label('¿A través de qué medios se realiza el tratamiento?')
                                    ->options([
                                        'Soporte físico' => 'Soporte físico',
                                        'Soporte electrónico' => 'Soporte electrónico',
                                    ])
                                    ->columns(2),
                                CheckboxList::make('almacenamiento_donde')
                                    ->label('¿Dónde se almacenan los datos?')
                                    ->options([
                                        'Sistemas informáticos' => 'Sistemas informáticos',
                                        'Archivadores en papel' => 'Archivadores en papel',
                                    ])
                                    ->columns(2),
                                TextInput::make('almacenamiento_duracion')
                                    ->label('Especifique la duración del periodo en el que conservará los datos (6 meses, 1 año, 5 años...)')
                                    ->columnSpanFull(),
                            ]),
                    ])
            ]),
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