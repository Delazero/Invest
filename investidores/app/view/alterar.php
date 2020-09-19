<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Invest - Alterar Investidor</title>

    <!-- Icons font CSS-->
    <link rel="shortcut icon" href="../assets/images/money.ico" type="image/x-icon" />
    <link href="../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../assets/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <?php
    session_start();
    $msg = (isset($_SESSION['msg']) ? $_SESSION['msg'] : '');
    $investidor = (isset($_SESSION['investidor']) ? $_SESSION['investidor'] : '');
    ?>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Informações do Investidor</h2>
                    <?="<p class='mb-0'>$msg</p>";?>
                    <form action="../controller/InvestidorCtr.php" method="POST">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="NOME" name="name" value="<?=$investidor->nome_investidor;?>">
                            <input type="hidden" name="id" value="<?=$investidor->id_investidor;?>">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="PRAZO INVESTIMENTO" name="prazo" value="<?=date('d/m/Y', strtotime($investidor->prazo));?>">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="CAPITAL" name="capital" value="<?=$investidor->capital;?>" id="capital">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="tolerancia">
                                    <option disabled="disabled">TOLERANCIA AO RISCO</option>
                                    <option value="<?=$investidor->tolerancia;?>" selected="selected"> <?=$investidor->tolerancia;?></option>
                                    <option value="Conservador">Conservador</option>
                                    <option value="Moderado">Moderado</option>
                                    <option value="Agressivo">Agressivo</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Enviar</button>
                            <a href="../controller/listar.php"><button class="btn btn--radius btn--blue" type="button">Listar</button></a>
                            <button id='btn-check' class="btn btn--radius btn--red" type="button">Checar Capital</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/vendor/jquery/jquery.min.js"></script>

    <script src="../assets/vendor/select2/select2.min.js"></script>
    <script src="../assets/vendor/datepicker/moment.min.js"></script>
    <script src="../assets/vendor/datepicker/daterangepicker.js"></script>


    <script src="../assets/js/global.js"></script>
    <script src="../assets/js/investidor.js"></script>
    
</body>

</html>