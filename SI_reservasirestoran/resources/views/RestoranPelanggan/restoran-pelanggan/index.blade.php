@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row">
           

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Restoranpelanggan</div>
                    <div class="card-body">
                        {{-- <a href="{{ url('/RestoranPelanggan/restoran-pelanggan/create') }}" class="btn btn-success btn-sm" title="Add New RestoranPelanggan">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a> --}}

                        <form method="GET" action="{{ url('/RestoranPelanggan/restoran-pelanggan') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Nama Cafe</th><th>Alamat</th><th>Rating</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($restoranpelanggan as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>                                            
                                            <div class="info">
                                                {{ $item->Nama_Cafe }}    
                                            </div>
                                        </td>
                                        <td>{{ $item->Alamat }}</td><td>{{ $item->Rating }}</td>
                                        <td>
                                            <a href="{{ url('/RestoranPelanggan/restoran-pelanggan/' . $item->id) }}" title="View RestoranPelanggan"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Detail </button></a>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $restoranpelanggan->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
