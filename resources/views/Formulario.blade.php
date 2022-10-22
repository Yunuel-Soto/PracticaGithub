@extends('plantilla')

@section('contenido')



    <form method="POST" class="formulario" action="{{route('in')}}">
        @csrf
        <picture class="contenedor-img">
            <img src="/img/usuario.png" alt="">
        </picture>
        <div class="contenedor">
            <label for="">Ingrese su correo</label>
            <div class="mb-3">
                <input name="txtemail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <p class="text-danger fst-italic">
                {{ $errors->first('txtemail') }}</p>
            </div>
            <label for="">Ingrese su contraseña</label>
            <div class="mb-3">
                <input name="txtpassword" type="password" class="form-control" id="exampleInputPassword1">
                <p class="text-danger fst-italic">
                {{ $errors->first('txtpassword') }}</p>
            </div>
            <button type="submit" class="btn btn-success btn-lg button">Ingresar</button>
        </div>
    </form>
@stop
