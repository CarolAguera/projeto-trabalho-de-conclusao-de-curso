<?php
require_once("verificaSessao.php");
require_once("dependencias.php");

?>
<html lang="pt-br">

<head>

    <style>
        .navbar-dark .navbar-nav .nav-link {
            color: black;
        }

        .navbar-dark .navbar-nav .nav-link:hover {
            color: black;
            display: block;
            background-color: white;
        }

        .card-header {
            background-color: white;
        }

        .btn-secondary {
            color: #000000;
            background-color: transparent;
            border-color: transparent;
        }

        @media only screen and (min-width: 992px) {

            .float {
                float: left;
            }
        }

        .btn-light:hover {
            color: #000000;
            background-color: transparent;
            border-color: transparent;
        }

        .btn-light {
            color: #000000;
            background-color: transparent;
            border-color: transparent;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark d-flex justify-content-center" style="background-color:  rgb(20, 141, 197);">
        <div>
            <a class=" navbar-brand float" href="../Admin/IndexAdmin.php"><img class="img-responsive img-thumbnail" src="../img/dpbrasillogo.png" alt="" width="126px" height="70px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent" style="padding-top: 5px;">
                <ul class="nav navbar-nav card-header">
                    <li class="nav-item"><a href="IndexAdmin.php" type="button" class="btn btn-light"><i class="fas fa-home"></i></span> Inicio</a></li>
                    <li class="nav-item dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-clipboard-list"></i>
                            Gestão Produtos
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="Categoria.php">Categorias</a></li>
                            <li><a class="dropdown-item" href="Marca.php">Marcas</a></li>
                            <li><a class="dropdown-item" href="Medida.php">Unidade de Medida</a></li>
                            <li><a class="dropdown-item" href="Produto.php">Produtos</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="Estoque.php"><strong><i class="fas fa-boxes"></i> Estoque</strong></a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-friends"></i>
                            Pessoas
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="NovoCliente.php">Cadastrar Clientes</a></li>
                            <li><a class="dropdown-item" href="NovoUsuario.php">Cadastrar Usuários</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="clientes.php">Consultar Clientes</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-file-pdf"></i>
                            Relatórios
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="../Admin/relatorioUsuario.php"><i class='fas fa-user'></i> Relatório de Usuários</a></li>
                            <li><a class="dropdown-item" href="../Admin/relatorioEstoque.php"><i class="fas fa-clipboard-list"></i> Relatório de Produtos</a></li>
                            <li><a class="dropdown-item" href="../Admin/relatorioVendas.php"><i class="fas fa-dollar-sign"></i> Relatório de Vendas Total</a></li>
                            <li><a class="dropdown-item" href="../Admin/relatorioVendaPorMes.php"><i class="fas fa-dollar-sign"></i> Relatório de Vendas Mês Atual</a></li>
                            <li><a class="dropdown-item" href="../Admin/relatorioEstoqueBaixo.php"><i class="fas fa-boxes"></i> Relatório de Estoque Baixo</a></li>
                            <li><a class="dropdown-item" href="../Admin/relatorioCidade.php"><i class='fas fa-user'></i> Relatório de Clientes Por Cidade</a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-list-ol"></i>
                            Consultar
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <center>
                                <li><a class="dropdown-item" href="./ListagemDeVendas.php">Consultar Vendas</a></li>
                            </center>
                        </ul>
                    </li>
                    <li class="nav-item" style="margin-right: 2px;">
                        <a type="button" class="btn btn-success" href="vendas.php"><i class="fas fa-dollar-sign"></i></span> Vendas</a>
                    </li>

                    <li class="nav-item dropdown">
                        <button style=" float: left;" type="button" class="btn btn-danger dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class='fas fa-user'></i> <?= $_SESSION['nome_completo']; ?>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <center>
                                <li><a class="dropdown-item" href="usuarios.php"> Gestão Usuários</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item" style="color: red" href="../logout.php"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
                            </center>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</body>

</html>