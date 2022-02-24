<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>
</head>
<body>

<h2>Produto</h2>
<p><b>Nome:</b>    {{ $produto->nome       }} </p>
<p><b>Valor:</b>   {{ $produto->valor      }} </p>
<p><b>Criação:</b> {{ $produto->created_at }} </p>
</body>
</html>