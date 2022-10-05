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
        $payload = $request->validated();
        $payload['tipo_alteracao'] = implode(', ', $payload['tipo_alteracao']);
        $payload['autor_id'] = auth()->id();

        $alteracao = Alteracao::create($payload);

        sweetalert()->toast()->addSuccess('Alteração criada com sucesso.');

        return redirect()->route('alteracao.adicionar-socio', ['alteracao' => $alteracao]);
    }

    public function adicionarSocio(Alteracao $alteracao)
    {
        return view('dashboard.alteracao.add-socio', ['alteracao' => $alteracao]);
    }

    public function adicionarFilial(Alteracao $alteracao)
    {
        return view('dashboard.alteracao.add-filial', ['alteracao' => $alteracao]);
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
