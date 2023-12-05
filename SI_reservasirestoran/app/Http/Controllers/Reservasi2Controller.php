<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restoran;
use App\Models\Reservasi2;


class Reservasi2Controller extends Controller
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

        return view('ListReservasi', compact('reservasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('RestoranPelanggan.restoran-pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Reservasi2::create($requestData);

        return redirect('RestoranPelanggan/restoran-pelanggan')->with('flash_message', 'RestoranPelanggan added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $reservasi = Reservasi2::findOrFail($id);

        return view('DetailReservasi', compact('reservasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $restoranpelanggan = Restoran::findOrFail($id);

        return view('RestoranPelanggan.restoran-pelanggan.reservasi', compact('restoranpelanggan'));
    }

    public function history($id)
    {
        $reservasi = Reservasi2::all();
        $reservasi2 = Reservasi2::findOrFail($id);
        $reservasi2->update(['Status'=>1]);
        return view('ListReservasi', compact('reservasi'));
        // return view('RestoranPelanggan.restoran-pelanggan.history', compact('reservasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $restoranpelanggan = Restoran::findOrFail($id);
        $restoranpelanggan->update($requestData);

        return redirect('RestoranPelanggan/restoran-pelanggan')->with('flash_message', 'RestoranPelanggan updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        RestoranPelanggan::destroy($id);

        return redirect('RestoranPelanggan/restoran-pelanggan')->with('flash_message', 'RestoranPelanggan deleted!');
    }
}
