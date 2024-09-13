@extends('layouts.app')

@section('titulo','Mis productos')

@section('contenido')
    <h1 class = "text-green-700" > LISTA DE PRODUCTOS </h1>
    <ul>
        @foreach  ($productos as $producto)

        <li> {{$producto->nombre}} - precio: {{$producto->precio}} - stock: {{$producto->stock}} </li>

        @endforeach

    </ul>

@endsection
