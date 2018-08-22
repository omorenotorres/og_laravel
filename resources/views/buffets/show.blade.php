@extends('layouts.app')

@section('content')	

 <div class="container">
    <div class="row">
      <div class="col-lg-4">
      </div>
      <div class="col-lg-4">
      </div>
      <div class="col-lg-4">
        @include('buffets.fragment.aside')
      </div>
    </div>
   
    <div class=col-lg-12>
      <h2>
        BUFFET
        <a href="{{ route('buffets.index') }}" class="btn btn-primary float-right">Listado</a>
      </h2>
      <br>
        {!! Form::model($buffet, ['route' => ['buffets.update', $buffet->id, 'method' => 'GET' ]]) !!}
               @include('buffets.fragment.formshow')
        {!! Form::close() !!}
    </div>

 </div>
@endsection
