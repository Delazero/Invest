<?php
require_once '../model/Investidor.php';
session_start();
try {
    $investidores = new Investidor();
    $_SESSION['investidores'] = $investidores->findAll();
    header("Location:../view/listar.php");
} catch (\Exception $ex) {
    echo $ex->getMessage();
    $_SESSION['msg'] = 'Eitaaa! tivemos alguns problemas';
    header("Location:../../index.php");
}