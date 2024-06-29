<?php 

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Form Kuisioner'
        ];

        return view('home', $data);
    }

}
