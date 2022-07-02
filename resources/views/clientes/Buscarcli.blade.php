@extends('layouts.app')
@section('content')




<br>
 
<div class="row">
<div class="col-md-1"></div>
  <div class="col-md-10">
  
  <div class="card">
  <div class="card-body" style="background-color: #e3f2fd;">
  <div class="row">
    
    <div class="col-md-8">
      <div class="col-md-6"><h2><em> <strong> Clientes Encontrados</strong> </em></h2>
      </div>
    </div>
    
  </div>

    
<table class="table">
<br>
<thead>

<tr>
       
    <th scope="col">Cedula</th>
    <th scope="col">Nombres</th>
    <th scope="col">Ciudad</th>    
    <th scope="col">Dirección</th>
    <th scope="col">Teléfono</th>
    <th scope="col">Ocupacion</th>
    <th scope="col">Empresa Trabajo</th>
    <th scope="col">Valor Deuda</th>
</tr>

</thead>


</tbody>
@foreach($deuda as $de)
       
<tr>
       
            <td>{{$c ->cedula}}</td>
            <td>{{$c ->nombrecli}}</td>
            <td>{{$c ->ciudad}}</td>
            <td>{{$c ->direccion}}</td>
            <td>{{$c ->telefonocli}}</td>
            <td>{{$c ->ocupacion}}</td>
            <td>{{$c ->empresa}}</td>
            
            
            <td>{{$de ->saldo}}</td>   
           
           
          
            <td>
            <a class="btn btn-primary btn-sm active" role="button" aria-pressed="true" href="{{route('registropago',$c->cedula)}}" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg> Pagar </a>
    &nbsp&nbsp&nbsp&nbsp
    
            </td>
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