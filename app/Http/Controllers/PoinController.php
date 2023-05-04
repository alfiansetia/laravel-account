<?php

namespace App\Http\Controllers;

use App\Models\Poin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data  = Poin::select('nasabah_id', DB::raw('SUM(amount) as total'))->groupBy('nasabah_id')->get();
        return view('poin.data', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Poin  $poin
     * @return \Illuminate\Http\Response
     */
    public function show(Poin $poin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Poin  $poin
     * @return \Illuminate\Http\Response
     */
    public function edit(Poin $poin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Poin  $poin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poin $poin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Poin  $poin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poin $poin)
    {
        //
    }
}
