@extends('layouts.app')

@section('content')	

 <div class="container">
    @include('carousels.fragment.error')
    @include('carousels.fragment.info')
    <div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4"></div>
      <div class="col-lg-4">
       
        @include('carousels.fragment.aside')
      </div>
    </div>
   
    <div class=col-lg-12>
      <h2>
        Editar imagen del CARRUSEL
        <a href="{{ route('carousels.index') }}" class="btn btn-primary float-right">Listado</a>
      </h2>
      <br>
        {!! Form::model($carousel, ['route' => ['carousels.update', $carousel->id], 'method' => 'PUT', 'files' => true]) !!}
               @include('carousels.fragment.formedit')
        {!! Form::close() !!}
    </div>

 </div>
@endsection
