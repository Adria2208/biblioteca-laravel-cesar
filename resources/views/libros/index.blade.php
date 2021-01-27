@extends('plantilla')

@section('titulo', 'Listado de libros')

@section('contenido')
    <h1>Listado de libros</h1>
    <ul>
    @forelse ($libros as $libro)
        <li><a href="{{ route('libros.show', $libro) }}">{{ $libro->titulo }}</a></li>
    @empty
        <li>No se encontraron libros</li>
    @endforelse
    </ul>
@endsection
