<?php



Route::get('/', function () {
    return view('welcome');
});

Route::post('cadastro', 'funcionariocontroller@insere');

Route::get('/funcionario', 'funcionariocontroller@exibir');

Route::get('/setor','setorcontroller@exibir');

Route::get('/cargo','cargocontroller@exibir');

Route::get('/rescisao','rescisaocontroller@exibir');

