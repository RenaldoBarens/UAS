<?php

namespace App\Http\Controllers\RestoranPelanggan;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\RestoranPelanggan;
use Illuminate\Http\Request;

class RestoranPelangganController extends Controller
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
            $restoranpelanggan = RestoranPelanggan::where('Nama_Cafe', 'LIKE', "%$keyword%")
                ->orWhere('Alamat', 'LIKE', "%$keyword%")
                ->orWhere('Rating', 'LIKE', "%$keyword%")
                ->orWhere('Tipe_Restoran', 'LIKE', "%$keyword%")
                ->orWhere('Jarak', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $restoranpelanggan = RestoranPelanggan::latest()->paginate($perPage);
        }

        return view('RestoranPelanggan.restoran-pelanggan.index', compact('restoranpelanggan'));
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
        
        RestoranPelanggan::create($requestData);

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
        $restoranpelanggan = RestoranPelanggan::findOrFail($id);

        return view('RestoranPelanggan.restoran-pelanggan.show', compact('restoranpelanggan'));
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
        $restoranpelanggan = RestoranPelanggan::findOrFail($id);

        return view('RestoranPelanggan.restoran-pelanggan.edit', compact('restoranpelanggan'));
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
        
        $restoranpelanggan = RestoranPelanggan::findOrFail($id);
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
