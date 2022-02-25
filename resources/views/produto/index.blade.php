<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>
</head>
<body>

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<a href="{{ URL::to('produto/create') }}">CRIAR</a>

    <table class="table no-margin">
        <thead>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>valor</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>

    @foreach ($produtos as $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->nome }}</td>
            <td>{{ $value->valor }}</td>
            <td><a href="{{ url('produto/' . $value->id) }}">Visualizar</a></td>
            <td><a href="{{ url('produto/' . $value->id . '/edit') }}">Editar</a></td>
            <td></td>
        </tr>
    @endforeach

        </tbody>
    </table>

</body>
</html>