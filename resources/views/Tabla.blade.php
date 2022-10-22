@extends('plantilla')

@section('contenido')
@if(session()->has('confirmacion'))
    {!! "<script> Swal.fire(
        'Good job!',
        'Has ingresado con exito',
        'success') </script>" !!} {{--imprime sin restricciones --}}
    @endif
@stop
