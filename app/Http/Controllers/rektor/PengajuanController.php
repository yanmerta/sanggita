<?php

namespace App\Http\Controllers\rektor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    
    public function pengajuan()
    {
        return view('Admin.rektor.pengajuan');
    }
}
