@extends('layouts.app')

@section('content')	

 <div class="container">
    <div class="row">
      <div class="col-lg-4">
      </div>
      <div class="col-lg-4">
      </div>
      <div class="col-lg-4">
        @include('carousels.fragment.aside')
      </div>
    </div>
   
    <div class=col-lg-12>
      <h2>
        Imagen del CARRUSEL
        <a href="{{ route('carousels.index') }}" class="btn btn-primary float-right">Listado</a>
      </h2>
      <br>
        {!! Form::model($carousel, ['route' => ['carousels.update', $carousel->id, 'method' => 'GET' ]]) !!}
               @include('carousels.fragment.formshow')
        {!! Form::close() !!}
    </div>

 </div>
@endsection
