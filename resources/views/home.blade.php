@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">OG ADMINISTRACION</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>BIENVENIDO!!!! {{Auth::user()->name }}, A LA ADMINISTRACION DE TU PAGINA</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
