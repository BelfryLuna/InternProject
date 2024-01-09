<?php 

namespace App\Models;

use CodeIgniter\Model;

class KeluhanModel extends Model
{
    protected $table = 'keluhan';
    protected $id = 'id';
    protected $allowedFields = ['klien', 'tanggal', 'keluhan', 'teknisi', 'tanggapan', 'prioritas', 'progres', 'keterangan'];

    public function getKeluhan($id = false)
    {
        if ($id == false) {
            return $this->orderBy('prioritas')->findAll();
        }
    
        return $this->where(['id' => $id])->first();
    }

    public function getKelTeknisi(){
        return $this->where(['teknisi' => user()->username])->where(['keterangan' => 'Belum Selesai'])->findAll();
    }

    public function sumkelIn()
    {
        return $this->db->table('keluhan')->selectCount('id')->get()->getFirstRow();
    }

    public function sumkelDone()
    {
        return $this->selectCount('id')->where('keterangan !=', 'Belum Selesai')->get()->getFirstRow();
    }

    public function sumkelInTek()
    {
        return $this->db->table('keluhan')->selectCount('id')->where('teknisi', user()->username)->get()->getFirstRow();
    }

    public function sumkelDoneTek()
    {
        return $this->db->table('keluhan')->selectCount('id')->where('keterangan', 'Belum Selesai')->where('teknisi', user()->username)->get()->getFirstRow();
    }
   
    public function GetJan()
    {
        return $this->selectCount('id')->where('MONTH(tanggal)', '01')->where('YEAR(tanggal)', date('Y'))->first();
    }
    public function GetFeb()
    {
        return $this->selectCount('id')->where('MONTH(tanggal)', '02')->where('YEAR(tanggal)', date('Y'))->first();
    }
    public function GetMar()
    {
        return $this->selectCount('id')->where('MONTH(tanggal)', '03')->where('YEAR(tanggal)', date('Y'))->first();
    }
    public function GetApr()
    {
        return $this->selectCount('id')->where('MONTH(tanggal)', '04')->where('YEAR(tanggal)', date('Y'))->first();
    }
    public function GetMei()
    {
        return $this->selectCount('id')->where('MONTH(tanggal)', '05')->where('YEAR(tanggal)', date('Y'))->first();
    }
    public function GetJun()
    {
        return $this->selectCount('id')->where('MONTH(tanggal)', '06')->where('YEAR(tanggal)', date('Y'))->first();
    }
    public function GetJul()
    {
        return $this->selectCount('id')->where('MONTH(tanggal)', '07')->where('YEAR(tanggal)', date('Y'))->first();
    }
    public function GetAgus()
    {
        return $this->selectCount('id')->where('MONTH(tanggal)', '08')->where('YEAR(tanggal)', date('Y'))->first();
    }
    public function GetSep()
    {
        return $this->selectCount('id')->where('MONTH(tanggal)', '09')->where('YEAR(tanggal)', date('Y'))->first();
    }
    public function GetOkt()
    {
        return $this->selectCount('id')->where('MONTH(tanggal)', '10')->where('YEAR(tanggal)', date('Y'))->first();
    }
    public function GetNov()
    {
        return $this->selectCount('id')->where('MONTH(tanggal)', '11')->where('YEAR(tanggal)', date('Y'))->first();
    }
    public function GetDes()
    {
        return $this->selectCount('id')->where('MONTH(tanggal)', '12')->where('YEAR(tanggal)', date('Y'))->first();
    }

    public function GetJanTek()
    {
        return $this->selectCount('id')->where('MONTH(tanggal)', '01')->where('YEAR(tanggal)', date('Y'))->where('teknisi', user()->username)->first();
    }   
    public function GetFebTek()
    {
        return $this->selectCount('id')->where('MONTH(tanggal)', '02')->where('YEAR(tanggal)', date('Y'))->where('teknisi', user()->username)->first();
    }   
    public function GetMarTek()
    {
        return $this->selectCount('id')->where('MONTH(tanggal)', '03')->where('YEAR(tanggal)', date('Y'))->where('teknisi', user()->username)->first();
    }   
    public function GetAprTek()
    {
        return $this->selectCount('id')->where('MONTH(tanggal)', '04')->where('YEAR(tanggal)', date('Y'))->where('teknisi', user()->username)->first();
    }   
    public function GetMeiTek()
    {
        return $this->selectCount('id')->where('MONTH(tanggal)', '05')->where('YEAR(tanggal)', date('Y'))->where('teknisi', user()->username)->first();
    }   
    public function GetJunTek()
    {
        return $this->selectCount('id')->where('MONTH(tanggal)', '06')->where('YEAR(tanggal)', date('Y'))->where('teknisi', user()->username)->first();
    }   
    public function GetJulTek()
    {
        return $this->selectCount('id')->where('MONTH(tanggal)', '07')->where('YEAR(tanggal)', date('Y'))->where('teknisi', user()->username)->first();
    }   
    public function GetAgusTek()
    {
        return $this->selectCount('id')->where('MONTH(tanggal)', '08')->where('YEAR(tanggal)', date('Y'))->where('teknisi', user()->username)->first();
    }   
    public function GetSepTek()
    {
        return $this->selectCount('id')->where('MONTH(tanggal)', '09')->where('YEAR(tanggal)', date('Y'))->where('teknisi', user()->username)->first();
    }   
    public function GetOktTek()
    {
        return $this->selectCount('id')->where('MONTH(tanggal)', '10')->where('YEAR(tanggal)', date('Y'))->where('teknisi', user()->username)->first();
    }   
    public function GetNovTek()
    {
        return $this->selectCount('id')->where('MONTH(tanggal)', '11')->where('YEAR(tanggal)', date('Y'))->where('teknisi', user()->username)->first();
    }   
    public function GetDesTek()
    {
        return $this->selectCount('id')->where('MONTH(tanggal)', '12')->where('YEAR(tanggal)', date('Y'))->where('teknisi', user()->username)->first();
    }   

}
