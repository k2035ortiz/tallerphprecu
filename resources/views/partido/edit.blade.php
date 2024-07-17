<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
</head>
<body>

    <form action="{{route('partido.update', $partido)}}"  method="POST">

        @csrf
        @method('put')
        <label>
            fecha:
        <br>
        <input name="fecha" type="date" value="{{old('Fecha',$partido->fecha) }}">
        <br>
        </label>
        <br>
        <label>
            numero de goles en casa:
        <br>
        <input name="goles_casa" type="integer" value="{{old('Goles_Casa',$partido->goles_casa)}}">
        <br>
        </label>
        numero de goles fuera:
        <br>
        <input name="goles_fuera" type="integer" value="{{old('Goles_Fuera',$partido->goles_fuera)}}">
        <br>
        </label>
        
        <br>
       
        <button  type="submit">enviar</button>
       
    </form>
   
</body>
</html>