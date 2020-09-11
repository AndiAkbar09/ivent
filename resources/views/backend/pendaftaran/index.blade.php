@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="d-flex px-2 py-2">
                        <div>
                            <a href="{{route('pendaftarans.create')}}" class="btn btn-outline-primary">Pendaftaran</a>
                        </div>
                    </div>
                    <div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Pendaftaran</th>
                                    <th>Kode Kegiatan</th>
                                    <th>Nama</th>
                                    <th>Tanggal Daftar</th>
                                    <th>Status</th>
                                    <th>Option</th>
                                </tr>        
                            </thead>
                            <tbody>
                                <tr>
                                    <td>464646</td>
                                    <td>696969</td>
                                    <td>SP Y</td>
                                    <td>11-09-2011</td>
                                    <td>y</td>
                                    <td>
                                        <a href="" class="btn btn-outline-info">Lihat</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>            
            </div>
        </div>
    </div>
</div>
@endsection