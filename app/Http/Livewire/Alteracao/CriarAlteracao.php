<?php

namespace App\Http\Livewire\Alteracao;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use function Livewire\str;

class CriarAlteracao extends Component
{
    public string $prioridade = 'PRIORIDADE BAIXA';

    public array $tipoAlteracao = [];
    public string $descricaoAlteracao = '';

    public string $nomeEmpresarial = '';
    public string $nomeEmpresarial2 = '';
    public string $nomeEmpresarial3 = '';
    public string $nomeFantasia = '';
    public string $cep = '';
    public string $logradouro = '';
    public string $bairro = '';
    public string $localidade = '';
    public string $uf = '';
    public string $numero = '';

    public string $email = '';
    public string $telefone = '';

    public string $tipoComplemento = '0';
    public string $complemento = '';

    public string $tipoComplemento2 = '0';
    public string $complemento2 = '';

    public string $tipoComplemento3 = '0';
    public string $complemento3 = '';

    public string $capitalSocial = '';
    public string $tipoSocietario = '0';

    public string $integralizacao = '';
    public string $clausulaRestritiva = '';

    public string $porte = '';
    public string $simples = '';

    public string $areaImovel = '';
    public string $pavimentos = '0';

    public string $outraEdificacao = '';
    public string $edificacao = '';

    public string $naturezaImovel = '';
    public string $inscricaoImovel = '';

    public string $tipoImovel = '';
    public string $referencia = '';

    public string $advogado = '';
    public string $advogadoOab = '';

    public string $assinaturaContrato = '';
    public string $senhaGovbr = '';

    public string $objeto = '';
    public string $cnae = '';
    public string $risco = 'SEM INFORMAÇÃO';

    public string $honorarioObservacao = '';
    public string $honorarioExtra = '';

    public $riscosBaixos = [
        '0121101',
        '1031700',
        '1032599',
        '1033302',
        '1091102',
        '1092900',
        '1093701',
        '1093702',
        '1094500',
        '1095300',
        '1096100',
        '1099604',
        '1311100',
        '1312000',
        '1340599',
        '1351100',
        '1354500',
        '1359600',
        '1411801',
        '1411802',
        '1412601',
        '1412602',
        '1412603',
        '1413401',
        '1413402',
        '1413403',
        '1414200',
        '1421500',
        '1422300',
        '1521100',
        '1529700',
        '1531901',
        '1822901',
        '1822999',
        '2319200',
        '2399101',
        '2539001',
        '3250706',
        '3250707',
        '3291400',
        '3299006',
        '3312102',
        '3312104',
        '3313902',
        '3314701',
        '3314702',
        '3314703',
        '3314706',
        '3314707',
        '3314709',
        '3314712',
        '3314713',
        '3329501',
        '3831999',
        '3832700',
        '4512901',
        '4520001',
        '4520002',
        '4520003',
        '4520004',
        '4520005',
        '4520006',
        '4520007',
        '4520008',
        '4530703',
        '4530704',
        '4530705',
        '4530706',
        '4541206',
        '4541207',
        '4542101',
        '4542102',
        '4543900',
        '4611700',
        '4612500',
        '4613300',
        '4614100',
        '4615000',
        '4616800',
        '4617600',
        '4618401',
        '4618402',
        '4618403',
        '4618499',
        '4619200',
        '4635401',
        '4635402',
        '4637104',
        '4637107',
        '4639701',
        '4641901',
        '4641902',
        '4641903',
        '4642701',
        '4642702',
        '4643501',
        '4643502',
        '4647801',
        '4647802',
        '4649404',
        '4649405',
        '4649406',
        '4649407',
        '4649410',
        '4651601',
        '4651602',
        '4652400',
        '4686901',
        '4686902',
        '4687701',
        '4687703',
        '4689302',
        '4691500',
        '4692300',
        '4712100',
        '4721102',
        '4721104',
        '4722901',
        '4723700',
        '4729602',
        '4729699',
        '4741500',
        '4742300',
        '4743100',
        '4744001',
        '4744003',
        '4744006',
        '4744099',
        '4751201',
        '4751202',
        '4752100',
        '4753900',
        '4754701',
        '4754702',
        '4754703',
        '4755501',
        '4755502',
        '4755503',
        '4756300',
        '4757100',
        '4759801',
        '4759899',
        '4761001',
        '4761002',
        '4761003',
        '4762800',
        '4763601',
        '4763602',
        '4763603',
        '4763604',
        '4763605',
        '4771704',
        '4772500',
        '4773300',
        '4774100',
        '4781400',
        '4782201',
        '4782202',
        '4783101',
        '4783102',
        '4785701',
        '4785799',
        '4789001',
        '4789002',
        '4789003',
        '4789004',
        '4789007',
        '4789008',
        '5232000',
        '5590601',
        '5590603',
        '5611201',
        '5611203',
        '5611204',
        '5611205',
        '5612100',
        '5620102',
        '5620104',
        '5811500',
        '5812301',
        '5812302',
        '5813100',
        '5819100',
        '5911102',
        '5912001',
        '5912002',
        '5920100',
        '6201501',
        '6201502',
        '6202300',
        '6203100',
        '6204000',
        '6209100',
        '6311900',
        '6319400',
        '6391700',
        '6511102',
        '6621501',
        '6621502',
        '6810201',
        '6810202',
        '6821801',
        '6821802',
        '6822600',
        '6911701',
        '6911702',
        '6920601',
        '6920602',
        '7020400',
        '7111100',
        '7112000',
        '7119701',
        '7119702',
        '7119703',
        '7119799',
        '7120100',
        '7210000',
        '7220700',
        '7311400',
        '7312200',
        '7319002',
        '7319003',
        '7319004',
        '7320300',
        '7410202',
        '7410203',
        '7410299',
        '7420001',
        '7420003',
        '7420004',
        '7420005',
        '7490101',
        '7490103',
        '7490104',
        '7490105',
        '7490199',
        '7500100',
        '7721700',
        '7722500',
        '7723300',
        '7729201',
        '7729202',
        '7729203',
        '7729299',
        '7733100',
        '7911200',
        '7912100',
        '8011102',
        '8020001',
        '8030700',
        '8211300',
        '8219901',
        '8219999',
        '8220200',
        '8230001',
        '8291100',
        '8292000',
        '8299703',
        '8299707',
        '8591100',
        '8592901',
        '8592902',
        '8592903',
        '8592999',
        '8593700',
        '8599603',
        '8599604',
        '8599605',
        '8650002',
        '8650003',
        '8650004',
        '8650005',
        '8650006',
        '8660700',
        '9001901',
        '9001902',
        '9001903',
        '9001904',
        '9002701',
        '9002702',
        '9102302',
        '9319101',
        '9329803',
        '9329804',
        '9430800',
        '9493600',
        '9511800',
        '9512600',
        '9521500',
        '9529101',
        '9529102',
        '9529103',
        '9529104',
        '9529105',
        '9529106',
        '9529199',
        '9602501'

    ];

    public function updatedCep()
    {
        if (empty($this->cep)) return;

        $req = Http::get(sprintf('https://viacep.com.br/ws/%s/json/', $this->cep));

        if ($req->status() != 200) return;

        $data = json_decode($req->body(), true);
        if (isset($data['erro']) && $data['erro'] === true) return;

        $this->logradouro = $data['logradouro'];
        $this->bairro = $data['bairro'];
        $this->localidade = $data['localidade'];
        $this->uf = $data['uf'];
    }

    public function updatedCnae()
    {
        if (empty($this->cnae)) {
            $this->risco = 'ESPECIFIQUE O CNAE';
            return;
        }

        $cnaes = str($this->cnae)->explode(',');
        $this->risco = '';
        foreach ($cnaes as $cnae) {
            if (empty($cnae)) continue;

            if (in_array($cnae, $this->riscosBaixos)) {
                $this->risco .= sprintf('%s => %s | ', $cnae, 'BAIXO');
            } else {
                $this->risco .= sprintf('%s => %s | ', $cnae, 'ALTO');
            }
        }
    }

    public function render()
    {
        $complementos = [
            'ANDAR',
            'ANEXO',
            'APARTAMENTO',
            'ARMAZEM',
            'BANCA',
            'BARRACÃO',
            'CAIXA POSTAL',
            'CASA',
            'CONDOMINIO',
            'CONJUNTO',
            'EDIFICIO',
            'FUNDOS',
            'GALPAO',
            'GARAGEM',
            'LETRA',
            'LOJA',
            'LOTE',
            'MEZANINO',
            'NIVEL',
            'PAVILHAO',
            'PAVIMENTO',
            'PILOTIS',
            'QUADRA',
            'QUILOMETRO',
            'QUIOSQUE',
            'SALA',
            'SETOR',
            'SOBRELOJA',
            'STAND',
            'SUBSOLO',
            'TERREO'
        ];

        $tiposSocietarios = [
            'LTDA',
            'S.A',
            'EI',
            'SIMPLES'
        ];

        $tiposAlteracao = [
            'Alteração da forma de atuação',
            'Alteração da natureza jurídica',
            'Alteração de atividades econômicas (principal e secundárias)',
            'Alteração de capital social e/ou Quadro Societário',
            'Alteração de Cláusulas Particulares',
            'Alteração de dados cadastrais',
            'Alteração de endereço entre estados',
            'Alteração de endereço entre municípios no mesmo estado',
            'Alteração de endereço no mesmo município',
            'Alteração de nome empresarial (firma ou denominação)',
            'Alteração do tipo de unidade',
            'Cisão parcial (específico para a sucedida)',
            'Criação de Filial',
            'Enquadramento / Reenquadramento / Desenquadramento de Porte de Empresa',
            'Espólio',
            'Incorporação de empresa',
            'Interrupção temporária de atividades',
            'Procuração',
            'Prorrogação de prazo (SPE)',
            'Reinício das atividades interrompidas temporariamente',
            'Rerratificação',
            'Restabelecimento de matriz (Reativação)',
            'Revogação de Procuração',
            'Sucessão',
            'Cancelamento de delegação de gerência',
            'Delegação de gerência',
            'Autorização de transferencia de titularidade por sucessão',
            'Averbação de nomeação de administrador',
            'Desistência de transferência de sede',
            'Destituição de gerente por representante ou assistente',
            'Modificacoes posteriores a autorizacao para funcionamento no pais',
            'Transferencia de sede para outro pais'
        ];

        return view('livewire.alteracao.criar-alteracao', [
            'tiposSocietarios' => $tiposSocietarios,
            'complementos' => $complementos,
            'tiposAlteracoes' => $tiposAlteracao
        ]);
    }
}
