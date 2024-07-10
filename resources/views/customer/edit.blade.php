<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
    <form action="{{route('customer.update', $customer)}}"  method="POST">

        @csrf
        @method('put')
        <label>
        Name:
        <br>
        <input name="name" type="text" value="{{old('Name',$customer->name) }}">
        <br>
        </label>
        <br>
        <label>
        domicilio:
        <br>
        <input name="adress" type="text" value="{{old('adress',$customer->adress)}}">
        <br>
        </label>
        <br>
        <label>
        Telefono:
        <br>
        <input name="telephone" type="text" value="{{old('telephone',$customer->telephone)}}">
        <br>
        </label>
        <br>
        <br>
        <label>
        Num_social:
        <br>
        <input name="num_social" type="text" value="{{old('num_social',$customer->num_social)}}">
        <br>
        </label>
        <br>
        <br>
        <button  type="submit">Actualizar Curso</button>
       
    </form>
</body>
</html>