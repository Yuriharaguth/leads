<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CadastroController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        //dd($request->all());

        $this->validate($request,
        [
            'nome' => 'required|alpha',
            'telefone' => 'required|numeric'
        ]);

    }

}
