<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>hola desde listar</h1>

    <table>

        @foreach ($customers as $customer)
        {{-- creo una fila --}}
        <tr>
            <td>{{$customer->id}}</td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->adress}}</td>
            <td>{{$customer->telephone}}</td>
            <td>{{$customer->num_social}}</td>
            <td><a href="{{route('customer.show',$customer->id)}}">Mostrar</a></td>
            <td><a href="{{route('customer.edit',$customer->id)}}">Editar</a></td>
            <td>
                <form action="{{route('customer.destroy',$customer->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">Eliminar</button>
                </form>  


            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>