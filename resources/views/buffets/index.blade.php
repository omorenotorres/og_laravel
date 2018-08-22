@extends('layouts.app')

@section('content') 
  <div class="container">
    @include('buffets.fragment.info')
    <div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4"></div>
      <div class="col-lg-4">@include('buffets.fragment.aside')</div>
    </div>
    <div class="row">
      <div class=col-lg-12>
        <br>
        <br>
        <h2>
          BUFFET
          <a href="{{ route('buffets.create') }}" class="btn btn-primary float-right">Nuevo</a>
        </h2>
        <br>
        <br>
        <table class="table table-hover table-striped">
          <thead>
            <th>DIA</th>
            <th>PRECIO</th>
            <th colspan="3">Acciones</th>
          </thead>
          <tbody>
            @foreach($buffets as $buffet)
              <tr>
                <td>{{ $buffet->b_dia }}</td>
                <td>{{ $buffet->b_precio }}</td>
                                
                <td>
                  <a href="{{ route('buffets.show', $buffet->id) }}" class="btn btn-link" >Ver</a>
                </td>
                <td>
                  <a href="{{ route('buffets.edit', $buffet->id) }}" class="btn btn-link" >Editar</a>
                </td>
                <td>
                  <form action="{{ route('buffets.destroy', $buffet->id) }}" method="POST">
             	      {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-link">Borrar</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {!! $buffets->render() !!}
      </div>
    </div>
  </div>
@endsection
