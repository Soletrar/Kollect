<?php

namespace App\Http\Controllers;

use App\Http\Requests\Baixa\StoreBaixaRequest;
use App\Models\Baixa;

class BaixaController extends Controller
{
    public function index()
    {
        return view('dashboard.baixa.index');
    }

    public function addBaixa()
    {
        return view('dashboard.baixa.adicionar-baixa');
    }

    public function store(StoreBaixaRequest $request)
    {
        Baixa::create([
            'prioridade' => $request->input('prioridade'),
            'tipo_baixa' => $request->input('tipo_baixa'),
            'motivo_baixa' => $request->input('motivo_baixa'),
            'data_baixa' => $request->input('data_baixa'),
            'cnpj' => $request->input('cnpj'),
            'telefone' => $request->input('telefone'),
            'email' => $request->input('email'),
            'estado' => $request->input('estado'),
            'cidade' => $request->input('cidade'),
            'haveres' => $request->input('haveres'),
            'valor_haveres' => $request->input('valor_haveres'),
            'responsabilidade' => $request->input('responsabilidade'),

            'autor_id' => auth()->id()
        ]);


        return redirect()->route('baixa.home');
    }

    public function visualizarBaixa(Baixa $baixa)
    {
        return view('dashboard.baixa.visualizar-baixa', ['baixa' => $baixa]);
    }
}
