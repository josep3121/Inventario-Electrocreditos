<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('/clientes/visualizar')}}">Clientes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/productos')}}">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('ventas/visualizar')}}">Ventas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('Visualizar_pagos')}}">Pagos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('Ganancias/visualizar_ganancias')}}" >Ganancias</a>
        </li>
      </ul>
    </div>
  </div>
</nav>