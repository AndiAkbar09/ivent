<?php

namespace App\Http\Controllers;

use App\Kegiatan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{

    public $kegiatan;

    public function __construct()

    {
        $this->kegiatan = new Kegiatan();
    }

    public function index()
    {   
        
        dd($this->kegiatan->generateCode());
        // return view('backend.kegiatan.index');
    }

   public function create()
    {
        return view('backend.kegiatan.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit()
    {
        return view('backend.kegiatan.edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
