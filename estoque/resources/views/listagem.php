<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
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
    </tr>

    <?php endforeach ?>

</table>

</div>
    
</body>
</html>