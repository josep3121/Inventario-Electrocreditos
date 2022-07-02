@extends('layouts.app')
@section('content')




<br>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
  
  <div class="card">
  <div class="card-body" style="background-color: #e3f2fd;">
  <div class="col-md-6"><h2><em> <strong>Lista Ventas <a href="{{url('ventas/registro')}}" class="btn btn-success btn-sm">
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="20" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg>Nuevo</a></strong> </em></h2>
  
  
  </div>
  
<table class="table">
<br>
<thead>

<tr>
       
    <th scope="col">Id_Factura</th>    
    <th scope="col">Fecha</th>
    <th scope="col">Numero de Cuotas</th>
    <th scope="col">Cantidad</th>
    <th scope="col">Abono</th>
    <th scope="col">Modo de Pago</th>
    <th scope="col">Cliente</th>
    <th scope="col">Nombre de Producto</th>
    
</tr>

</thead>


</tbody>
@foreach($ventas as $v)
        <tr>
            <td>{{$v ->recibo}}</td>
            <td>{{$v ->fecha}}</td>
            <td>{{$v ->numcuota}}</td>
            <td>{{$v ->cantidad}}</td>
            <td>{{$v ->abono}}</td>
            <td>{{$v ->metodo}}</td>
            <td>{{$v ->nombrecli}}</td>
            <td>{{$v ->nombrepro}}</td>
            <td>
           
        </tr>
@endforeach
</tbody>


</table>  
    
  </div>
</div>

  
  
  </div>
  <div class="col-md-1"></div>
</div>
@stop