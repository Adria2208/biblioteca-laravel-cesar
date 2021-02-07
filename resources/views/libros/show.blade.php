@extends('plantilla')
@section('titulo', 'Listado de libros')
@section('contenido')
    <h1>Mostrando el libro: {{ $libro["titulo"] }}</h1>
    <form action="{{ route('libros.destroy', $libro->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-danger" value="Borrar libro" />
    </form>
@endsection
