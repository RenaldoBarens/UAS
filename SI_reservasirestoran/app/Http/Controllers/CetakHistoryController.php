<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi2;
use PDF;

class CetakHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $reservasi = Reservasi2::all();
        return view('Report/HistoryReport', ['reservasi'=>$reservasi]);
    }

    public function cetak_history()
    {
        //
        $reservasi = Reservasi2::all();
        $pdf = PDF::loadview('Report/HistoryReport', ['reservasi'=>$reservasi])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('laporan-history.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
