<?php 

namespace App\Controllers;

use App\Models\TrekModel;

class Teknisi extends BaseController
{
    public function index()
    {
        if (logged_in()) {
            return view('teknisi/home');
        } else {
            return view('home/index');
        }
    }
}

?>