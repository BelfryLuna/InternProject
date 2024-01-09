<?php 

namespace App\Controllers;
use App\Models\TrekModel;

class trek extends BaseController
{
    
    protected $TrekModel;
    public function __construct()
    {
        $this->TrekModel = new TrekModel();
    }
    
    public function index()
    {
        if (in_groups('admin')) {
            $data = [
                'title' => 'Garuda CRM | Daftar Tracking',
                'trek' => $this->TrekModel->getTrek()
            ];
            return view('tracking/index', $data);
        }else{
            return redirect()->back();
        }
       
    }

    public function tambahtrek()
    {
        if (logged_in()) {
$data = [
    'title' => 'GAruda CRM | Tambah Data Aplikasi'
];
            return view('tracking/tambahtrek', $data);
        } else {
            return redirect()->back();
        }
      
    }

    public function save()
    {
        if (logged_in()) {
            $klien = $this->request->getVar('klien');
            $apk = $this->request->getVar('apk');

            $double = $this->TrekModel->doubletrek($klien, $apk);
            if ($double == []) {
                $same_kode = 0;
                $same_klien = 0;
                $same_apk = 0;
            } else {
                foreach ($double as $s) :
                    $same_kode = $s['kode_p'];
                    $same_klien = $s['klien'];
                    $same_apk = $s['apk'];
                endforeach;
            }
            if ($klien === $same_klien && $apk === $same_apk) {
                $kode = $same_kode;
            } else {
                $kode =  $this->TrekModel->getKodeK();
            }
            $this->TrekModel->save([
                'kode_p' => $kode,
                'klien' => $klien,
                'tanggal' => $this->request->getVar('tanggal'),
                'apk' => $apk,
                'proses' => $this->request->getVar('proses'),
                'progres' => $this->request->getVar('progres'),
                'status' => $this->request->getVar('status')
            ]);

            session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

            return redirect()->to('/trek');
        } else {
            return redirect()->back();
        }
    
    }

    public function delete($id)
    {
        if (logged_in()) {
            $Trek = $this->TrekModel->find($id);

            $this->TrekModel->delete($id);
            session()->setFlashdata('pesan', 'Data berhasil dihapus');
            return redirect()->to('/Trek');
        } else {
            return redirect()->back();
        }
        
    }

    
}
