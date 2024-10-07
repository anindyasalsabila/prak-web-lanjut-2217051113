<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
{
    $data = [
        "nama" => 'Anindya Salsabila',
        "kelas" => 'B',
        "npm" => '2217051113',
    ];
 return view('profile', $data);
}
}