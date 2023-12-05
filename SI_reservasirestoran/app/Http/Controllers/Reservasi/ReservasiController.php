<?php

namespace App\Http\Controllers\Reservasi;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $reservasi = Reservasi::where('Nama_Cafe', 'LIKE', "%$keyword%")
                ->orWhere('Alamat', 'LIKE', "%$keyword%")
                ->orWhere('Tanggal_Reservasi', 'LIKE', "%$keyword%")
                ->orWhere('Jam', 'LIKE', "%$keyword%")
                ->orWhere('Status', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $reservasi = Reservasi::latest()->paginate($perPage);
        }

        return view('Reservasi.reservasi.index', compact('reservasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('Reservasi.reservasi.create');
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
        
        Reservasi::create($requestData);

        return redirect('Reservasi/reservasi')->with('flash_message', 'Reservasi added!');
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
        $reservasi = Reservasi::findOrFail($id);

        return view('Reservasi.reservasi.show', compact('reservasi'));
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
        $reservasi = Reservasi::findOrFail($id);

        return view('Reservasi.reservasi.edit', compact('reservasi'));
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
        
        $reservasi = Reservasi::findOrFail($id);
        $reservasi->update($requestData);

        return redirect('Reservasi/reservasi')->with('flash_message', 'Reservasi updated!');
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
        Reservasi::destroy($id);

        return redirect('Reservasi/reservasi')->with('flash_message', 'Reservasi deleted!');
    }
}
