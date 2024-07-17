<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
</head>
<body>

    <form action="{{route('colaborador.update', $colaborador)}}"  method="POST">

        @csrf
        @method('put')
        <label>
            nombre:
        <br>
        <input name="nombre" type="string" value="{{old('Nombre',$colaborador->nombre) }}">
        <br>
        </label>
        <br>
       
       
        <button  type="submit">guardar nombre</button>
       
    </form>
   
</body>
</html>