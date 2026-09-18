<?php

require(__DIR__ . "/../config/conexao.php");

$valorEntrada = $_POST["valorEntrada"];
$descEntrada = $_POST["descEntrada"];
$categEntrada = $_POST["categEntrada"];
$dataEntrada = $_POST["dataEntrada"];
$id = $_POST["id"];

if (empty($valorEntrada)){
    echo"O campo valor é um campo obrigatorio para preencher";
}else{

    $sql = "UPDATE receber_titulos SET valor = :valorEntrada, descricao = :descEntrada, 
            categoria = :categEntrada, data_lancamento = :dataEntrada WHERE id = :id";
    
    $stmt = $pdo -> prepare($sql);

    $stmt -> execute(array(
        ':valorEntrada' => $valorEntrada,
        ':descEntrada'=> $descEntrada,
        ':categEntrada'=> $categEntrada,
        ':dataEntrada'=> $dataEntrada,
        ':id' =>$id
    ));
}   
?>


<!doctype html>
<html lang="pt-br" data-bs-theme="light">
    <head>
        <title>Contas a Receber</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous" />
    </head>
    <body>  

    <div class="container">
        <h1 style="text-align: center;"> Lancamento Editado com Sucesso</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Data</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo"
                    <tr>
                    <th scope='row'>1</th>
                    <td>$valorEntrada</td>
                    <td>$descEntrada</td>
                    <td>$categEntrada</td>
                    <td>$dataEntrada</td>
                    </tr>"
                    ?>
                </tbody>
            </table>
    </div>

        <div class="container">
            <a href="../index.php" class="btn btn-success mt-4"> Cadastrar Novo Financeiro</a>
        </div>


        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

