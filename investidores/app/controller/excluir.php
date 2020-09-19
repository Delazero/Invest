<?php
require_once '../model/Investidor.php';
session_destroy();
session_start();
try {
    $id = $_GET['id'];
    $investidor = new Investidor();
    $investidor->delete($id) ? $msg = 'Sucesso ao deletar' : $msg = 'OPPSS! tivemos alguns problemas';
    $_SESSION['msg'] = $msg;
    header("Location:listar.php");
} catch (\Exception $ex) {
    echo $ex->getMessage();
    $_SESSION['msg'] = 'Eitaaa! tivemos alguns problemas';
    header("Location:listar.php");
}