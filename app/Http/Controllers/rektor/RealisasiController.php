<?php

namespace App\Http\Controllers\rektor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RealisasiController extends Controller
{
    public function realisasi()
    {
        return view('Admin.rektor.realisasi');
    }
}
