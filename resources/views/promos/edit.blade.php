@extends('layouts.app')

@section('content')	

 <div class="container">
    @include('promos.fragment.error')
    @include('promos.fragment.info')
    <div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4"></div>
      <div class="col-lg-4">
       
        @include('promos.fragment.aside')
      </div>
    </div>
   
    <div class=col-lg-12>
      <h2>
        Editar PROMOCION
        <a href="{{ route('promos.index') }}" class="btn btn-primary float-right">Listado</a>
      </h2>
      <br>
        {!! Form::model($promo, ['route' => ['promos.update', $promo->id], 'method' => 'PUT', 'files' => true]) !!}
               @include('promos.fragment.formedit')
        {!! Form::close() !!}
    </div>

 </div>
@endsection
