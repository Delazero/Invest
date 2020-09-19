<?php
require_once '../model/Investidor.php';

$id = (isset($_POST['id']) ? $_POST['id'] : '');
$nomeInvestidor = $_POST['name'];
$prazoInvestidor = $_POST['prazo'];
$capitalInvestidor = $_POST['capital'];
$toleranciaInvestidor = $_POST['tolerancia'];

$investidor = new Investidor();

$investidor->setNomeInvestidor($nomeInvestidor);
$investidor->setPrazoInvestidor($prazoInvestidor);
$investidor->setCapitalInvestidor($capitalInvestidor);
$investidor->setToleranciaInvestidor($toleranciaInvestidor);
$msg = '';

try {
    if ($id == '') {
        $investidor->insert();
        $msg = 'Investidor cadastrado com sucesso!';
    } else {
        $investidor->update($id);
        $msg = 'Investidor atualizado com sucesso!';
    }
    session_start();
    $_SESSION['msg'] = $msg;
    //echo $_SESSION['msg'];
    header("Location:../../index.php");
} catch (Exception $ex) {
    $ex->getMessage();
    session_start();
    $msg = "Eitaaa! tivemos alguns problemas";
    $_SESSION['msg'] = $msg;
    header("Location:../../index.php");
}
