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

        @foreach ($collaborators as $collaborator)
        {{-- creo una fila --}}
        <tr>
            <td>{{$collaborator->id}}</td>
            <td>{{$collaborator->name}}</td>
            <td><a href="{{route('collaborator.show',$collaborator->id)}}">Mostrar</a></td>
            <td><a href="{{route('collaborator.edit',$collaborator->id)}}">Editar</a></td>
            <td>
                <form action="{{route('collaborator.destroy',$collaborator->id)}}" method="POST">
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