<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelaporanController extends Controller
{
    public function pelaporan()
    {
        return view('Admin.fakultas.pelaporan');
    }
}
