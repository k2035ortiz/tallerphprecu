<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1> colaborador </h1> 
   
   <form action="{{route('colaborador.store')}}"  method="POST" enctype="multipart/form-data" >
           
    @csrf
    <label>
        nombre:
        <br>
        <input type="string" name="nombre">
    </label>
    <br><br>
    

    <button type="submit">guardar nombre:</button>
   

</form>

</body>
</html>