@extends('layouts.app')

@section('content')	

 <div class="container">
    @include('menus.fragment.error')
    @include('menus.fragment.info')
    <div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4"></div>
      <div class="col-lg-4">
       
        @include('menus.fragment.aside')
      </div>
    </div>
   
    <div class=col-lg-12>
      <h2>
        Editar PLATO
        <a href="{{ route('menus.index') }}" class="btn btn-primary float-right">Listado</a>
      </h2>
      <br>
        {!! Form::model($menu, ['route' => ['menus.update', $menu->id], 'method' => 'PUT' ]) !!}
               @include('menus.fragment.form')
        {!! Form::close() !!}
    </div>

 </div>
@endsection
