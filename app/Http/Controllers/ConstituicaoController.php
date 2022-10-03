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
        $payload = array_merge($request->validated(), ['autor_id' => auth()->id()]);
        $constituicao = Constituicao::create($payload);

        return redirect()->route('constituicao.adicionar-socio', ['constituicao' => $constituicao]);
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
