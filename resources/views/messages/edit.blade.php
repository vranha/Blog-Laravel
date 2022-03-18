@extends('layout')
@extends('layouts.app')

@section('contenido')

    <h1>Editar mensaje de {{ $message->nombre }} </h1>

    <form class="row justify-content-center" method="post" action="{{ route('mensajes.update', $message->id) }}">
        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
        {!! csrf_field() !!}
        {!! method_field('put') !!}
       @include('messages.form', ['btnText' => 'Actualizar'])
    </form>
@stop
