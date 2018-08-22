@extends('layouts.app')

@section('content') 
  <div class="container">
    @include('carousels.fragment.info')
    <div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4"></div>
      <div class="col-lg-4">@include('carousels.fragment.aside')</div>
    </div>
    <div class="row">
      <div class=col-lg-12>
        <br>
        <br>
        <h2>
          Listado de imagenes del Carrusel
          <a href="{{ route('carousels.create') }}" class="btn btn-primary float-right">Nuevo</a>
        </h2>
        <br>
        <br>
        <table class="table table-hover table-striped">
          <thead>
            <th>TITULO</th>
            <th>IMAGEN</th>
            <th colspan="3">Acciones</th>
          </thead>
          <tbody>
            @foreach($carousels as $carousel)
              <tr>
                <td>{{ $carousel->c_titulo }}</td>
                <td>
                  @if($carousel->c_imagen)
                    <img src="{{ $carousel->c_imagen }}" class="img-responsive" width="100" height="100">
                  @endif
                </td>
                
                <td>
                  <a href="{{ route('carousels.show', $carousel->id) }}" class="btn btn-link" >Ver</a>
                </td>
                <td>
                  <a href="{{ route('carousels.edit', $carousel->id) }}" class="btn btn-link" >Editar</a>
                </td>
                <td>
                  <form action="{{ route('carousels.destroy', $carousel->id) }}" method="POST">
             	      {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-link">Borrar</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {!! $carousels->render() !!}
      </div>
    </div>
  </div>
@endsection
