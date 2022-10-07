<?php

namespace App\Http\Controllers;

use App\Http\Requests\Mei\StoreRequest;
use App\Models\Mei;
use App\Repositories\MeiRepository;

class MeisController extends Controller
{
    public function store(StoreRequest $request)
    {
        $payload = $request->except('files');
        $payload['atividades_economicas'] = implode(', ', $payload['atividades_economicas']);
        $payload['autor_id'] = auth()->id();

        $mei = Mei::create($payload);

        $invalidFile = false;

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                if (!$file->isValid()) {
                    $invalidFile = true;
                } else {
                    $file->storeAs('attachments/' . $mei->id, md5(strtotime('now')) . ' - ' . $file->getClientOriginalName(), 'mei');
                }
            }
        }

        if ($invalidFile) {
            sweetalert()->addError('Um ou mais anexos não foram enviados! Edite a solicitação para incluir novamente.');
        }

        sweetalert()->toast()->addSuccess('MEI adicionado com sucesso.');

        return redirect()->route('mei.lista-meis');
    }

    public function create()
    {
        return view('dashboard.mei.index', ['atividades' => MeiRepository::getAtividadesEconomicasArray()]);
    }

    public function listaMeis()
    {
        return view('dashboard.mei.lista-meis');
    }

    public function visualizarMei(Mei $mei)
    {
        return view('dashboard.mei.visualizar-mei', ['mei' => $mei]);
    }

    public function update(StoreRequest $request, Mei $mei)
    {
        $payload = $request->except('files');
        $payload['atividades_economicas'] = implode(', ', $payload['atividades_economicas']);

        $mei->update($payload);

        $invalidFile = false;

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                if (!$file->isValid()) {
                    $invalidFile = true;
                } else {
                    $file->storeAs('attachments/' . $mei->id, md5(strtotime('now')) . ' - ' . $file->getClientOriginalName(), 'mei');
                }
            }
        }

        if ($invalidFile) {
            sweetalert()->addError('Um ou mais anexos não foram enviados! Edite a solicitação para incluir novamente.');
        }

        sweetalert()->addSuccess('MEI atualizado com sucesso.');

        return redirect()->route('mei.lista-meis');
    }
}
