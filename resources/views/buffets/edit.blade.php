@extends('layouts.app')

@section('content')	

 <div class="container">
    @include('buffets.fragment.error')
    @include('buffets.fragment.info')
    <div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4"></div>
      <div class="col-lg-4">
       
        @include('buffets.fragment.aside')
      </div>
    </div>
   
    <div class=col-lg-12>
      <h2>
        Editar BUFFET
        <a href="{{ route('buffets.index') }}" class="btn btn-primary float-right">Listado</a>
      </h2>
      <br>
        {!! Form::model($buffet, ['route' => ['buffets.update', $buffet->id], 'method' => 'PUT', 'files' => true]) !!}
               @include('buffets.fragment.formedit')
        {!! Form::close() !!}
    </div>

 </div>
@endsection
