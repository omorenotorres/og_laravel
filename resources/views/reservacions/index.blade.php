@extends('layouts.app')

@section('content') 
  <div class="container">
    @include('reservacions.fragment.info')
    <div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4"></div>
      <div class="col-lg-4">@include('reservacions.fragment.aside')</div>
    </div>
    <div class="row">
      <div class=col-lg-12>
        <br>
        <br>
        <h2>
          RESERVACIONES
          <a href="{{ route('reservacions.create') }}" class="btn btn-primary float-right">Nuevo</a>
        </h2>
        <br>
        <br>
        <table class="table table-hover table-striped">
          <thead>
            <th>NOMBRE</th>
            <th>CORREO</th>
            <th>COMENSALES</th>
            <th>FECHA</th>
            <th>HORA</th>
            <th>TELEFONO</th>


            <th colspan="3">Acciones</th>
          </thead>
          <tbody>
            @foreach($reservacions as $reservacion)
              <tr>
                <td>{{ $reservacion->nombre }}</td>
                <td>{{ $reservacion->correo }}</td>
                <td>{{ $reservacion->comensales }}</td>
                <td>{{ $reservacion->fecha }}</td>
                <td>{{ $reservacion->hora }}</td>
                <td>{{ $reservacion->telefono }}</td>

                
                <td>
                  <a href="{{ route('reservacions.show', $reservacion->id) }}" class="btn btn-link" >Ver</a>
                </td>
                <td>
                  <a href="{{ route('reservacions.edit', $reservacion->id) }}" class="btn btn-link" >Editar</a>
                </td>
                <td>
                  <form action="{{ route('reservacions.destroy', $reservacion->id) }}" method="POST">
             	      {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-link">Borrar</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {!! $reservacions->render() !!}
      </div>
    </div>
  </div>
@endsection
