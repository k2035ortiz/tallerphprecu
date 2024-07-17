<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
</head>
<body>

    <form action="{{route('pago.update', $pago)}}"  method="POST">

        @csrf
        @method('put')
        <label>
            numero:
        <br>
        <input name="numero" type="integer" value="{{old('Numero',$pago->numero) }}">
        <br>
        </label>
        <br>
        <label>
            concepto:
        <br>
        <input name="concepto" type="string" value="{{old('Concepto',$pago->concepto)}}">
        <br>
        </label>
        fecha pago:
        <br>
        <input name="fecha_pago" type="date" value="{{old('Fecha_Pago',$pago->fecha_pago)}}">
        <br>
        </label>
        cantidad:
        <br>
        <input name="cantidad" type="integer" value="{{old('Cantidad',$pago->cantidad)}}">
        <br>
       
        </label>
        <br>
       
        <button  type="submit">pago</button>
       
    </form>
   
</body>
</html>