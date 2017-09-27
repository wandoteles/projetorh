@extends('funcionario')

@section('tela')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Setores</h1>
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
                Cadastro de Setores
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div id=""></div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <form action="{{url('cadastrosetor/inserir')}}">
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" class="form-control" name="nome"><br>
                                <button type="submit" class="btn btn-success">Cadastrar</button>
                                <a href="../public/setor" class="btn btn-danger">Voltar</a>
                            </div>
                        </form>    
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