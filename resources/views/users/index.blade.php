@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center d-flex">
        <div class="col-md-10">
            <div class="card border-0">
                <div class="card-body">
                    <div class="mb-2 pt-2">
                        <a href="" class="btn btn-outline-info">Tambahkan User Baru</a>
                    </div>
                    <div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Aku Siapa</td>
                                    <td>akusiapa@gmail.com</td>
                                    <td>Siswa</td>
                                    <td>
                                        <form action="">
                                            <a href="" class="btn btn-outline-info">Lihat</a>
                                            <button class="btn btn-outline-danger">Hapus</button>
                                        </form>
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