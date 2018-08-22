@extends('layouts.app')

@section('content') 
  <div class="container">
    @include('contactos.fragment.info')
    <div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4"></div>
      <div class="col-lg-4">@include('contactos.fragment.aside')</div>
    </div>
    <div class="row">
      <div class=col-lg-12>
        <br>
        <br>
        <h2>
          TIPOS DE CONTACTOS
          <a href="{{ route('contactos.create') }}" class="btn btn-primary float-right">Nuevo</a>
        </h2>
        <br>
        <br>
        <table class="table table-hover table-striped">
          <thead>
            <th>CONTACTO</th>
            <th>INFORMACION</th>
            <th>IMAGEN</th>
            <th colspan="3">Acciones</th>
          </thead>
          <tbody>
            @foreach($contactos as $contacto)
              <tr>
                <td>{{ $contacto->co_descripcion }}</td>
                <td>{{ $contacto->co_informacion }}</td>
                <td>
                  @if($contacto->co_imagen)
                    <img src="{{ $contacto->co_imagen }}" class="img-responsive" width="100" height="100">
                  @endif
                </td>
                
                <td>
                  <a href="{{ route('contactos.show', $contacto->id) }}" class="btn btn-link" >Ver</a>
                </td>
                <td>
                  <a href="{{ route('contactos.edit', $contacto->id) }}" class="btn btn-link" >Editar</a>
                </td>
                <td>
                  <form action="{{ route('contactos.destroy', $contacto->id) }}" method="POST">
             	      {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-link">Borrar</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {!! $contactos->render() !!}
      </div>
    </div>
  </div>
@endsection
