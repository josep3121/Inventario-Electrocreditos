@extends('layouts.app')
@section('content')




<br>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
  
  <div class="card">
  <div class="card-body" style="background-color: #e3f2fd;">
  <div class="col-md-6"><h2><em> <strong>Listado de Productos <a href="{{url('/productos/registro')}}" class="btn btn-success btn-sm">
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="20" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg>Nuevo</a></strong> </em></h2>
  
  
  </div>
  
<table class="table">
<br>
<thead>

<tr>
       
    <th scope="col">Referencia</th>
    <th scope="col">Nombre</th>
    <th scope="col">Cantidad</th> 
    <th scope="col">Precio</th>    
    <th scope="col">Descripcion</th>
    <th scope="col">Color</th>
    <th scope="col">Disponible</th>
    
</tr>

</thead>


</tbody>
@foreach($productos as $pro)
        <tr>
            <td>{{$pro ->referencia}}</td>
            <td>{{$pro ->nombrepro}}</td>
            <td>{{$pro ->cantidadpro}}</td>
            <td>{{$pro ->preciopro}}</td>
            <td>{{$pro ->descripcionpro}}</td>
            <td>{{$pro ->color}}</td>
            <td>{{$pro ->disponible}}</td>
            
            <td>
            <a class="btn btn-primary btn-sm active" role="button" aria-pressed="true" href="#" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg> Editar </a>
    &nbsp&nbsp&nbsp&nbsp
    <a class="btn btn-danger btn-sm text-light active" href="#" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg> Eliminar </a>
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