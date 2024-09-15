<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla de productos</title>
    @vite("resources/css/app.css")
</head>
<body>
    @extends('layouts.app')
    @include('layouts.navbar')

<h1 class="text-red-800"> Tabla de productos completa</h1>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table  class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th> No </th>
                    <th> Nombre </th>
                    <th> Descripcion </th>
                    <th> Precio </th>
                    <th> Stock </th>
                </tr>
            </thead>
            <tbody>
                <?php $contador = 0; ?>
                @foreach  ($productos as $producto)
                <tr>
                    <td><?php echo $contador = $contador + 1;?></td>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->descripcion}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->stock}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
