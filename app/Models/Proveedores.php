<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    use HasFactory;
    protected $table="proveedores";
    protected $primaryKey="id_proveedor";
    protected $fillable = [
        'razon_social',
        'rfc_prov',
        'telefono_prov',
        'correo_prov',
        'id_estado',
        'id_municipio',
        'colonia_prov',
        'calle_prov',
        'numero_prov',
        'cp_prov',
        'nombrecontact_prov',
    ];

}
