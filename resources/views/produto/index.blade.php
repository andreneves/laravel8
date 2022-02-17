<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>
</head>
<body>
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
        <p>O produto se chama {{ $value->nome }}</p>
    @endforeach


</body>
</html>