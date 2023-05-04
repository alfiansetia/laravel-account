<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use App\Models\Poin;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Transaksi::get();
        return view('transaksi.data', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ids = Nasabah::get();
        return view('transaksi.add', compact('ids'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id'        => 'required',
            'date'      => 'required',
            'desc'      => 'required',
            'status'    => 'required',
            'amount'    => 'required',
        ]);
        Transaksi::create([
            'nasabah_id'    => $request->id,
            'date'          => $request->date,
            'desc'          => $request->desc,
            'status'        => $request->status,
            'amount'        => $request->amount,
        ]);
        $poin = 0;
        if($request->desc == 'Bayar Listrik' && $request->status == 'D'){
            $poin = $this->poinListrik($request->amount);
        }elseif($request->desc == 'Beli Pulsa' && $request->status == 'D'){
            $poin = $this->poinPulsa($request->amount);
        }
        if ($poin > 0) {
            Poin::create([
                'nasabah_id' => $request->id,
                'amount'     => $poin,
            ]);
        }
        return redirect(route('transaksi.index'));
    }

    private function poinListrik($nominal)
    {
        if ($nominal <= 50000) {
            return 0;
        } else if ($nominal <= 100000) {
            return (($nominal - 50000) / 2000);
        } else {
            return (($nominal - 100000) / 2000) * 2 + 25;
        }
    }

    private function poinPulsa($nominal)
    {
        if ($nominal <= 10000) {
            return 0;
        } else if ($nominal <= 30000) {
            return (($nominal - 10000) / 1000);
        } else {
            return (($nominal - 30000) / 1000) * 2 + 20;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
