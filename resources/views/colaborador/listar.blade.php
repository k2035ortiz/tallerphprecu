<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Trabajos Publicados</title>
</head>
<body>
 
    <h1>Listado de nombres</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>nombre</th>
           
           
           
        </tr>

        @foreach ($colaborador as $colaborador)
       
        <tr>
            <td>{{$colaborador->id}}</td>
            <td>{{$colaborador->nombre}}</td>
           
            
           
            <td>
                <a href="{{ route('colaborador.show', $colaborador->id) }}">Mostrar</a>
                <td><a href="{{route('colaborador.edit',$colaborador->id)}}">Editar</a></td>
                <form action="{{ route('colaborador.destroy', $colaborador->id) }}" method="POST">
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