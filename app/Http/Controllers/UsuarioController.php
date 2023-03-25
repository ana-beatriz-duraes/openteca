<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function homeView()
    {
        return view('welcome');
    }
    public function loginView()
    {
        return view('login');
    } 
    public function cadastro()
    {
        return view('cadastro');
    }
    public function meus_livros()
    {
        return view('meus_livros');
    }
    public function informacoes_livros()
    {
        return view('informacoes-livros');
    }
    public function minha_conta()
    {
        return view('minha-conta');
    }
    public function resultado_livros()
    {
        return view('resultado-pesquisa-livro');
    }
}
