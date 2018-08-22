@extends('layouts.app')

@section('content') 
  <div class="container">
    @include('tplatos.fragment.info')
    <div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4"></div>
      <div class="col-lg-4">@include('tplatos.fragment.aside')</div>
    </div>
    <div class="row">
      <div class=col-lg-12>
        <br>
        <br>
        <h2>
          Tipo de Platos
          <a href="{{ route('tplatos.create') }}" class="btn btn-primary float-right">Nuevo</a>
        </h2>
        <br>
        <br>
        <table class="table table-hover table-striped">
          <thead>
            <th>Codigo</th>
            <th>Descripcion</th>
            <th>Imagen</th>
            
            <th colspan="3">Acciones</th>
          </thead>
          <tbody>
            @foreach($tplatos as $tplato)
              <tr>
                <td>{{ $tplato->tp_codigo }}</td>
                <td>{{ $tplato->tp_descripcion }}</td>
                <td>
                  @if($tplato->tp_imagen)
                    <img src="{{ $tplato->tp_imagen }}" class="img-responsive" width="100" height="100">
                  @endif
                </td>
                
                
                <td>
                  <a href="{{ route('tplatos.show', $tplato->id) }}" class="btn btn-link" >Ver</a>
                </td>
                <td>
                  <a href="{{ route('tplatos.edit', $tplato->id) }}" class="btn btn-link" >Editar</a>
                </td>
                <td>
                  <form action="{{ route('tplatos.destroy', $tplato->id) }}" method="POST">
             	      {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-link">Borrar</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {!! $tplatos->render() !!}
      </div>
    </div>
  </div>
@endsection
