<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Catalogo de Productos {{ $lista->count() }}</h1>
    <style>
        table, td, th{
            border: 1px solid;
        }
        table{
            width: 90%;
        }
    </style>
    <table>
        <thead>
            <th>Id</th>
            <th>Codigo</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Categoria</th>
        </thead>
        <tbody>
            @foreach($lista AS $item)
            <tr>
                <td>{{$item->id }}</td>
                <td>{{$item->codigo }}</td>
                <td>{{$item->descripcion }}</td>
                <td>{{$item->precio }}</td>
                <td>{{$item->existencia }}</td>
                <td>{{$item->categoria->nombre }}</td>
                <td></td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>





   <!-- <form action="" method="post"></form>
    @method("DELETE")
    @csrf
   <button type="submit" class="btn btn-primary">Eliminar</button>-->
</body>
</html>