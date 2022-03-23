@extends('layout')
@extends('layouts.app')

@section('contenido')


    <h1 class="d-flex justify-content-center mt-5 mb-5">Saludos para {{ $nombre }}</h1>
    <div class="d-flex justify-content-center align-items-center flex-column mt-5">
        {!! $html !!}  <!-- las exclamaciones dicen a laravel que es codigo seguro y lo ejecuta -->
        <h3 class="d-flex justify-content-center align-items-center flex-column mt-4" >
            @forelse ($consolas as $consola)
            <p>{{ $consola }}</p> <!-- Foreach especial -->
            @empty
            <p>No hay consolas</p>  <!-- Si esta vacio ejecuta esto -->
            @endforelse
        </h3>
        @if(count($consolas) === 1)
            <p>Solo tienes una consola</p>
            @elseif(count($consolas) > 1)
            <p>Y mas cositas</p>
            @endif
    </div>

@endsection
