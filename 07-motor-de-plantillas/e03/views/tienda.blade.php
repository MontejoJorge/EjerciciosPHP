<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (!empty($zapas))
    <table border="1px">
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Tipo</th>
            <th>Precio</th>
        </tr>
        @foreach ($zapas as $zapa)
                <tr>
                    <td>{{$zapa->getMarca()}} </td>
                    <td>{{$zapa->getModelo()}} </td>
                    <td>{{$zapa->getTipo()}} </td>
                    <td>{{$zapa->getPrecio()}} </td>
                </tr>
        @endforeach
    </table>
    @else
        <p>No hay zapatillas</p>
    @endif


</body>
</html>