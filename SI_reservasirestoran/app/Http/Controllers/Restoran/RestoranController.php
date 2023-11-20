<?php

namespace App\Http\Controllers\Restoran;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Restoran;
use Illuminate\Http\Request;

class RestoranController extends Controller
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
            $restoran = Restoran::where('Nama_Cafe', 'LIKE', "%$keyword%")
                ->orWhere('Alamat', 'LIKE', "%$keyword%")
                ->orWhere('Rating', 'LIKE', "%$keyword%")
                ->orWhere('Tipe_Restoran', 'LIKE', "%$keyword%")
                ->orWhere('Jarak', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $restoran = Restoran::latest()->paginate($perPage);
        }

        return view('Restoran.restoran.index', compact('restoran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('Restoran.restoran.create');
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
        
        Restoran::create($requestData);

        return redirect('Restoran/restoran')->with('flash_message', 'Restoran added!');
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
        $restoran = Restoran::findOrFail($id);

        return view('Restoran.restoran.show', compact('restoran'));
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
        $restoran = Restoran::findOrFail($id);

        return view('Restoran.restoran.edit', compact('restoran'));
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
        
        $restoran = Restoran::findOrFail($id);
        $restoran->update($requestData);

        return redirect('Restoran/restoran')->with('flash_message', 'Restoran updated!');
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
        Restoran::destroy($id);

        return redirect('Restoran/restoran')->with('flash_message', 'Restoran deleted!');
    }
}
