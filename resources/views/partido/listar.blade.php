<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Trabajos Publicados</title>
</head>
<body>
 
    <h1>Listado de partidos</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>fecha</th>
            <th>goles_casa</th>
            <th>goles_fuera</th>
            
           
        </tr>

        @foreach ($partido as $partido)
       
        <tr>
            <td>{{$partido->id}}</td>
            <td>{{$partido->fecha}}</td>
            <td>{{$partido->goles_casa}}</td>
            <td>{{$partido->goles_fuera}}</td>
            
           
            <td>
                <a href="{{ route('partido.show', $partido->id) }}">Mostrar</a>
                <td><a href="{{route('partido.edit',$partido->id)}}">Editar</a></td>
                <form action="{{ route('partido.destroy', $partido->id) }}" method="POST">
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