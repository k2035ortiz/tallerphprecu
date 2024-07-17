<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Trabajos Publicados</title>
</head>
<body>
 
    <h1>Listado de goles echos</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>minuto</th>
            <th>desc</th>
           
           
        </tr>

        @foreach ($goles as $goles)
       
        <tr>
            <td>{{$goles->id}}</td>
            <td>{{$goles->minuto}}</td>
            <td>{{$goles->desc}}</td>
            
           
            <td>
                <a href="{{ route('goles.show', $goles->id) }}">Mostrar</a>
                <td><a href="{{route('goles.edit',$goles->id)}}">Editar</a></td>
                <form action="{{ route('goles.destroy', $goles->id) }}" method="POST">
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