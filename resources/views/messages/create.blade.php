@extends('layout')
@extends('layouts.app')


@section('contenido')

<h1 class="text-center">Contactos</h1>
<h2 class="text-center">Escríbeme</h2>
@if (session()->has('info'))
    <h3>{{ session('info') }}</h3>
@else
<form class="row justify-content-center" method="post" action="{{ route('mensajes.store') }}">
   @include('messages.form', ['message'])
</form>
@endif
@stop
