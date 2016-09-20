<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
	//array_add()
	$array = ['nome'=>'Camila','idade'=>25];
	$array = array_add($array,'email','camila@camila.com');
	$array = array_add($array,'amigo','Celo');
	//dd($array);

	// array_collapse()
	$array = [['banana','limao'],['vermelho','azul']];
	$array = array_collapse($array);
	//dd($array);

	//array_divide()
	list($key,$value) = array_divide(['nome'=>'Camila','idade'=>25]);
	//dd($key,$value);

	// array_except()
	$array = ['nome'=>'Camila','idade'=>25];
	$array = array_except($array,['idade']);
	//dd($array);

	//base_path()
	$path = base_path('Config');
	//dd($path);

	//database_path
	$dbpath = database_path();
	//dd($dbpath);

	//public_path()
	$public = public_path();
	//dd($public);

	//storage_path()
	$storage = storage_path();
	//dd($storage);

	//camel_case()
	$text = "Marcelo esta programando lavarel";
	//dd(camel_case($text));

	// snake_case()
	$text = "Marcelo esta programando lavarel";
	$text = camel_case($text);
	//dd(snake_case($text));

	//str_limit()
	$text = "Marcelo esta programando lavarel";
	//dd(str_limit($text,5));

	




    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index');

// cliente
Route::get('/cliente', ['uses'=>'ClienteController@index','as'=>'cliente.index']);
Route::get('/cliente/adicionar', ['uses'=>'ClienteController@adicionar','as'=>'cliente.adicionar']);
Route::post('/cliente/salvar', ['uses'=>'ClienteController@salvar','as'=>'cliente.salvar']);
Route::get('/cliente/editar/{id}', ['uses'=>'ClienteController@editar','as'=>'cliente.editar']);
Route::put('/cliente/atualizar/{id}', ['uses'=>'ClienteController@atualizar','as'=>'cliente.atualizar']);
Route::get('/cliente/deletar/{id}', ['uses'=>'ClienteController@deletar','as'=>'cliente.deletar']);
Route::get('/cliente/detalhe/{id}', ['uses'=>'ClienteController@detalhe','as'=>'cliente.detalhe']);

// telefone
Route::get('/telefone/adicionar/{id}', ['uses'=>'TelefoneController@adicionar','as'=>'telefone.adicionar']);
Route::post('/telefone/salvar/{id}', ['uses'=>'TelefoneController@salvar','as'=>'telefone.salvar']);
Route::get('/telefone/editar/{id}', ['uses'=>'TelefoneController@editar','as'=>'telefone.editar']);
Route::put('/telefone/atualizar/{id}', ['uses'=>'TelefoneController@atualizar','as'=>'telefone.atualizar']);
Route::get('/telefone/deletar/{id}', ['uses'=>'TelefoneController@deletar','as'=>'telefone.deletar']);





