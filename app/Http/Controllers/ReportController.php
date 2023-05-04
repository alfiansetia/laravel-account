<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use App\Models\Transaksi;
use Carbon\Carbon;
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
        // $data = Transaksi::where('nasabah_id', $request->id)
        //     ->orderBy('date')
        //     ->get()
        //     ->groupBy('date')
        //     ->map(function ($data) {
        //         $totalAmount = $data->sum('amount');
        //         $details = $data->groupBy('status')
        //             ->map(function ($data) {
        //                 $totalAmountByCategory = $data->sum('amount');
        //                 return [
        //                     'status' => $data[0]->status,
        //                     'total_amount' => $totalAmountByCategory,
        //                     'transactions' => $data
        //                 ];
        //             });
        //         return [
        //             'date' => $data[0]->date,
        //             'total_amount' => $totalAmount,
        //             'details' => $details
        //         ];
        //     });
        return view('report.data', compact(['ids', 'data', 'from', 'to', 'curid']));
    }
}
