<?php

namespace App\Controllers;

class DevicesController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Device | Praktikum WEB"
        ];
        return view ('pages/devices', $data);        
    }
    
}