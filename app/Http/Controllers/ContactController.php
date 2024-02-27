<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contact',[
            'title' => 'Contact',
            'address1' => 'Jalan Pembangunan Raya',
            'address2' => 'Kompleks Pertokoan Emerald Blok III/12',
            'address3' => 'Bintaro, Tangerang Selatan',
            'address4' => 'Indonesia',
            'open' => '08.00 - 20.00',
            'phone' => '021-1122334455',
            'email' => 'happybookstore@happy.com'
        ]);
    }
}
