<?php

namespace App\Http\Controllers\Pendaftaran;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('backend.pendaftaran.index');
    }
    
    public function create()
    {
        return view('backend.pendaftaran.create');
    }
}
