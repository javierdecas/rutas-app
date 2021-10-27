<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', 'hola');

Route::get('/hola', function () 
{
	return view('hola');
})->name("inicio");

Route::get('/fecha', function ()
{
	$fecha = new \DateTime();

	return view('fecha', ["fecha" => $fecha->format('d-m-Y H:i:s')]);
})->name("fechahora");

Route::match(['get', 'post'],'/edad', function (Request $req)
{
	$hoy = new \DateTime();

	$fecha = null;

	$diferencia = null;

	if ($req->isMethod('post') && $req->has('fecha'))
	{
		$fecha = new \DateTime($req->input('fecha'));
		$diferencia = date_diff()($hoy, $fecha);

	}

	return view('edad', ['hoy' => $hoy->format('Y-m-d'), "diferencia" => $diferencia]);
})->name("tiempo");

Route::get('/cumple', function ()
{
	return view('cumple');
})->name("cumple");