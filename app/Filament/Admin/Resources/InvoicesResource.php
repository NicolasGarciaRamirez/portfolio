<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\InvoicesResource\Pages;
use App\Filament\Admin\Resources\InvoicesResource\RelationManagers;
use App\Models\Invoices;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InvoicesResource extends Resource
{
    protected static ?string $model = Invoices::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('serie')
                    ->required()
                    ->maxLength(4),
                Forms\Components\TextInput::make('numero')
                    ->required()
                    ->maxLength(8),
                Forms\Components\DatePicker::make('fecha_emision')
                    ->required(),
                Forms\Components\Select::make('tipo_documento')
                    ->required()
                    ->options([
                        '01' => 'Factura',
                        '03' => 'Boleta'
                    ]),
                Forms\Components\Select::make('tipo_moneda')
                    ->required()
                    ->default('PEN')
                    ->options([
                        'PEN' => 'Soles',
                        'USD' => 'Dólares'
                    ]),
                Forms\Components\TextInput::make('emisor_ruc')
                    ->required()
                    ->maxLength(11),
                Forms\Components\TextInput::make('emisor_razon_social')
                    ->required(),
                Forms\Components\TextInput::make('emisor_direccion')
                    ->required(),
                Forms\Components\TextInput::make('emisor_ubigeo')
                    ->required()
                    ->maxLength(6),
                Forms\Components\Select::make('cliente_tipo_documento')
                    ->required()
                    ->options([
                        '6' => 'RUC',
                        '1' => 'DNI'
                    ]),
                Forms\Components\TextInput::make('cliente_numero_documento')
                    ->required()
                    ->maxLength(11),
                Forms\Components\TextInput::make('cliente_razon_social')
                    ->required(),
                Forms\Components\TextInput::make('cliente_direccion'),
                Forms\Components\TextInput::make('cliente_email')
                    ->email(),
                Forms\Components\TextInput::make('total_gravada')
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('total_igv')
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('total_exonerada')
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('total_inafecta')
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('total_gratuita')
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('total_otros_cargos')
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('total_descuentos')
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('total_venta')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('codigo_hash'),
                Forms\Components\TextInput::make('cdr_response'),
                Forms\Components\TextInput::make('cdr_notes'),
                Forms\Components\TextInput::make('sunat_description'),
                Forms\Components\Toggle::make('enviado_sunat')
                    ->default(false),
                Forms\Components\DateTimePicker::make('fecha_envio'),
                Forms\Components\Select::make('estado')
                    ->required()
                    ->default('REGISTRADO')
                    ->options([
                        'REGISTRADO' => 'Registrado',
                        'ENVIADO' => 'Enviado',
                        'ACEPTADO' => 'Aceptado', 
                        'RECHAZADO' => 'Rechazado',
                        'ANULADO' => 'Anulado'
                    ]),
                Forms\Components\Textarea::make('observaciones')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('serie')
                    ->searchable(),
                Tables\Columns\TextColumn::make('numero')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fecha_emision')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tipo_documento')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cliente_razon_social')
                    ->searchable()
                    ->label('Cliente'),
                Tables\Columns\TextColumn::make('cliente_numero_documento')
                    ->searchable()
                    ->label('Documento'),
                Tables\Columns\TextColumn::make('total_venta')
                    ->money('PEN')
                    ->sortable(),
                Tables\Columns\TextColumn::make('estado')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'REGISTRADO' => 'gray',
                        'ENVIADO' => 'warning',
                        'ACEPTADO' => 'success',
                        'RECHAZADO' => 'danger',
                        'ANULADO' => 'danger',
                    })
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
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
            'index' => Pages\ListInvoices::route('/'),
            'create' => Pages\CreateInvoices::route('/create'),
            'edit' => Pages\EditInvoices::route('/{record}/edit'),
        ];
    }
}
