<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Pagos;
use App\Models\Credito;
use App\Models\Ganancia;

class Clientes extends Controller
{

    public function index(){
        
        //Listado de clientes
        $clientes = DB::table('clientes as cli')

        
        
        ->select('cli.cedula','cli.nombrecli', 'cli.ciudad',
         'cli.direccion', 'cli.telefonocli', 'cli.ocupacion' , 'cli.empresa')
        
        
        ->get(); 
                //procedemos a enviar esa informacion a la vista
                return view('clientes.visualizar',['clientes'=>$clientes]);
        
        }

    public function buscarCli(Request $request){
        
        //Cliente Buscado
        $cedula= $request->input('buscar');
        $clientes = DB::table('clientes')->where('cedula','like',$cedula)->get();
        $Deuda = DB::table('creditos')->where('cedcliente','like',$cedula)->get();
                //procedemos a enviar esa informacion a la vista
        if(count($Deuda)==0){
            $Deuda[0]=new \stdClass();
            $Deuda[0]->saldo=0;
        }
                //print_r(count($Deuda));
                //die();
         return view('clientes.Buscarcli',['c'=>$clientes[0],'deuda'=>$Deuda]);
        
    }

     public function formularioReg(){
        return view('clientes.Regis_Clientes');
    }

    public function registrar(Request $request){
        //Aqui se hace el registro de clientes
        $client = new Cliente();
        $client->cedula = $request->input('cedulaCli');
        $client->nombrecli = $request->input('nombreCli');
        $client->ciudad = $request->input('ciudad');      
        $client->direccion = $request->input('direccionCli');   
        $client->telefonocli = $request->input('telefonoCli');  
        $client->ocupacion = $request->input('ocupacion');  
        $client->empresa = $request->input('entidad');  
        $client->save();
        return view('dashboard');
    }
    public function formularioPago($cedula){
        $pago = DB::table('clientes')->where('cedula','like',$cedula)->get();
        $deuda = DB::table('creditos')->where('cedcliente','like',$cedula)->get();
        return view('clientes.formPagos',['pagos'=>$pago,'deudas'=>$deuda]);
    }
   
    public function registrar1(Request $request){
        //Aqui se hace el registro de clientes
        $pagos = new Pagos();
        $id=$request->input('prestamo_id');
        $pagos->idpagos = $request->input('recibo');
        $cuota=$request->input('pago');
        $pagos->valorpago = $cuota;
        $pagos->fecha = $request->input('fecha');      
        $pagos->idcredito=$id;
        $Deuda = DB::table('creditos')->where('idcreditos','like',$id)->get(); 
        $recibo=$Deuda[0]->idfactura;
       
        
        $ganancia = DB::table('ganancia')->where('recibo','like',$recibo)->get(); 
        $pagos->ganancia=$ganancia[0]->gana; 
        $pagos->cedcliente = $Deuda[0]->cedcliente;
        $pagos->save();
        $total= $Deuda[0]->saldo-$cuota;
        
       
       $actuSaldo= Credito::findOrFail($id);//Actualiza el saldo en la tabla creditos lo que queda debiendo
       $actuSaldo->saldo=$total;
      // print_r($total);
       //die();
       $actuSaldo->save();

        return view('dashboard');
    }
    
}
