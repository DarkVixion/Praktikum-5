<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Home | Praktikum WEB"
        ];
        
        return view ('pages/home', $data);
        
        
    }
    
}