<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Pagos;

class pago extends Controller
{
    public function listar(){
        
        //Listado de clientes
        $pagos = DB::table('pagos as pa')

        
        
        ->select('pa.idpagos','pa.cedcliente', 'pa.valorpago',
         'pa.fecha', 'pa.idcredito')
        ->get(); 
                //procedemos a enviar esa informacion a la vista
                return view('Visualizar_pagos',['pagos'=>$pagos]);
        
        }
}
