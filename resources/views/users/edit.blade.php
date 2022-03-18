@extends('layout')
@extends('layouts.app')


@section('contenido')

    <h1>Editar Usuario</h1>
    @if (session()->has('info'))
    <div class="alert alert-success">{{ session('info') }}</div>
    @endif
    <form class="row justify-content-center" method="post" action="{{ route('usuarios.update', $user->id) }}">
        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
        {!! csrf_field() !!}
        {!! method_field('put') !!}
        <label class="col-md-8" for="nombre">
            Nombre
            <input class="row mb-3 form-control" type="text" name="nombre" value="{{$user->nombre}}">
            {!! $errors->first('nombre', '<span class="error">:message</span>') !!}
        </label>
        <label class="col-md-8" for="email">
            Email
            <input class="row mb-3 form-control" type="text" name="email" value="{{$user->email}}">
            {!! $errors->first('email', '<span class="error">:message</span>') !!}

        </label>
        <input class="btn btn-primary col-md-5 " type="submit" value="Enviar">
    </form>
@stop
