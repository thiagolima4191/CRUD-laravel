<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
</head>

<body>

    <form action="{{route("cadastrar")}}" method="POST">
        @csrf
        <label for="">Nome</label>
        <input type="text" placeholder="Digite seu nome:" name="name">
        <br><br>
        <label for="">telefone</label>
        <input type="text" placeholder="Digite seu telefone:" name="telefone">
        <br><br>
        <button>Enviar Cadastro</button>
    </form>

    <table>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
        </tr>
        @foreach($candidatos as $candidato)
        <tr>
            <td>{{ $candidato->name }}</td>
            <td>{{ $candidato->telefone }}</td>
            <td>
                <form action="{{ route('delete') }}" method="post">
                    @csrf
                    @method("delete")
                    <input type="hidden" value="{{ $candidato->id }}">
                    <button type="submit" class="btn_delete">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
       
    </table>
</body>

</html>