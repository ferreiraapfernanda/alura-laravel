<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Controle de Estoque</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">

<h1>Detalhes do produto <?= $p->nome ?></h1>

<ul>
    <li>Valor: <?= $p->valor ?></li>
    <li>Descrição: <?= $p->descricao ?></li>
    <li>Quantidade em estoque: <?= $p->quantidade ?></li>
</ul>

</div>
    
</body>
</html>