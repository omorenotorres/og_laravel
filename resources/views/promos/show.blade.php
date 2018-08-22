@extends('layouts.app')

@section('content')	

 <div class="container">
    <div class="row">
      <div class="col-lg-4">
      </div>
      <div class="col-lg-4">
      </div>
      <div class="col-lg-4">
        @include('promos.fragment.aside')
      </div>
    </div>
   
    <div class=col-lg-12>
      <h2>
        PROMOCION
        <a href="{{ route('promos.index') }}" class="btn btn-primary float-right">Listado</a>
      </h2>
      <br>
        {!! Form::model($promo, ['route' => ['promos.update', $promo->id, 'method' => 'GET' ]]) !!}
               @include('promos.fragment.formshow')
        {!! Form::close() !!}
    </div>

 </div>
@endsection
