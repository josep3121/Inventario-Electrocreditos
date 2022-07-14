<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Pagos;

class ganancias extends Controller
{
    public function listarG(){
        
        return view('Ganancias.visualizar_ganancias');
        
        }
        public function Gana_mes(Request $request){
        
                $Fecha_ini= $request->input('buscar');
                $Fecha_Final= $request->input('buscar1');
                $pagos = DB::table('pagos as pa')
                ->where('fecha','>=', $Fecha_ini)
                ->where('fecha','<=', $Fecha_Final)
                ->sum('ganancia');
        //print_r($Fecha_ini);
                //die();
               
                        //procedemos a enviar esa informacion a la vista
                        return view('Ganancias.ganancia_mes',['pagos'=>$pagos]);
                
                }
}
