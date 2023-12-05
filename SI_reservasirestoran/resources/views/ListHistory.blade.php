@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row">
           

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">History Reservasi Completed</div>
                    <div class="card-body">                        
                        {{-- <a href="{{ url('/RestoranPelanggan/restoran-pelanggan/create') }}" class="btn btn-success btn-sm" title="Add New RestoranPelanggan">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a> --}}
                        
                        <form method="GET" action="{{ url('/History') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                        <br>

                        <div class="table-responsive">
                            
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Nama Cafe</th><th>Alamat</th><th>Tanggal Reservasi</th><th>Jam</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $nomor = 0;
                                    @endphp
                                    @foreach($reservasi as $item)
                                        @if($item->Status === 1)
                                        <tr>
                                            @php
                                                $nomor = $nomor + 1;
                                            @endphp
                                            <td>{{ $nomor }}</td>
                                            <td>                                            
                                                <div class="info">
                                                    {{ $item->Nama_Cafe }}    
                                                </div>
                                            </td>
                                            <td>{{ $item->Alamat }}</td><td>{{ $item->Tanggal_Reservasi }}</td><td>{{ $item->Jam }}</td>
                                                                                        
                                        </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- <div class="pagination-wrapper"> {!! $restoranpelanggan->appends(['search' => Request::get('search')])->render() !!} </div> --}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
