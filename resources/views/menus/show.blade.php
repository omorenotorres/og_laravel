@extends('layouts.app')

@section('content')	

 <div class="container">
    <div class="row">
      <div class="col-lg-4">
      </div>
      <div class="col-lg-4">
      </div>
      <div class="col-lg-4">
        @include('menus.fragment.aside')
      </div>
    </div>
   
    <div class=col-lg-12>
      <h2>
        PLATO
        <a href="{{ route('menus.index') }}" class="btn btn-primary float-right">Listado</a>
      </h2>
      <br>
        {!! Form::model($menu, ['route' => ['menus.update', $menu->id, 'method' => 'GET' ]]) !!}
               @include('menus.fragment.formshow')
        {!! Form::close() !!}
    </div>

 </div>
@endsection
