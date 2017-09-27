<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>RH Contabilidade - Soluções Financeiras</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/sb-admin-2.css" rel="stylesheet" type="text/css">

        <!-- Morris Charts CSS -->
        <link href="css/morris.css" rel="stylesheet"type="text/css">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../public">RH Contabilidade</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                    </li>

                    <!-- /.dropdown -->
                    <li class="dropdown">


                        <!-- /.dropdown-tasks -->
                    </li>
                    <!-- /.dropdown -->

                    <!-- /.dropdown -->

                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">

                            <li>
                                <a href="funcionario"><i class="fa fa-user fa-fw"></i> Funcionários</a>
                            </li>
                            <li>
                                <a href="cargo"><i class="fa fa-suitcase fa-fw"></i> Cargos</a>

                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="setor"><i class="fa fa-sitemap fa-fw"></i> Setores</a>
                            </li>
                            <li>
                                <a href="rescisao"><i class="fa fa-money fa-fw"></i> Rescisão</a>
                            </li>


                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                @section('tela')
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Funcionários</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">

                    </div>
                </div>
                <!-- /.row -->
                
                <div class="row">
                    <div class="col-lg-9">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Lista de Funcionários
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div id=""></div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nome</th>
                                                    <th>CPF</th>
                                                    <th>Sálario</th>
                                                    <th>Cargo</th>
                                                    <th>Data de Admissão</th>
                                                    <th>Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Wando</td>
                                                    <td>0123456789</td>
                                                    <td>3.500,00</td>
                                                    <td>Supervisor</td>
                                                    <td>29/03/2017</td>
                                                    <td><button type="button" class="btn btn-primary">Alterar</button>
                                                        <button type="button" class="btn btn-danger">Excluir</button></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Pedro</td>
                                                    <td>0147258369</td>
                                                    <td>2.800,00</td>
                                                    <td>Analista de Sistemas</td>
                                                    <td>19/05/2017</td>
                                                    <td><button type="button" class="btn btn-primary">Alterar</button>
                                                        <button type="button" class="btn btn-danger">Excluir</button></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Everton</td>
                                                    <td>0987456321</td>
                                                    <td>1.500,00</td>
                                                    <td>Analista de Testes</td>
                                                    <td>10/01/2017</td>
                                                    <td><a type="button" class="btn btn-primary">Alterar</a>
                                                        <a type="button" class="btn btn-danger">Excluir</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <a type="button" class="btn btn-success">Cadastrar</a>
                                        <a href="../public" class="btn btn-danger">Voltar</a>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->

                        <!-- /.panel -->

                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-8 -->

                    <!-- /.row -->
                </div>
                <!-- /#page-wrapper -->
                @show
            </div>
            
            <!-- /#wrapper -->

            <!-- jQuery -->
            <script src="js/jquery.min.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="js/bootstrap.min.js"></script>

            <!-- Metis Menu Plugin JavaScript -->
            <script src="js/metisMenu.min.js"></script>

            <!-- Morris Charts JavaScript -->
            <script src="js/raphael.min.js"></script>
            <script src="js/morris.min.js"></script>
            <script src="js/morris-data.js"></script>

            <!-- Custom Theme JavaScript -->
            <script src="js/sb-admin-2.js"></script>

    </body>

</html>
