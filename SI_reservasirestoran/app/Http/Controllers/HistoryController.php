<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi2;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;
        
        if (!empty($keyword)) {
            $reservasi = Reservasi2::where('Nama_Cafe', 'LIKE', "%$keyword%")
                ->orWhere('Alamat', 'LIKE', "%$keyword%")
                ->orWhere('Tanggal_Reservasi', 'LIKE', "%$keyword%")
                ->orWhere('Jam', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $reservasi = Reservasi2::latest()->paginate($perPage);
        }

        return view('ListHistory', compact('reservasi'));
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
