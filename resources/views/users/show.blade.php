@extends('layout')
@extends('layouts.app')


@section('contenido')

    <h1>{{ $user->name }}</h1>
    <table class="table">
        <tr>
            <th>Nombre:</th>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <th>Email:</th>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <th>Rol:</th>
            <td>{{ $user->role }}</td>
        </tr>
    </table>
<div class="d-inline-flex p-2">
    @can('edit', $user)
        <a href="{{ route('usuarios.edit', $user->id)}}"class="btn btn-info">Editar</a>
    @endcan
    @can('destroy', $user)
    <form method="POST" action="{{ route('usuarios.destroy', $user->id) }}">
        {!! csrf_field() !!}
        {!! method_field('delete') !!}
        <button class="btn btn-danger btn-xs" type="submit">Eliminar</button>
    </form>
    @endcan
</div>
@stop
