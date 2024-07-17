<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1> escriva el destino del viaje</h1> 
   
   <form action="{{route('Destino.store')}}"  method="POST" enctype="multipart/form-data" >
           
    @csrf
    <label>
        nombre:
        <br>
        <input type="string" name="nombre">
    </label>
    <br><br>
    <label>
        otros datos:
        <br>
        <input type="string" name="otros_datos">
    </label>
    <br><br>
    

    <button type="submit">viajar:</button>
   

</form>

</body>
</html>