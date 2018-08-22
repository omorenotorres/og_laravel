@extends('layouts.app')

@section('content') 
  <div class="container">
    @include('carousels.fragment.info')
    <div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4"></div>
      <div class="col-lg-4">@include('promos.fragment.aside')</div>
    </div>
    <div class="row">
      <div class=col-lg-12>
        <br>
        <br>
        <h2>
          Promociones
          <a href="{{ route('promos.create') }}" class="btn btn-primary float-right">Nuevo</a>
        </h2>
        <br>
        <br>
        <table class="table table-hover table-striped">
          <thead>
            <th>TITULO</th>
            <th>DESCRIPCION</th>
            <th>IMAGEN</th>
            <th colspan="3">Acciones</th>
          </thead>
          <tbody>
            @foreach($promos as $promo)
              <tr>
                <td>{{ $promo->p_titulo }}</td>
                <td>{{ $promo->p_descripcion }}</td>
                <td>
                  @if($promo->p_imagen)
                    <img src="{{ $promo->p_imagen }}" class="img-responsive" width="100" height="100">
                  @endif
                </td>
                
                <td>
                  <a href="{{ route('promos.show', $promo->id) }}" class="btn btn-link" >Ver</a>
                </td>
                <td>
                  <a href="{{ route('promos.edit', $promo->id) }}" class="btn btn-link" >Editar</a>
                </td>
                <td>
                  <form action="{{ route('promos.destroy', $promo->id) }}" method="POST">
             	      {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-link">Borrar</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {!! $promos->render() !!}
      </div>
    </div>
  </div>
@endsection
