@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row">
        

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Detail Reservasi {{ $reservasi->Nama_Cafe }}</div>
                    <div class="card-body">                        
                        <a href="{{ url('/Reservasi') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        {{-- <a href="{{ url('/RestoranPelanggan/restoran-pelanggan/' . $restoranpelanggan->id . '/edit') }}" title="Edit RestoranPelanggan"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('RestoranPelanggan/restoranpelanggan' . '/' . $restoranpelanggan->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete RestoranPelanggan" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form> --}}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $reservasi->id }}</td>
                                    </tr>
                                    <tr><th> Nama Cafe </th><td> {{ $reservasi->Nama_Cafe }} </td></tr><tr><th> Alamat </th><td> {{ $reservasi->Alamat }} </td></tr>
                                    <tr><th> Tanggal </th><td> {{ $reservasi->Tanggal_Reservasi }} </td></tr>
                                    <tr><th> Jam </th><td> {{ $reservasi->Jam }} </td></tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="{{ url('/Finish/' . $reservasi->id ) }}" class="btn btn-success btn-sm" title="Add New Reservasi">
                            <i class="fa fa" aria-hidden="true"></i> Finish Order
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
