<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla de productos</title>

</head>
<body>
    @extends('layouts.app')
    @include('layouts.navbar')

<h1 class="text-red-800"> Tabla de productos completa</h1>


    <table>
        <thead>
            <tr>
                <th>Nombre </th>
                <th>Descripcion </th>
                <th>Precio </th>
                <th>Stock </th>
            </tr>
        </thead>

    </table>

</body>
</html>
