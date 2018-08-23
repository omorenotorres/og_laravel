@extends('layouts.app')

@section('content') 
  <div class="container">
    @include('menus.fragment.info')
    <div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4"></div>
      <div class="col-lg-4">@include('menus.fragment.aside')</div>
    </div>
    <div class="row">
      <div class=col-lg-12>
        <br>
        <br>
        <h2>
          Menu
          <a href="{{ route('menus.create') }}" class="btn btn-primary float-right">Nuevo</a>
        </h2>
        <br>
        <br>
        <table class="table table-hover table-striped">
          <thead>
            <th>Tipo de Plato</th>
            <th>Plato</th>
            <th>Descripcion</th>
            <th>Precio</th>

            <th colspan="3">Acciones</th>
          </thead>
          <tbody>
            @foreach($menus as $menu)
              <tr>
                <td>{{ $menu->tipo_plato }}</td>
                <td>{{ $menu->item }}</td>
                <td>{{ $menu->descripcion_item }}</td>
                <td>{{ $menu->precio_item }}</td>
                
                <td>
                  <a href="{{ route('menus.show', $menu->id) }}" class="btn btn-link" >Ver</a>
                </td>
                <td>
                  <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-link" >Editar</a>
                </td>
                <td>
                  <form action="{{ route('menus.destroy', $menu->id) }}" method="POST">
             	      {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-link">Borrar</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {!! $menus->render() !!}
      </div>
    </div>
  </div>
@endsection
