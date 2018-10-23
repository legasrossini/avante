<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Avante</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <img src="assets/img/avante.png" style="margin-left:17%; width: 60%" >
            </div>

            <ul class="nav">
                <li>
                    <a href="index.html">
                        <i class="pe-7s-back-2"></i>
                        <p>Voltar</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-server"></i>
                        <p>Admin Passagens</p>
                    </a>
                </li>    
                <li  class="active">
                    <a href="adminhoteis.php">
                        <i class="pe-7s-server"></i>
                        <p>Admin Hotéis</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-server"></i>
                        <p>Admin Pontos Turísticos</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-16">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Inserir novo hotel</h4>
                            </div>
                            <div class="content">
                                <form action="crudhotel/create adminhoteis.php" methor="get">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Nome</label>
                                                <input type="text" name="nome" class="form-control" placeholder="Nome do hotel">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Endereço</label>
                                                <input type="text" name="endereco" class="form-control" placeholder="Endereço do Hotel">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Nº</label>
                                                <input type="text" name="numero" class="form-control" placeholder="Número">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>País</label>
                                                <input type="text" name="pais" class="form-control" placeholder="País">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Estado</label>
                                                <input type="text" name="estado" class="form-control" placeholder="Estado">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Cidade</label>
                                                <input type="text" name="cidade" class="form-control" placeholder="Cidade">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>CEP</label>
                                                <input type="text" name="cep" class="form-control" placeholder="CEP">
                                            </div>
                                        </div>
                                    </div>  

                                   <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Quarto básico R$</label>
                                                <input type="number" name="quartob" class="form-control" placeholder="Quarto básico">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Quarto básico II R$</label>
                                                <input type="number" name="quartobdois" class="form-control" placeholder="Quarto básico II">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Quarto luxo R$</label>
                                                <input type="number" name="quartol" class="form-control" placeholder="Quarto luxo">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Quarto luxo II R$</label>
                                                <input type="number" name="quartoldois" class="form-control" placeholder="Quarto luxo II">
                                            </div>
                                        </div>
                                    </div>  

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Abre</label>
                                                <input type="time" name="horaabre" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Fecha</label>
                                                <input type="time" name="horafecha"  class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-2" style="margin-left: 5%">
                                            <div class="form-group">
                                                <label>Wifi</label>
                                                    <div>
                                                        <input type="radio" name="wifi" value=1 checked><label>Sim</label>
                                                        <input type="radio" name="wifi" value=0><label>Não</label>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Academica</label>
                                                    <div>
                                                        <input type="radio" name="academia" value=1 checked><label>Sim</label>
                                                        <input type="radio" name="academia" value=0><label>Não</label>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Restaurante</label>
                                                    <div>
                                                        <input type="radio" name="restaurante" value=1 checked><label>Sim</label>
                                                        <input type="radio" name="restaurante" value=0><label>Não</label>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Observações</label>
                                                <textarea name="obs" rows="2" class="form-control" placeholder="Informações a serem observadas"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Foto do Hotel (URL)</label>
                                                <input name="urlfoto" type="text" class="form-control" placeholder="https://foto.com.br">

                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Cadastrar</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-16">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Hotéis Cadastrados</h4>
                                <p class="category">Todos os hotéis cadastrados em sistema.</p>
                            </div>
                            <div style="overflow:auto; width: 100%; height: 100%;">

                            <?php 

                                $endereco   = 'localhost';
                                $usuario    = 'root';
                                $banco      = "projeto";
                                
                                $conexao = mysqli_connect ( $endereco, 
                                                            $usuario);

                                // 2 - Abrir/Selecionar o Banco: petshop
                                mysqli_select_db( $conexao , $banco) or
                                  die("Erro ao selecionar o banco
                                       petshop: " . mysqli_error($conexao));
                                
                                // 3 - Colocar o comando de seleção numa variável
                                $comandoSQL="SELECT * FROM hotel";
                                
                                // 4 - Mandar o comando para o banco
                                $registros = mysqli_query($conexao , $comandoSQL) 
                                    or die("Erro na seleção de registros de 
                                      Hoteis:" . mysqli_error($conexao));
                                      
                                // 5 - Tabela está vazia?
                                $linhas = mysqli_num_rows($registros);
                                
                                if ($linhas ==0) 
                                    die ("Tabela de <b>Hoteis</b> está vazia!");
                                
                               
                                // 6 - Exibindo os dados dos bichinhos....
                                $contador = 0;
                                
                                echo "<table class='table table-hover table-striped'>";
                                    echo "<thead>";
                                    echo   "<th style='text-align: center'>ID</th>";
                                    echo   "<th style='text-align: center'>Nome</th>";
                                    echo   "<th style='text-align: center'>Endereço</th>";
                                    echo   "<th style='text-align: center'>Número</th>";
                                    echo   "<th style='text-align: center'>País</th>";
                                    echo   "<th style='text-align: center'>Estado</th>";
                                    echo   "<th style='text-align: center'>Cidade</th>";
                                    echo   "<th style='text-align: center'>CEP</th>";
                                    echo   "<th style='text-align: center'>Básico I</th>";
                                    echo   "<th style='text-align: center'>Básico II</th>";
                                    echo   "<th style='text-align: center'>Luxo I</th>";
                                    echo   "<th style='text-align: center'>Luxo II</th>";
                                    echo   "<th style='text-align: center'>Abre</th>";
                                    echo   "<th style='text-align: center'>Fecha</th>";
                                    echo   "<th style='text-align: center'>Wi-Fi</th>";
                                    echo   "<th style='text-align: center'>Acadêmia</th>";
                                    echo   "<th style='text-align: center'>Restaurante</th>";
                                    echo   "<th style='text-align: center'>Observações</th>";
                                    echo   "<th style='text-align: center'>Path Foto</th>";
                                    echo   "<th style='text-align: center'>Ações</th>";
                                    echo "</thead>";                                     
                                     
                                    while ($contador < $linhas)
                                    {
                                        $dados = mysqli_fetch_array($registros);
                                        $id = $dados["id"];
                                        $nome = $dados["nome"];
                                        $endereco = $dados["endereco"];
                                        $numero = $dados["numero"];
                                        $pais = $dados["pais"];
                                        $estado = $dados["estado"];
                                        $cidade = $dados["cidade"];
                                        $cep = $dados["cep"];
                                        $quartob = $dados["quartob"];
                                        $quartobdois = $dados["quartobdois"];
                                        $quartol = $dados["quartol"];
                                        $quartoldois = $dados["quartoldois"];
                                        $horaabertura = $dados["horaabertura"];
                                        $horaencerra = $dados["horaencerra"];
                                        $wifi = $dados["wifi"];
                                        $academia = $dados["academia"];
                                        $restaurante = $dados["restaurante"];
                                        $obs = $dados["obs"];
                                        $urlfoto = $dados["pathFoto"];

                                        echo "<tbody>";
                                            echo "<tr>";
                                                echo "<td style='text-align: center'>$id</td>";
                                                echo "<td style='text-align: center'>$nome<td>";
                                                echo "<td style='text-align: center'>$endereco</td>";
                                                echo "<td style='text-align: center'>$numero</td>";
                                                echo "<td style='text-align: center'>$pais</td>";
                                                echo "<td style='text-align: center'>$estado</td>";
                                                echo "<td style='text-align: center'>$cidade</td>";
                                                echo "<td style='text-align: center'>$cep</td>";
                                                echo "<td style='text-align: center'>$quartob</td>";
                                                echo "<td style='text-align: center'>$quartobdois</td>";
                                                echo "<td style='text-align: center'>$quartol</td>";
                                                echo "<td style='text-align: center'>$quartoldois</td>";
                                                echo "<td style='text-align: center'>$horaabertura</td>";
                                                echo "<td style='text-align: center'>$horaencerra</td>";
                                                echo "<td style='text-align: center'>$wifi</td>";
                                                echo "<td style='text-align: center'>$academia</td>";
                                                echo "<td style='text-align: center'>$restaurante</td>";
                                                echo "<td style='text-align: center'>$obs</td>";
                                                echo "<td style='text-align: center'>$urlfoto</td>";
                                                echo "<td style='text-align: center'><button type='submit' style='width: 100%' class='btn btn-info btn-fill'>Editar</button></td>";
                                                echo "<td style='text-align: center'><a type='submit' style='width: 100%' class='btn btn-danger btn-fill' href='crudhotel/delete adminhoteis.php?id=$id'>Excluir</a></td>";
                                            echo "</tr>";
                                        echo "</tbody>";
                                    
                                        ++$contador;
                                    }

                                echo "</table>";
                            ?>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>

</html>
