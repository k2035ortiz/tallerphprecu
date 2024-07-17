<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
</head>
<body>

    <form action="{{route('goles.update', $goles)}}"  method="POST">

        @csrf
        @method('put')
        <label>
            minuto:
        <br>
        <input name="minuto" type="integer" value="{{old('Minuto',$goles->minuto) }}">
        <br>
        </label>
        <br>
        <label>
            descanso:
        <br>
        <input name="desc" type="text" value="{{old('Desc',$goles->desc)}}">
        <br>
        </label>
       
        <br>
       
        <button  type="submit">guardar goles</button>
       
    </form>
   
</body>
</html>