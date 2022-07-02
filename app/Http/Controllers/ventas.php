<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\Credito;
use App\Models\Ganancia;

class ventas extends Controller
{
    public function index(){
        
        $ventas = DB::table('ventas as ven')

        ->join('clientes as cli', 'ven.clientes_cedula', '=', 'cli.cedula')

        ->join('productos as pro', 'ven.productos_referencia', '=', 'pro.referencia')
        
        ->select('ven.recibo','ven.fecha','ven.numcuota', 'ven.cantidad','ven.abono', 'ven.metodo', 'cli.nombrecli','pro.nombrepro')
        
        //nombre de la tabla ;  atributo de la tabla productos; que sea igual; al id dela tabla categorias
        ->get(); 
                //procedemos a enviar esa informacion a la vista
                return view('ventas.visualizar_ventas',['ventas'=>$ventas]);
        
        
        
    }
     
    public function registroVentas(){

        $clientes = Cliente::all();
        $productos = Producto::all();
        return view('ventas.Regis_ventas',compact('clientes','productos'));

    }
    
    public function registrar(Request $request){
        //Aqui se hace el registro de la categoria y productos en la base de datos
        $vent = new Venta();
        
        $vent->recibo  = $request->input('idreci');
        $vent->fecha  = $request->input('fechaVen');
        $vent->numcuota  = $request->input('cuotasVen');
        $vent->cantidad  = $request->input('cantidadPro');
        $vent->abono  = $request->input('abono');
    //nombre de variable, nombre de atributo de tabla, y nombre del input de formulario
        $vent->metodo  = $request->input('metodopagoVen');
        $vent->clientes_cedula  = $request->input('cliente_id');
        $vent->productos_referencia = $request->input('producto_id');
        

        $vent->save();
        //////////////////validacion Credito////////////
        if($vent->metodo=='Credito'){
            $credito = new Credito();
            $idpro = $request->input('producto_id');
            $abono  = $request->input('abono');
            $producto = DB::table('productos')->where('referencia','=',$idpro)->get();
            $total=$vent->cantidad-$abono;
         //print_r($producto[0]->preciopro);
        // die('hola');
        $credito->saldo  = $total;
        $credito->numcuota  = $request->input('cuotasVen');
        $credito->idfactura  = $request->input('idreci');
        
    //nombre de variable, nombre de atributo de tabla, y nombre del input de formulario
        
        $credito->cedcliente  = $request->input('cliente_id');
        $vent->productos_referencia = $request->input('producto_id');
        

        $credito->save();
        }
        $ganancia=new Ganancia();
        $gana=($vent->cantidad-$producto[0]->preciopro)/$credito->numcuota;
        $ganancia->gana=$gana;
        $ganancia->recibo= $vent->recibo;
        $ganancia->save();
        //print_r($gana);
        //die();
        return view('dashboard');
       
    }

}
