@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row">
           

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Cetak History Reservasi</div>
                    <div class="card-body">
                        <a href="{{ url('/Report/Cetak') }}" class="btn btn-success btn-sm" title="Cetak PDF">
                            <i class="fa fa-plus" aria-hidden="true"></i> Cetak Sebagai PDF
                        </a><br><br>
                        {{-- <a href="{{ url('/RestoranPelanggan/restoran-pelanggan/create') }}" class="btn btn-success btn-sm" title="Add New RestoranPelanggan">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a> --}}
                        
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
