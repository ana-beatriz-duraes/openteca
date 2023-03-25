<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
   return view('welcome');
});
Route::get('/login', [UsuarioController::class, 'loginView']);



// Route::get('/login', function () {
//     // return view('login');
// });
Route::get('/cadastro', function () {
    // return view('cadastro');
});
Route::get('/meus_livros', function () {
    // return view('meus_livros');
});
Route::get('/informacoes-livros', function () {
    // return view('informacoes-livros');
});
Route::get('/minha-conta', function () {
    // return view('minha-conta');
});
Route::get('/resultado-pesquisa-livro', function () {
    return view('resultado-pesquisa-livro');
});