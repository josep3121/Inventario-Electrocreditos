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
      <div class="col-md-6"><h2><em> <strong>Listado de Pagos </strong> </em></h2>
      </div>
    </div>
    <div class="col">
    <form class="row g-3" action="{{url('buscar')}}" method="POST">
    @csrf
            <div class="col-auto">
              <input type="text" class="form-control" id="buscar" name="buscar" placeholder="Cedula Cliente">
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-primary mb-3">Buscar</button>
            </div>
          </form>
    </div>
  </div>

    
<table class="table">
<br>
<thead>

<tr>
       
    <th scope="col">Id Pago</th>
    <th scope="col">Cedula Cliente</th>
    <th scope="col">Valor Pago</th>    
    <th scope="col">Fecha</th>
    <th scope="col">Nùmero de Crèdito</th>
    
</tr>

</thead>


</tbody>
@foreach($pagos as $pa)
        <tr>
            <td>{{$pa ->idpagos}}</td>
            <td>{{$pa ->cedcliente}}</td>
            <td>{{$pa ->valorpago}}</td>
            <td>{{$pa ->fecha}}</td>
            <td>{{$pa ->idcredito}}</td>
 
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