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

<h1>Listagem de produtos com Laravel</h1>

<table class="table table-striped table-bordered table-hover">

    <?php foreach ($produtos as $p) : ?>

    <tr> 
        <td><?= $p->nome ?></td>
        <td><?= $p->valor ?></td>
        <td><?= $p->descricao ?></td>
        <td><?= $p->quantidade ?></td>
        <td><a href="/produtos/mostra/<?=$p->id?>"><i class="material-icons">search</i></a></td>
    </tr>
    <?php endforeach ?>

</table>

</div>
    
</body>
</html>