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
        $payload = $request->except('files');
        $payload['tipo_alteracao'] = implode(', ', $payload['tipo_alteracao']);
        $payload['autor_id'] = auth()->id();

        $alteracao = Alteracao::create($payload);

        $invalidFile = false;

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                if (!$file->isValid()) {
                    $invalidFile = true;
                } else {
                    $file->storeAs('attachments/' . $alteracao->id, md5(strtotime('now')) . ' - ' . $file->getClientOriginalName(), 'alteracao');
                }
            }
        }

        if ($invalidFile) {
            sweetalert()->addError('Um ou mais anexos não foram enviados! Edite a solicitação para incluir novamente.');
        }

        sweetalert()->toast()->addSuccess('Alteração criada com sucesso.');

        return redirect()->route('alteracao.adicionar-socio', ['alteracao' => $alteracao]);
    }

    public function update(CriarAlteracaoRequest $request, Alteracao $alteracao)
    {
        $payload = $request->except('files');
        $payload['tipo_alteracao'] = implode(', ', $payload['tipo_alteracao']);

        $alteracao->update($payload);

        $invalidFile = false;

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                if (!$file->isValid()) {
                    $invalidFile = true;
                } else {
                    $file->storeAs('attachments/' . $alteracao->id, md5(strtotime('now')) . ' - ' . $file->getClientOriginalName(), 'alteracao');
                }
            }
        }

        if ($invalidFile) {
            sweetalert()->addError('Um ou mais anexos não foram enviados! Edite a solicitação para incluir novamente.');
        }

        sweetalert()->addSuccess('Alteração atualizada com sucesso.');

        return redirect()->route('alteracao.lista-alteracoes');
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
