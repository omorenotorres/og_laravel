@extends('layouts.app')

@section('content') 
  <div class="container">
    @include('users.fragment.info')
    <div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4"></div>
      <div class="col-lg-4">@include('users.fragment.aside')</div>
    </div>
    <div class="row">
      <div class=col-lg-12>
        <br>
        <br>
        <h2>
          USUARIOS
          <a href="{{ route('users.create') }}" class="btn btn-primary float-right">Nuevo</a>
        </h2>
        <br>
        <br>
        <table class="table table-hover table-striped">
          <thead>
            <th>Nombre</th>
            <th>Email</th>

            <th colspan="3">Acciones</th>
          </thead>
          <tbody>
            @foreach($users as $user)
              <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
               
                
                <td>
                  <a href="{{ route('users.show', $user->id) }}" class="btn btn-link" >Ver</a>
                </td>
                <td>
                  <a href="{{ route('users.edit', $user->id) }}" class="btn btn-link" >Editar</a>
                </td>
                <td>
                  <form action="{{ route('users.destroy', $user->id) }}" method="POST">
             	      {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-link">Borrar</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {!! $users->render() !!}
      </div>
    </div>
  </div>
@endsection
