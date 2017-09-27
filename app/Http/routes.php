<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/funcionario', 'funcionariocontroller@exibir'); //Rotas do Funcionario

Route::get('/setor','setorcontroller@exibir'); //Rotas do Setor

Route::get('/cadastrosetor','setorcontroller@cadastro');

Route::get('/cadastrosetor/inserir', 'setorcontroller@inserirSetor');

Route::get('/cargo','cargocontroller@exibir'); //Rotas do Cargo

Route::get('/rescisao','rescisaocontroller@exibir'); //Rotas da Rescisão

