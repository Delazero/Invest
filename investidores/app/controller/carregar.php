<?php
require_once '../model/Investidor.php';
session_destroy();
session_start();
try {
    $id = $_GET['id'];
    $investidor = new Investidor();
    $_SESSION['investidor'] = $investidor->find($id);
    header("Location:../view/alterar.php");
} catch (\Exception $ex) {
    echo $ex->getMessage();
    $_SESSION['msg'] = 'Eitaaa! tivemos alguns problemas';
    header("Location:../view/listar.php");
}