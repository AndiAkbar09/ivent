@extends ('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item active" aria-current="page">
                    <li class="badge badge-info"> Active Activity </li>
                </li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="d-flex">
                            <div>
                                <img src="{{asset('img/launch.png')}}" class="rounded-circle" width="100" height="90" alt="">
                            </div>
                            <div>
                                <h3> Emergency </h3>
                                    <p> Kegiatan sedang berlansung.... </p>
                                <button type="submit" class="btn btn-outline-primary"> ACTIVE </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="d-flex">
                            <div>
                                <img src="{{asset('img/launch.png')}}" class="rounded-circle" width="100" height="90" alt="">
                            </div>
                            <div>
                                <h3> Emergency </h3>
                                    <p> Kegiatan sedang berlansung.... </p>
                                <button type="submit" class="btn btn-outline-primary"> ACTIVE </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection