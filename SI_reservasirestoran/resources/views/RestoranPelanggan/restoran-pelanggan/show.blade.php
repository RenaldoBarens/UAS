@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row">
        

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">RestoranPelanggan {{ $restoranpelanggan->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/RestoranPelanggan/restoran-pelanggan') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/RestoranPelanggan/restoran-pelanggan/' . $restoranpelanggan->id . '/edit') }}" title="Edit RestoranPelanggan"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('RestoranPelanggan/restoranpelanggan' . '/' . $restoranpelanggan->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete RestoranPelanggan" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $restoranpelanggan->id }}</td>
                                    </tr>
                                    <tr><th> Nama Cafe </th><td> {{ $restoranpelanggan->Nama_Cafe }} </td></tr><tr><th> Alamat </th><td> {{ $restoranpelanggan->Alamat }} </td></tr><tr><th> Rating </th><td> {{ $restoranpelanggan->Rating }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
