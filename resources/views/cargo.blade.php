@extends('funcionario')

@section('tela')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Cargos</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-3 col-md-6">

    </div>
</div>
<div class="row">
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Lista de Cargos
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
                                    <th>Setor</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cargos as $c)
                                <tr>
                                    <td>{{$c->id}}</td>
                                    <td>{{$c->nome}}</td>
                                    <td>{{$c->setor->nome}}</td>
                                    <td><button type="button" class="btn btn-primary">Alterar</button>
                                        <button type="button" class="btn btn-danger">Excluir</button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="../public/cadastrocargo" class="btn btn-success">Cadastro de Cargos</a>
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

</div>
@endsection