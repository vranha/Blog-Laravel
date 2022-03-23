@extends('layout')
@extends('layouts.app')


@section('contenido')

    <h1>Usuarios</h1>
    <table class="table ">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Role</th>
                <th>Notas</th>
                <th>Etiquetas</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>{{$user->note ? $user->note->body : ''  }}</td>
                <td>{{$user->tags ?  $user->tags->pluck('name')->implode(', ') : ''  }}</td>
                


            <td class="d-inline-flex p-2">
                <a class="btn btn-info btn-xs" href="{{ route('usuarios.edit', $user->id) }}"> Editar</a>
                <form method="POST" action="{{ route('usuarios.destroy', $user->id) }}">
                    {!! csrf_field() !!}
                    {!! method_field('delete') !!}
                    <button class="btn btn-danger btn-xs" type="submit">Eliminar</button>
                </form>
            </td>
</tr>
 @endforeach
        </tbody>
    </table>
@stop
