<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;
class Productos extends Controller
{
    public function index(){
        
        //Listado de Productos
        $productos = DB::table('productos as pro')

        
        
        ->select('pro.referencia','pro.nombrepro','pro.cantidadpro', 'pro.preciopro',
         'pro.descripcionpro', 'pro.color' , 'pro.disponible')
        
        
        ->get(); 
                //procedemos a enviar esa informacion a la vista
                return view('productos.visualizarpro',['productos'=>$productos]);
        
        }


    public function formularioReg(){
        return view('productos.Regis_Productos');
    }

    public function registrar(Request $request){
        //Aqui se hace el registro de la categoria y productos en la base de datos
        $product = new Producto();
        $product->referencia  = $request->input('refPro');
        $product->nombrepro  = $request->input('nombrePro');
    //nombre de variable, nombre de atributo de tabla, y nombre del input de formulario
        $product->cantidadpro  = $request->input('cantidadPro');
        $product->preciopro  = $request->input('precioPro');
        $product->descripcionpro = $request->input('descPro');
        $product->color = $request->input('colorPro');
        $product->disponible = 'si';
       // $product->categoria = $request->input('categoriaPro');
        
        $product->save();
        return redirect()->route('dashboard');
        //lo envia a la ruta productos nombrada como listadoProductos
    }
        
}
