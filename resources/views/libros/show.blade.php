@extends('plantilla')
@section('titulo', 'Listado de libros')
@section('contenido')
    <h1>Mostrando el libro: {{ $libro["titulo"] }}</h1>
@endsection
