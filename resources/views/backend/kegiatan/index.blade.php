@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <a href="{{route('kegiatans.create')}}" class="btn btn-outline-primary">Tambah Kegiatan</a>
            </div>

            <div class="card border-0 shadow">
                <div class="px-3 py-3">
                    <h4 class="text muted">Master Kegiatan</h4>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Kode kegiatan</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kegiatans as $kegiatan)
                            <tr>
                                <td>
                                    <a href="{{route('kegiatans.formEdit')}}" class="btn btn-outline-primary btn-sm">{{$kegiatan->kode_kegiatan}}</a>
                                </td>
                                <td>{{$kegiatan->tanggal}}</td>
                                <td>{{$kegiatan->status_kegiatan}}</td>
                                <td>
                                    <img src="{{asset('storage/'.$kegiatan->images)}}" alt="" class="rounded-circle" weigth="10px" heigth="10px">    
                                </td>
                                <td>
                                    <a href="" class="btn btn-outline-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection