<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
    <form action="{{route('collaborator.update', $collaborator)}}"  method="POST">

        @csrf
        @method('put')
        <label>
        Nombre:
        <br>
        <input name="name" type="text" value="{{old('Name',$collaborator->name) }}">
        <br>
        </label>
        <br>
        <br>
        <button  type="submit">Actualizar Colaborador</button>
       
    </form>
</body>
</html>