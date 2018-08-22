@extends('layouts.app')

@section('content')	

 <div class="container">
    @include('users.fragment.error')
    @include('users.fragment.info')
    <div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4"></div>
      <div class="col-lg-4">
       
        @include('users.fragment.aside')
      </div>
    </div>
   
    <div class=col-lg-12>
      <h2>
        Editar USUARIO
        <a href="{{ route('users.index') }}" class="btn btn-primary float-right">Listado</a>
      </h2>
      <br>
        {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT', 'files' => true]) !!}
               @include('users.fragment.formedit')
        {!! Form::close() !!}
    </div>

 </div>
@endsection
