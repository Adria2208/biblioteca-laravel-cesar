@extends('plantilla')
@section('titulo', 'Listado de libros')
@section('contenido')
    <h1>Formulario de insercion de libros</h1>
    <form action="submit" method="POST">
        @csrf
        <input type="text" name="titulo" placeholder="Titulo">
        <br><br>
        <input type="text" name="editorial" placeholder="Editorial">
        <br><br>
        <input type="number" name="precio" placeholder="0">
        <br><br>
        <button type="submit">Insertar Libro</button>
    </form>
@endsection
