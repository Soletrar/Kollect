<?php

namespace App\Http\Controllers;

use App\Http\Requests\Mei\StoreRequest;
use App\Models\Mei;
use App\Repositories\MeiRepository;
use Illuminate\Http\Request;

class MeisController extends Controller
{
    public function create()
    {
        return view('dashboard.mei.index', ['atividades' => MeiRepository::getAtividadesEconomicasArray()]);
    }

    public function store(StoreRequest $request)
    {
        $payload = $request->validated();
        $payload['atividades_economicas'] = implode(', ', $payload['atividades_economicas']);
        $payload['autor_id'] = auth()->id();

        Mei::create($payload);

        sweetalert()->toast()->addSuccess('MEI adicionado com sucesso.');

        return redirect()->route('mei.lista-meis');
    }

    public function listaMeis()
    {
        return view('dashboard.mei.lista-meis');
    }

    public function visualizarMei(Mei $mei)
    {
        return view('dashboard.mei.visualizar-mei', ['mei' => $mei]);
    }
}
