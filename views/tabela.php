<?php

require(__DIR__ . "/../config/conexao.php");
$tabela = $pdo->prepare("SELECT * FROM receber_titulos ORDER BY id  ASC");
$tabela ->execute();
$numLinhas = $tabela->rowCount();
$rowTablea = $tabela->fetchAll(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="pt-br" data-bs-theme="light">
    <head>
        <title>Contas a Receber</title>
        <meta charset="utf-8" />
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"
      rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous" />
    

    </head>
    <body>  

    <div class="container">
        <h1 style="text-align: center;"> Contas a Receber </h1>
    </div>
    <?php if($numLinhas > 0) { ?>
        <div class='container'>
                <table class='table table-striped'>
                    <thead>
                        <tr>
                        <th scope='col'>Codigo</th>
                        <th scope='col'>Valor</th>
                        <th scope='col'>Descrição</th>
                        <th scope='col'>Categoria</th>
                        <th scope='col'>Data</th>
                        <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $num = 0;
                            foreach($rowTablea as $row) {   
                        
                        ?>
                        <tr>
                        <th scope="row"> <?= $row['id'] ?> </th>
                        <td><?= $row['valor'] ?></td>
                        <td><?= $row['descricao'] ?></td>
                        <td><?= $row['categoria'] ?></td>
                        <td><?= $row['data_lancamento'] ?></td>
                        <td>
                            <a href="editar_view.php?lancamento=<?= $row['id'] ?>" class="material-symbols-outlined" style="color:black">edit</a>
                            <a href="excluir_view.php?lancamento=<?= $row['id'] ?>" class="material-symbols-outlined" style="color: black;">delete</a>
                        </td>
                        <?php 
                            $num ++ ;
                        }
                        ?>


                        </tr>
                    </tbody>
                </table>
        </div>
    <?php } else { ?>
        <div class='container'>
            <div class='alert alert-danger mt-4' role='alert'>Nada foi Cadastrado!</div>      
            <a href='../index.php' class='btn btn-success mt-4'> Voltar para o Inicio</a>
        </div>
    <?php } ?>

    <div class="container">
        <a href="../index.php" class="btn btn-primary">Voltar para cadsatros</a>
    </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
