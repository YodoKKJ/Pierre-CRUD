<?php

require(__DIR__ . "/../config/conexao.php");

if (isset($_POST['id'])){
    $id = $_POST['id'];
}else{
    header("Location: ../views/tabela.php");
    exit;
}

$sql = "DELETE FROM receber_titulos WHERE id = :id";

$info = $pdo->prepare($sql);
$info -> bindParam(':id', $id);
$info -> execute();

header("Location: ../views/tabela.php");
exit;
