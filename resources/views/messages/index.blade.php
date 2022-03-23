@extends('layout')
@extends('layouts.app')

@section('contenido')

    <div class="">
        <h1 class="text-center">Todos los mensajes</h1>
        <table class="table container h-100 ">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Mensaje</th>
                    <th>Notas</th>
                    <th>Etiquetas</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($messages as $message)
                <tr>
                    @if ($message->user_id)
                    <td>{{ $message->user->name }}</td>
                    <td>{{ $message->user->email }}</td>
                    @else
                    <td>{{ $message->nombre }}</td>
                    <td>{{ $message->email }}</td>
                    @endif
                    <td>
                        <a href="{{ route('mensajes.show', $message->id) }}">{{ $message->mensaje }}</a>
                    </td>
                    <td>{{$message->note ? $message->note->body : ''  }}</td>
                    <td>{{$message->tags ? $message->tags->pluck('name')->implode(', ') : ''  }}</td>
                    <td class="d-inline-flex p-2">
                        <a class="btn btn-info btn-xs" href="{{ route('mensajes.edit', $message->id) }}"> Editar</a>
                        <form method="POST" action="{{ route('mensajes.destroy', $message->id) }}">
                            {!! csrf_field() !!}
                            {!! method_field('delete') !!}
                            <button class="btn btn-danger btn-xs" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            {{ $messages->fragment('hash')->appends(request()->query())->links('pagination::simple-bootstrap-5') }}
        </table>
    </div>
@stop
