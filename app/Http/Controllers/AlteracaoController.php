<?php

namespace App\Http\Controllers;

use App\Http\Requests\Alteracao\CriarAlteracaoRequest;
use App\Models\Alteracao;

class AlteracaoController extends Controller
{
    public function create()
    {
        return view('dashboard.alteracao.adicionar-alteracao');
    }

    public function postAdicionarAlteracao(CriarAlteracaoRequest $request)
    {
        $payload = array_merge($request->validated(), ['autor_id' => auth()->id()]);
        Alteracao::create($payload);

        sweetalert()->toast()->addSuccess('Alteração criada com sucesso.');

        return redirect()->route('dashboard');
    }

    public function listaAlteracoes()
    {
        return view('dashboard.alteracao.lista-alteracoes');
    }

    public function visualizarAlteracao(Alteracao $alteracao)
    {
        return view('dashboard.alteracao.visualizar-alteracao', ['alteracao' => $alteracao]);
    }
}
