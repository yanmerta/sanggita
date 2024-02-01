<?php

namespace App\Http\Controllers\rektor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersetujuanController extends Controller
{
    public function persetujuan()
    {
        return view('Admin.rektor.persetujuan');
    }
}
