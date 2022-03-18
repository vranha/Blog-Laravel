@extends('layout')
@extends('layouts.app')

@section('contenido')


    <h1>Saludos para {{ $nombre }}</h1>
    {!! $html !!}  <!-- las exclamaciones dicen a laravel que es codigo seguro y lo ejecuta -->
    <ul>
        @forelse ($consolas as $consola)
        <li>{{ $consola }}</li> <!-- Foreach especial -->
        @empty
        <p>No hay consolas</p>  <!-- Si esta vacio ejecuta esto -->
        @endforelse
    </ul>
    @if(count($consolas) === 1)
        <p>Solo tienes una consola</p>
        @elseif(count($consolas) > 1)
        <p>Tienes varias consolas</p>
        @endif

@endsection
