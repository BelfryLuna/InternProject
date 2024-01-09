<?php

namespace App\Models;

use CodeIgniter\Model;

class NovelModel extends Model
{
    protected $table = 'novel';
    protected $useTimestamps = true;
    protected $allowedFields = ['Judul', 'slug', 'Penulis', 'Penerbit', 'Cover'];
    // protected $createdField = 'Created_at';
    // protected $updatedField = 'Updated_at';


    public function getNovel($slug = false)
    {
        if($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}