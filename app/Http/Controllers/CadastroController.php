<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class CadastroController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {

        //192.168.1.60:8086/api/captacao-leads/salvar

        $client = new Client([
            'base_uri' => 'http://localhost:8086/',
        ]);

        $request->merge([ 'idEmpresa' => 200 ]);

        $r = $client->request('POST', 'http://localhost:8086/api/captacao-leads/salvar', ['body' => $request]);
/*
        $response = $client->post('api/captacao-leads/salvar', [
            'debug' => TRUE,
            'body' => $request->all(),
            'headers' => [
              'Content-Type' => 'application/x-www-form-urlencoded',
            ]
        ]);*/
        dd($request-all());
/*
        $this->validate($request,
        [
            'nome' => 'required|alpha',
            'telefone' => 'required|numeric'
        ]);
*/
    }

}
