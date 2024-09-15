<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevos Productos</title>
    @vite("resources/css/app.css")
</head>
<body>
    @extends('layouts.app')
    @include('layouts.navbar')
    <h1 class = "text-red-800" > CREACION DE NUEVOS PRODUCTOS </h1>
    <button>ingresar nuevo producto</button>
    <ul>
        <button class="fond bg-red-200">Aceptar</button>
         <Button class="fond bg-green-200">Cancelar</Button>
    </ul>
</body>
</html>
