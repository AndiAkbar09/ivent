<?php

namespace App\Http\Controllers\Kegiatan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActifityController extends Controller
{
    public function index()
    {
        return view('users.kegiatan.index');
    }
}
