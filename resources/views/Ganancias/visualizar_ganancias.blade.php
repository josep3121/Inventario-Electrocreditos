@extends('layouts.app')
@section('content')

<h1>Ganancias</h1>
<form class="row g-3" action="{{url('buscarF')}}" method="POST">
    @csrf
            <div class="col-auto">
              <input type="date" class="form-control" id="buscar" name="buscar" >
            </div>
            <div class="col-auto">
              <input type="date" class="form-control" id="buscar1" name="buscar1" >
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-primary mb-3">Buscar</button>
            </div>
          </form>

@stop