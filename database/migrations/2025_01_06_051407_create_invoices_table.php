<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('serie', 4);
            $table->string('numero', 8);
            $table->date('fecha_emision');
            $table->string('tipo_documento', 2); // 01: Factura, 03: Boleta, etc
            $table->string('tipo_moneda', 3)->default('PEN');
            
            // Datos del emisor
            $table->string('emisor_ruc', 11);
            $table->string('emisor_razon_social');
            $table->string('emisor_direccion');
            $table->string('emisor_ubigeo', 6);
            
            // Datos del cliente
            $table->string('cliente_tipo_documento', 1); // 6: RUC, 1: DNI
            $table->string('cliente_numero_documento', 11);
            $table->string('cliente_razon_social');
            $table->string('cliente_direccion')->nullable();
            $table->string('cliente_email')->nullable();
            
            // Totales
            $table->decimal('total_gravada', 12, 2)->default(0);
            $table->decimal('total_igv', 12, 2)->default(0);
            $table->decimal('total_exonerada', 12, 2)->default(0);
            $table->decimal('total_inafecta', 12, 2)->default(0);
            $table->decimal('total_gratuita', 12, 2)->default(0);
            $table->decimal('total_otros_cargos', 12, 2)->default(0);
            $table->decimal('total_descuentos', 12, 2)->default(0);
            $table->decimal('total_venta', 12, 2);
            
            // Datos de envío a SUNAT
            $table->string('codigo_hash')->nullable();
            $table->string('cdr_response')->nullable();
            $table->string('cdr_notes')->nullable();
            $table->string('sunat_description')->nullable();
            $table->boolean('enviado_sunat')->default(false);
            $table->timestamp('fecha_envio')->nullable();
            
            // Estado del documento
            $table->enum('estado', ['REGISTRADO', 'ENVIADO', 'ACEPTADO', 'RECHAZADO', 'ANULADO'])->default('REGISTRADO');
            $table->text('observaciones')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
