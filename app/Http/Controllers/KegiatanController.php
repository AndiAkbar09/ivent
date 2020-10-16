<?php

namespace App\Http\Controllers;

use App\Kegiatan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class KegiatanController extends Controller
{

    
    public function __construct()

    {
        $this->kegiatan = new Kegiatan();
    }

    public function index()
    {   
        $kegiatans = Kegiatan::all();
        
        return view('backend.kegiatan.index', compact('kegiatans'));
    }
    
    public function create()
    {
        $getkode = $this->kegiatan->generateCode();
        
        return view('backend.kegiatan.create', compact('getkode'));
        
    }

    public function store()
    {
        $kegiatan = Kegiatan::create($this->validateRequest());
        $this->storeImage($kegiatan);
        return redirect()->back()->with(['success' => 'Kegiatan berhasil dibuat']);
    }
        private function validateRequest(){
            return tap(request()->validate([
                'kode_kegiatan'     => 'required',
                'nama_kegiatan'     => 'required',
                'tanggal'           => 'required',
                'keterangan'        => 'required',
                'status_kegiatan'   => 'required',
                'harga_tiket'       => 'required',
                'images'            => 'file|image|max:5000',
                'kapasitas'         => 'required',
            ]), function(){
                if(request()->hasFile('images')){
                    request()->validate([
                        'images'  => 'file|image|max:5000',
                    ]);
                }
            }); 
        }

        private function storeImage($kegiatan){
            if(request()->has('images')){
                $kegiatan->update([
                    'images' => request()->images->store('uploads','public'),
                ]);
                $image = Image::make(public_path('storage/'. $kegiatan->images))->fit(300,300,null, 'top-left');
                $image->save();
            }
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
