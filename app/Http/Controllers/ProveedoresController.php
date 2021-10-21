<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estados;
use App\Models\Municipios;
use App\Models\Proveedores;


class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reporte()
    {
        $reporte=\DB::select(
            "SELECT p.id_proveedor,p.razon_social, p.nombrecontact_prov, p.rfc_prov, p.telefono_prov,p. correo_prov,
            e.nombre_est AS estado, m.nombre_mun AS municipio,
            CONCAT(p.colonia_prov, ',', p.calle_prov, ',', p.numero_prov) AS direccion, p.cp_prov
            FROM proveedores AS p 
            INNER JOIN municipios AS m ON m.id_municipio = p.id_municipio 
            INNER JOIN estados AS e ON e.id_estado = p.id_estado "); 
        return response()->json($reporte,200);
    }
    public function detalle(Proveedores $idp, Estados $Est)
    {
        return response()->json($idp, 200);
    }
    public function Estados()
    {
        $Est = Estados::all();
        return response()->json($Est, 200);
    }
    public function Municipios()
    {
        $Mun = Municipios::all();
        return response()->json($Mun, 200);
    }
    public function editar(Request $request, Proveedores $idp)
    {
        $idp -> update($request->all());
        return response()->json($idp, 200);
    }
    public function alta(Request $request)
    {
        $alta = Proveedores::create($request->all());
        return response()->json($alta, 201);
    }
    public function borrar(Proveedores $idp)
    {
        $idp ->delete();
        return response()->json(null, 204);
    }
}
