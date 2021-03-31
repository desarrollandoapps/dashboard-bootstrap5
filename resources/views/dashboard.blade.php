@extends('layouts.app')
@section('titulo', 'Dasboard')
@section('content')
<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    Ha iniciado sesión
</div>
@endsection
