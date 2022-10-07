<?php

namespace App\Http\Controllers;

use App\Http\Requests\Constituicao\CriarConstituicaoRequest;
use App\Models\Constituicao;
use Illuminate\Http\Request;

class ConstituicaoController extends Controller
{
    public function create()
    {
        return view('dashboard.constituicao.index');
    }

    public function postAdicionarConstituicao(CriarConstituicaoRequest $request)
    {
        $payload = array_merge($request->except('files'), ['autor_id' => auth()->id()]);
        $constituicao = Constituicao::create($payload);

        $invalidFile = false;

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                if (!$file->isValid()) {
                    $invalidFile = true;
                } else {
                    $file->storeAs('attachments/' . $constituicao->id, md5(strtotime('now')) . ' - ' . $file->getClientOriginalName(), 'constituicao');
                }
            }
        }

        if ($invalidFile) {
            sweetalert()->addError('Um ou mais anexos não foram enviados! Edite a solicitação para incluir novamente.');
        }

        return redirect()->route('constituicao.adicionar-socio', ['constituicao' => $constituicao]);
    }

    public function update(CriarConstituicaoRequest $request, Constituicao $constituicao)
    {
        $payload = $request->except('files');
        $constituicao->update($payload);

        $invalidFile = false;

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                if (!$file->isValid()) {
                    $invalidFile = true;
                } else {
                    $file->storeAs('attachments/' . $constituicao->id, md5(strtotime('now')) . ' - ' . $file->getClientOriginalName(), 'constituicao');
                }
            }
        }

        if ($invalidFile) {
            sweetalert()->addError('Um ou mais anexos não foram enviados! Edite a solicitação para incluir novamente.');
        }

        sweetalert()->addSuccess('Constituição atualizada com sucesso.');

        return redirect()->route('constituicao.lista-constituicoes');
    }

    public function adicionarSocio(Constituicao $constituicao)
    {
        return view('dashboard.constituicao.add-socio', ['constituicao' => $constituicao]);
    }

    public function adicionarFilial(Constituicao $constituicao)
    {
        return view('dashboard.constituicao.add-filial', ['constituicao' => $constituicao]);
    }

    public function listaConstituicoes()
    {
        return view('dashboard.constituicao.lista-constituicoes');
    }

    public function visualizarConstituicao(Constituicao $constituicao)
    {
        return view('dashboard.constituicao.visualizar-constituicao', ['constituicao' => $constituicao]);
    }
}
