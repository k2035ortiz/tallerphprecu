<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Trabajos Publicados</title>
</head>
<body>
 
    <h1>Listado de destinos</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>nombre</th>
            <th>otros_datos</th>
           
           
        </tr>

        @foreach ($trabajos as $trabajo)
       
        <tr>
            <td>{{$trabajo->id}}</td>
            <td>{{$trabajo->nombre}}</td>
            <td>{{$trabajo->otros_datos}}</td>
           
           
            <td>
                <a href="{{ route('trabajo.show', $trabajo->id) }}">Mostrar</a>
                <td><a href="{{route('trabajo.edit',$trabajo->id)}}">Editar</a></td>
                <form action="{{ route('trabajo.destroy', $trabajo->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

</body>
</html>