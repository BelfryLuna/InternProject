<?php

namespace App\Controllers;

use App\Models\TrekModel;
use App\Models\KeluhanModel;

class Home extends BaseController
{
    protected $trekModel;
    protected $keluhanModel;
    public function __construct()
    {
        $this->trekModel = new TrekModel();
        $this->keluhanModel = new KeluhanModel();
    }

    public function index()
    {
        if (in_groups('admin')) {

            $data = [
                'title' => 'Garuda CRM | Admin',
                'hasiltrekIn' => $this->trekModel->sumtrekIn(),
                'hasilkeluhanIn' => $this->keluhanModel->sumkelIn(),
                'hasilappIn' => $this->trekModel->sumappIn(),
                'hasilkeluhanDone' => $this->keluhanModel->sumkelDone(),
                'getJan' => $this->keluhanModel->GetJan(),
                'getFeb' => $this->keluhanModel->GetFeb(),
                'getMar' => $this->keluhanModel->GetMar(),
                'getApr' => $this->keluhanModel->GetApr(),
                'getMei' => $this->keluhanModel->GetMei(),
                'getJun' => $this->keluhanModel->GetJun(),
                'getJul' => $this->keluhanModel->GetJul(),
                'getAgus' => $this->keluhanModel->GetAgus(),
                'getSep' => $this->keluhanModel->GetSep(),
                'getOkt' => $this->keluhanModel->GetOkt(),
                'getNov' => $this->keluhanModel->GetNov(),
                'getDes' => $this->keluhanModel->GetDes(),
                'trekJan' => $this->trekModel->trekJan(),
                'trekFeb' => $this->trekModel->trekFeb(),
                'trekMar' => $this->trekModel->trekMar(),
                'trekApr' => $this->trekModel->trekApr(),
                'trekMei' => $this->trekModel->trekMei(),
                'trekJun' => $this->trekModel->trekJun(),
                'trekJul' => $this->trekModel->trekJul(),
                'trekAgus' => $this->trekModel->trekAgus(),
                'trekSep' => $this->trekModel->trekSep(),
                'trekOkt' => $this->trekModel->trekOkt(),
                'trekNov' => $this->trekModel->trekNov(),
                'trekDes' => $this->trekModel->trekDes(),
            ];
            return view('pages/home', $data);
        } elseif (in_groups('teknisi')) {
            $data = [
                'title' => 'Garuda CRM | Teknisi',
                'hasilkeluhanInTek' => $this->keluhanModel->sumkelInTek(),
                'hasilkeluhanDoneTek' => $this->keluhanModel->sumkelDoneTek(),
                'getJan' => $this->keluhanModel->GetJanTek(),
                'getFeb' => $this->keluhanModel->GetFebTek(),
                'getMar' => $this->keluhanModel->GetMarTek(),
                'getApr' => $this->keluhanModel->GetAprTek(),
                'getMei' => $this->keluhanModel->GetMeiTek(),
                'getJun' => $this->keluhanModel->GetJunTek(),
                'getJul' => $this->keluhanModel->GetJulTek(),
                'getAgus' => $this->keluhanModel->GetAgusTek(),
                'getSep' => $this->keluhanModel->GetSepTek(),
                'getOkt' => $this->keluhanModel->GetOktTek(),
                'getNov' => $this->keluhanModel->GetNovTek(),
                'getDes' => $this->keluhanModel->GetDesTek(),
            ];
            return view('pages/teknisi', $data);
        } else {
            return view('home/index');
        }
    }

    public function hasiltrek()
    {
        if (!logged_in()) {
            $kode_p = $this->request->getVar('kode_p');
            if ($kode_p === '') {
                return redirect()->to('/');
            }
            $data = [
                'title' => 'Hasil Trek',
                'hasiltrek' => $this->trekModel->getHasil($kode_p),
                'kode_p' => $kode_p
            ];

            return view('home/hasiltrek', $data);
        } else {
            return redirect()->back();
        }
    }
}
