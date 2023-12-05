@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Restoran {{ $restoran->Nama_Cafe }}</div>
                    <div class="card-body">

                        <a href="{{ url('/Restoran/restoran') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/Restoran/restoran/' . $restoran->id . '/edit') }}" title="Edit Restoran"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('Restoran/restoran' . '/' . $restoran->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Restoran" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $restoran->id }}</td>
                                    </tr>
                                    <tr><th> Cafe </th><td> {{ $restoran->Nama_Cafe }} </td></tr><tr><th> Alamat </th><td> {{ $restoran->Alamat }} </td></tr><tr><th> Rating </th><td> {{ $restoran->Rating }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
