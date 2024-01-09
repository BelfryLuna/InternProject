<?php

namespace App\Models;

use CodeIgniter\Model;

class TrekModel extends Model
{
    protected $returnType = 'array';
    protected $table = 'trek';
    protected $id = 'id';
    // protected $useTimestamps = true;
    protected $allowedFields = ['kode_p', 'klien', 'tanggal', 'apk', 'proses', 'progres', 'status'];
    // protected $createdField = 'Created_at';
    // protected $updatedField = 'Updated_at';


    public function getTrek($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function getKodeK()
    {
        $kode = $this->db->table('trek')->select('RIGHT(id,4) as id', false)->orderBy('id', 'DESC')->limit(1)->get()->getRowArray();

        if ($kode['id'] ?? []) {
            $no = intval($kode['id']) + 1;
        } else {
            $no = 1;
        }

        $tgl = date('Ymd');
        $batas = str_pad($no, 4, "0", STR_PAD_LEFT);
        $kodeK = $tgl . $batas;
        return $kodeK;
    }

    public function doubletrek($klien, $apk)
    {
        $builder = $this->db->table('trek')->select('klien')->where('klien', $klien);
        $where2 = $builder->select('apk')->where('apk', $apk);
        $where3 = $where2->select('kode_p')->where('klien', $klien);
        $where4 = $where3->select('kode_p')->where('apk', $apk);
        $data = $where4->get();
        $query = $data->getResultArray();
        return $query;
    }

    public function getHasil($kode_p)
    {
        $builder = $this->db->table('trek')->select('*')->where('kode_p', $kode_p)->orderBy('id');
        $data = $builder->get();
        return $data->getResultArray();
    }

    public function getTeknisi()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, username, name as role, group_id');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $where = $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $where1 = $where->where('name', 'Teknisi');
        $query = $where1->get();
        $data = $query->getResultArray();
 
        return $data;
    }
    // untuk ngitung trek masuk dan keluhan masuk
    public function sumtrekIn()
    {
        $query = "SELECT COUNT(DISTINCT kode_p) FROM trek";
        return $this->db->query($query)->getResultArray();
    }
    // belum seesai dan ngerti
    public function sumappIn()
    {
        $query = "SELECT COUNT(DISTINCT kode_p) FROM trek WHERE STATUS = 'Aplikasi Sudah Selesai'";
        return $this->db->query($query)->getResultArray();
    }

    public function trekJan()
    {
        $year = date('Y');
        $query = "SELECT COUNT(DISTINCT kode_p) FROM trek WHERE MONTH(TANGGAL) = '01' AND YEAR(TANGGAL) = $year";
        return $this->db->query($query)->getResultArray();
    }

    public function trekFeb()
    {
        $year = date('Y');
        $query = "SELECT COUNT(DISTINCT kode_p) FROM trek WHERE MONTH(TANGGAL) = '02' AND YEAR(TANGGAL) = $year";
        return $this->db->query($query)->getResultArray();
    }

    public function trekMar()
    {
        $year = date('Y');
        $query = "SELECT COUNT(DISTINCT kode_p) FROM trek WHERE MONTH(TANGGAL) = '03' AND YEAR(TANGGAL) = $year";
        return $this->db->query($query)->getResultArray();
    }

    public function trekApr()
    {
        $year = date('Y');
        $query = "SELECT COUNT(DISTINCT kode_p) FROM trek WHERE MONTH(TANGGAL) = '04' AND YEAR(TANGGAL) = $year";
        return $this->db->query($query)->getResultArray();
    }

    public function trekMei()
    {
        $year = date('Y');
        $query = "SELECT COUNT(DISTINCT kode_p) FROM trek WHERE MONTH(TANGGAL) = '05' AND YEAR(TANGGAL) = $year";
        return $this->db->query($query)->getResultArray();
    }

    public function trekJun()
    {
        $year = date('Y');
        $query = "SELECT COUNT(DISTINCT kode_p) FROM trek WHERE MONTH(TANGGAL) = '06' AND YEAR(TANGGAL) = $year";
        return $this->db->query($query)->getResultArray();
    }

    public function trekJul()
    {
        $year = date('Y');
        $query = "SELECT COUNT(DISTINCT kode_p) FROM trek WHERE MONTH(TANGGAL) = '07' AND YEAR(TANGGAL) = $year";
        return $this->db->query($query)->getResultArray();
    }

    public function trekAgus()
    {
        $year = date('Y');
        $query = "SELECT COUNT(DISTINCT kode_p) FROM trek WHERE MONTH(TANGGAL) = '08' AND YEAR(TANGGAL) = $year";
        return $this->db->query($query)->getResultArray();
    }

    public function trekSep()
    {
        $year = date('Y');
        $query = "SELECT COUNT(DISTINCT kode_p) FROM trek WHERE MONTH(TANGGAL) = '09' AND YEAR(TANGGAL) = $year";
        return $this->db->query($query)->getResultArray();
    }

    public function trekOkt()
    {
        $year = date('Y');
        $query = "SELECT COUNT(DISTINCT kode_p) FROM trek WHERE MONTH(TANGGAL) = '10' AND YEAR(TANGGAL) = $year";
        return $this->db->query($query)->getResultArray();
    }

    public function trekNov()
    {
        $year = date('Y');
        $query = "SELECT COUNT(DISTINCT kode_p) FROM trek WHERE MONTH(TANGGAL) = '11' AND YEAR(TANGGAL) = $year";
        return $this->db->query($query)->getResultArray();
    }

    public function trekDes()
    {
        $year = date('Y');
        $query = "SELECT COUNT(DISTINCT kode_p) FROM trek WHERE MONTH(TANGGAL) = '12' AND YEAR(TANGGAL) = $year";
        return $this->db->query($query)->getResultArray();
    }
}
