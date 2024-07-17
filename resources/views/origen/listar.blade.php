<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de origenes Publicados</title>
</head>
<body>
 
    <h1>Listado de origenes</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>nombre</th>
            <th>otros_datos</th>
           
           
        </tr>

        @foreach ($origen as $origen)
       
        <tr>
            <td>{{$origen->id}}</td>
            <td>{{$origen->nombre}}</td>
            <td>{{$origen->otros_datos}}</td>
           
           
            <td>
                <a href="{{ route('origen.show', $origen->id) }}">Mostrar</a>
                <td><a href="{{route('origen.edit',$origen->id)}}">Editar</a></td>
                <form action="{{ route('origen.destroy', $origen->id) }}" method="POST">
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