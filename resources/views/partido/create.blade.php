<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1> partidos </h1> 
   
   <form action="{{route('partido.store')}}"  method="POST" enctype="multipart/form-data" >
           
    @csrf
    <label>
        fecha:
        <br>
        <input type="date" name="fecha">
    </label>
    <br><br>
    <label>
        goles casa:
        <br>
        <input type="integer" name="goles_casa">
    </label>
    <br><br>
    <label>
        goles fuera: 
        <br>
        <input type="integer" name="goles_fuera">
    </label>
    
    <br><br>

    <button type="submit">enviar:</button>
   

</form>

</body>
</html>