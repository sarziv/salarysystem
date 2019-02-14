<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct ()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function userDataInfo ()
    {
        //reused from addController
        $userData = DB::table('adds')->where([['user_id', '=', auth()->id()], ['created_at', '>', Carbon::now()->format('Y-m')]])
            ->select(DB::raw('sum(pallet) as totalpallet')
                , DB::raw('sum(eilutes) as totaleilutes')
                , DB::raw('count(user_id) as totalfilled')
                , DB::raw('sum(vip) as totalvip')
                , DB::raw('sum(valandos) as totalvalandos')
                , DB::raw('YEAR(created_at) year, MONTH(created_at) month'))
            ->groupBy('year', 'month')->first();

        return view('layouts.home', compact('userData'));

    }


}
