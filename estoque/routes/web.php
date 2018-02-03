<?php

Route::get('/', function(){
    return "<h1>Listagem</h1>";
});

Route::get('/produtos', 'ProdutoController@lista');