<?php

namespace App\Http\Controllers;

use App\Http\Requests\WisataRequest;
use App\Models\Wisata;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wisata = Wisata::all();
        return $this->successResponseData('Data Wisata',$wisata);
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
    public function store(WisataRequest $request)
    {
        $request = $request->validated();
        Wisata::create($request);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Wisata $wisata)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wisata $wisata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wisata $wisata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wisata $wisata)
    {
        //
    }
}
