<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index()
    {
        $ids = Nasabah::get();
        $data = [];
        $curid = '';
        $from = date('m/d/Y');
        $to = date('m/d/Y');
        return view('report.data', compact(['ids', 'data', 'from', 'to', 'curid']));
    }

    public function getData(Request $request)
    {
        $this->validate($request, [
            'id'    => 'required',
            'start' => 'required|date',
            'end'   => 'required|date|after_or_equal:start',
        ]);
        $from = $request->start;
        $to = $request->end;
        $curid = $request->id;
        $ids = Nasabah::get();
        $data = Transaksi::where('nasabah_id', $request->id)->whereBetween('date', [$from, $to])->get();
        return view('report.data', compact(['ids', 'data', 'from', 'to', 'curid']));
    }
}
