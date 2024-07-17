<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
</head>
<body>

    <form action="{{route('origen.update', $origen)}}"  method="POST">

        @csrf
        @method('put')
        <label>
            origen de viaje:
        <br>
        <input name="nombre" type="string" value="{{old('Nombre',$origen->nombre) }}">
        <br>
        </label>
        <br>
        <label>
            numero de paginas:
        <br>
        <input name="otros_datos" type="string" value="{{old('Otros_Datos',$origen->otros_datos)}}">
        <br>
        
        
       
        <button  type="submit">origen</button>
       
    </form>
   
</body>
</html>