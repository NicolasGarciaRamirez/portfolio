<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{
    protected $fillable = [
        'serie',
        'numero', 
        'fecha_emision',
        'tipo_documento',
        'tipo_moneda',
        'emisor_ruc',
        'emisor_razon_social',
        'emisor_direccion', 
        'emisor_ubigeo',
        'cliente_tipo_documento',
        'cliente_numero_documento',
        'cliente_razon_social',
        'cliente_direccion',
        'cliente_email',
        'total_gravada',
        'total_igv',
        'total_exonerada',
        'total_inafecta', 
        'total_gratuita',
        'total_otros_cargos',
        'total_descuentos',
        'total_venta',
        'codigo_hash',
        'cdr_response',
        'cdr_notes',
        'sunat_description',
        'enviado_sunat',
        'fecha_envio',
        'estado',
        'observaciones'
    ];

    protected $casts = [
        'fecha_emision' => 'date',
        'total_gravada' => 'decimal:2',
        'total_igv' => 'decimal:2', 
        'total_exonerada' => 'decimal:2',
        'total_inafecta' => 'decimal:2',
        'total_gratuita' => 'decimal:2',
        'total_otros_cargos' => 'decimal:2',
        'total_descuentos' => 'decimal:2',
        'total_venta' => 'decimal:2',
        'enviado_sunat' => 'boolean',
        'fecha_envio' => 'datetime'
    ];
}
