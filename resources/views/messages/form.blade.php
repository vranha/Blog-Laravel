 {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
 {!! csrf_field() !!}
 @unless (isset($message) and $message->user_id)
 <label class="col-md-8" for="nombre">
     Nombre
     <input class="row mb-3 form-control" type="text" name="nombre" value="{{$message->nombre ?? old('nombre')}}">
     {!! $errors->first('nombre', '<span class="error">:message</span>') !!}
 </label>
 <label class="col-md-8" for="email">
     Email
     <input class="row mb-3 form-control" type="text" name="email" value="{{$message->email ?? old('email')}}">
     {!! $errors->first('email', '<span class="error">:message</span>') !!}

 </label>
 @endunless

 <label class="col-md-8" for="mensaje">
     Mensaje
     <textarea class="row mb-3 form-control" name="mensaje">{{$message->mensaje ?? old('mensaje')}}</textarea>
     {!! $errors->first('mensaje', '<span class="error">:message</span>') !!}
 </label>
 <input class="btn btn-primary col-md-5 " type="submit" value="{{  $btnText ?? 'Guardar' }}">
