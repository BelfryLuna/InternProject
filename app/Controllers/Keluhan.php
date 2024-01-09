<?php 

namespace App\Controllers;
use App\Models\KeluhanModel;
use App\Models\TrekModel;

class Keluhan extends BaseController
{
    protected $KeluhanModel;
    protected $TrekModel;
    public function __construct()
    {
        $this->KeluhanModel = new KeluhanModel();
        $this->TrekModel = new TrekModel();
    }
    public function index()
    {
if (in_groups('admin')) {
    $data = [
        'title' => 'Garuda CRM | Daftar Keluhan',
        'keluhan' => $this->KeluhanModel->getKeluhan()
    ];
    return view('keluhan/index', $data);
}else{
    $data = [
        'title' => 'Daftar Keluhan',
        'keluhan' => $this->KeluhanModel->getKelTeknisi()
    ];
    return view('keluhan/index', $data);
}

       
    }

    public function tambahkeluhan()
    {
        if (in_groups('admin')) {
            $data = [
                'title' => 'Garuda CRM | Tambah Keluhan',
                'teknisi' => $this->TrekModel->getTeknisi(),
            ];

            return view('keluhan/tambahkeluhan', $data);
        } else {
            return redirect()->back();
        }
      
    }

    public function save()
    {
        if (in_groups('admin')) {
            $this->KeluhanModel->save([
                'klien' => $this->request->getVar('klien'),
                'tanggal' => $this->request->getVar('tanggal'),
                'keluhan' => $this->request->getVar('keluhan'),
                'teknisi' => $this->request->getVar('teknisi'),
                'tanggapan' => $this->request->getVar('tanggapan'),
                'prioritas' => $this->request->getVar('prioritas'),
                'progres' => $this->request->getVar('progres'),
                'keterangan' => $this->request->getVar('keterangan')
            ]);

            session()->setFlashdata('pesan', 'Data Keluhan berhasil ditambahkan');

            return redirect()->to('/keluhan');
        } else {
            return redirect()->back();
        }
    
    }

    public function edit($id) 
    {
        if(logged_in()) {
        $data = [
            'title' => 'Garuda CRM | Update Data Keluhan',
            'Keluhan' => $this->KeluhanModel->getKeluhan($id)
        ];
        return view('Keluhan/updatekeluhan', $data);
    } else {
        return redirect()->back();
    }
    }

    public function update($id) 
    {
        if (in_groups('admin')) {
            $this->KeluhanModel->save([
                'id' => $id,
                'klien' => $this->request->getVar('klien'),
                'tanggal' => $this->request->getVar('tanggal'),
                'keluhan' => $this->request->getVar('keluhan'),
                'teknisi' => $this->request->getVar('teknisi'),
                'tanggapan' => $this->request->getVar('tanggapan'),
                'prioritas' => $this->request->getVar('prioritas'),
                'progres' => $this->request->getVar('progres'),
                'keterangan' => $this->request->getVar('keterangan')
            ]);

            session()->setFlashdata('pesan', 'Data Keluhan berhasil diupdate');

            return redirect()->to('/keluhan');
        } elseif (in_groups('teknisi')) {
            $this->KeluhanModel->save([
                'id' => $id,
                'klien' => $this->request->getVar('klien'),
                'tanggal' => $this->request->getVar('tanggal'),
                'keluhan' => $this->request->getVar('keluhan'),
                // 'teknisi' => $this->request->getVar('teknisi'),
                'tanggapan' => $this->request->getVar('tanggapan'),
                // 'prioritas' => $this->request->getVar('prioritas'),
                'progres' => $this->request->getVar('progres'),
                'keterangan' => $this->request->getVar('keterangan')
            ]);

            session()->setFlashdata('pesan', 'Data Keluhan berhasil diupdate');

            return redirect()->to('/keluhan');
        } else {
            return redirect()->back();
        }
    }

    public function delete($id)
    {
            if(in_groups('admin')) {
                $this->KeluhanModel->delete($id);

                session()->setFlashdata('pesan', 'Data Keluhan berhasil dihapus');

                return redirect()->to('/Keluhan');
            } else {
                return redirect()->back();
            }   
    }
}

?>