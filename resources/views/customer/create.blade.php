<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Crear curso</h1>

<form action="{{route('customers.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Nombre:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
  Domicilio:
    <br>
    <input type="text" name="adress">
</label>
<br>
<label>
  Telefono:
    <br>
    <input type="text" name="telephone">
</label>
<br>
<label>
  Num social:
    <br>
    <input type="text" name="num_social">
</label>
<br>
<br>
<button type="submit">Enviar Formulario:</button>
</form>
</body>
</html>