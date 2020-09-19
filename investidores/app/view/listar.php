<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Invest - Investidores</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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
    unset($_SESSION['msg']);
    ?>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w80">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Investidores Cadastrados</h2>
                    <?= "<p class='mb-0'>$msg</p>"; ?>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Prazo</th>
                                <th scope="col">Capital</th>
                                <th scope="col">Tolerancia</th>
                                <th scope="col" colspan="1">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $investidores = isset($_SESSION['investidores']) ? $_SESSION['investidores'] : '';

                            foreach ($investidores as $key => $value) :
                            ?>
                                <tr>
                                    <th scope="row"><?= $value->nome_investidor ?></th>
                                    <td><?=date('d/m/Y', strtotime($value->prazo));?></td>
                                    <td><?= $value->capital ?></td>
                                    <td><?= $value->tolerancia ?></td>
                                    <td><a href="../controller/carregar.php?id=<?=$value->id_investidor?>"><button class="btn btn-primary" type="button">Editar</button></a>
                                <a href="../controller/excluir.php?id=<?=$value->id_investidor?>"><button class="btn btn-danger" onclick="return confirm('Deseja realmente excluir <?=$value->nome_investidor?>?');" type="button">Excluir</button></a></td>
                                </tr>
                            <?php endforeach; 
                            ?>
                        </tbody>
                    </table>
                    <div class="p-t-20">
                        <a href="../../index.php"><button class="btn btn--radius btn--green" type="button">Cadastrar</button></a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/vendor/jquery/jquery.min.js"></script>

    <script src="../assets/vendor/select2/select2.min.js"></script>
    <script src="../assets/vendor/datepicker/moment.min.js"></script>
    <script src="../assets/vendor/datepicker/daterangepicker.js"></script>


    <script src="../assets/js/global.js"></script>

</body>

</html>