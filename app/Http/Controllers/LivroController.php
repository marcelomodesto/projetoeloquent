<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livro;

class LivroController extends Controller
{
    public function index()
    {
      $livros = Livro::all();
      return view('livro.index', compact('livros'));
    }

    public function show(Livro $livro)
    {
      return view('livro.show', compact('livro2'));
    }
}
