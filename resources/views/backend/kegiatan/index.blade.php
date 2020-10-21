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
                                <th>image</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kegiatans as $k)
                            <tr>
                                <td>
                                    <a href="{{route('kegiatans.formEdit', $k->id)}}" class="btn btn-outline-primary btn-sm">{{$k->kode_kegiatan}}</a>
                                </td>
                                <td>{{$k->tanggal}}</td>
                                <td>{{$k->status_kegiatan}}</td>
                                <td>
                                    <img src="{{asset('storage/'.$k->images)}}" alt="" class="rounded" width="50px   " heigth="10px ">    
                                </td>
                                <td>
                                    <form action="{{route('kegiatans.formDelete', $k->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm">Hapus</button>
                                    </form>
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