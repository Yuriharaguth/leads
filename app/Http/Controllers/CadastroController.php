<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class CadastroController extends Controller
{
    private $url = 'http://192.168.1.60:8086/api/captacao-leads/salvar';

    public function index()
    {
        return view('welcome');
    }

    public function store(Request $dados)
    {
        $this->validarDados($dados);

        return  $this->enviarLeadsApae($dados);
    }

    private function validarDados(Request $dados)
    {
        $this->validate($dados, [
            'nome' => 'required',
            'telefone' => 'required|numeric',
        ]);
    }

    private function enviarLeadsApae(Request $dados)
    {
        $response = null;
        try {
            $dados->merge(['idEmpresa' => 200]);
            $client = new Client();
            $response = $client->post($this->url,[
                'headers' => ['Content-Type' => 'application/json'],
                'body' => json_encode(
                    $dados->all()
                )
            ],array());

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            return $this->retornarErro($e);
        }
        return view('sucesso');;
    }

    private function retornarErro($e) {
        return redirect()
            ->back()
            ->with('message','Problemas ao cadastrar doador, tente novamente.')
            ->withInput();
    }

}