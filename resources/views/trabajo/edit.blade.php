<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
</head>
<body>

    <form action="{{route('trabajo.update', $trabajo)}}"  method="POST">

        @csrf
        @method('put')
        <label>
            destino de viaje:
        <br>
        <input name="nombre" type="string" value="{{old('Nombre',$trabajo->nombre) }}">
        <br>
        </label>
        <br>
        <label>
            numero de paginas:
        <br>
        <input name="otros_datos" type="string" value="{{old('Otros_Datos',$trabajo->otros_datos)}}">
        <br>
        
        
       
        <button  type="submit">viajar</button>
       
    </form>
   
</body>
</html>