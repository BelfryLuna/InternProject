<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        if (logged_in()) {
          // return view('welcome_message');
        // untuk mebuat title pada web
        // jgn lupa tambahkan variabelnya
        return view('pages/home');
        } else {
            return redirect()->back();
        }
        
    }

}
