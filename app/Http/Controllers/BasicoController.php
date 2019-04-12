<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicoController extends Controller
{
    public function inicial()
    {
        $texto = "Seja Bem Vindo!";

        //chamando a view e passando uma informação
        //with ('nome variavel' , valor)
        return view('index')->with('texto', $texto);

    }

    public function quemsomos()
    {
        $texto = "Quem Somos.";

        return view('quem-somos')->with('texto', $texto);
    }

    public function contato()
    {
        $texto = "Contato";

        return view('contato')->with('texto', $texto);
    }
}
