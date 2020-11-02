<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body>
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-teal-900 border-bottom">
            <h3 class="my-0 mr-md-auto font-weigth-normal">
                Event 
            </h3>
            <nav class="my-2 my-md-0 mr-md-3">
                <a href="" class="p-2 text-dark">Login</a>
                <a href="" class="p-2 text-dark">Register</a>
            </nav>
        </div>  
        <div class="nav-scroller bg-white shadow-sm">
            <nav class="nav nav-underline ml-4 py-2">
                <a href="" class="nav-link">
                    <h6 class="text-muted ">Home</h6>
                </a>
                <a href="{{route('cek-kegiatan')}}" class="nav-link">
                    <h6 class="text-muted">Kegiatan</h6>
                </a>
                <a href="" class="nav-link">
                    <h6 class="text-muted">Daftar</h6>
                </a>
            </nav>
        </div>  

        <div class="jumbotron" style="background-image: url('img/empty.png')">
            <div class="container">
                <h3 class="text-center">APLIKASI MANAGEMENT KEGIATAN</h3>
                <h1 class="display-3 text-center">ABV</h1>
            </div>
        </div>
        
        <div class="container py-3">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb bg-white justify-content-center">
                    <li class="breadcrumb-item active" aria-current="page">
                        HOME
                    </li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm">
                                    <img src="{{asset('img/relaunch.png')}}"  alt="" class="card-img-top">
                                <div class="card-body">
                                    <h3>Manage Event</h3>
                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm">
                                    <img src="{{asset('img/data.png')}}"  alt="" class="card-img-top">
                                <div class="card-body">
                                    <h3>Manage Register</h3>
                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm">
                                    <img src="{{asset('img/folio.png')}}"  alt="" class="card-img-top">
                                <div class="card-body">
                                    <h3>Schedule Event</h3>
                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    

        <div class="container py-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white d-flex justify-content-center">
                    <li class="breadcrumb-item active" aria-current="page">
                        KEGIATAN
                    </li>
                </ol>
            </nav>
        
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="d-flex justify-content-center">
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm">
                                <img src="{{asset('img/relaunch.png')}}"  alt="" class="card-img-top">
                                <div class="card-body">
                                    <h3>Manage Event</h3>
                                    <p> Kegiatan sedang berlansung.... </p>
                                    <button type="submit" class="btn btn-outline-primary">
                                        ACTIVE
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm">
                                <img src="{{asset('img/launch.png')}}"  alt="" class="card-img-top">
                                <div class="card-body">
                                    <h3>Manage Event</h3>
                                    <p> Soon... </p>
                                    <button class="btn btn-outline-success" disabled>
                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                        NON ACTIVE
                                    </button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>
