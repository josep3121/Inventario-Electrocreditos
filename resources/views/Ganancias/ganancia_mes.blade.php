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
      <div class="col-md-6"><h2><em> <strong>Ganancias Mensuales </strong> </em></h2>
      </div>
    </div>
    
<table class="table">
<br>
<thead>

<tr>
       
    
    <th scope="col">Ganancia</th>
    
</tr>

</thead>


</tbody>

        <tr>
            <td>{{$pagos}}</td>
 
        </tr>

</tbody>

</table>  
    
  </div>
</div>

  </div>
  <div class="col-md-1"></div>
</div>


@stop