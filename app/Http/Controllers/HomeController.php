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
    public function __construct()
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
        $userData = DB::table('users')->leftJoin('adds', 'users.id', '=', 'adds.user_id')->where('adds.created_at', '>=', Carbon::now()->subMonths(1))
            ->select(
                DB::raw('users.name')
                , DB::raw('YEAR(adds.created_at) year, MONTH(adds.created_at) month')
                , DB::raw('sum(pallet) as totalpallet')
                , DB::raw('count(user_id) as totalfilled')
                , DB::raw('sum(eilutes) as totaleilutes')
                , DB::raw('sum(vip) as totalvip')
                , DB::raw('sum(valandos) as totalvalandos'))
            ->groupBy('year', 'month')
            ->groupBy('name')
            ->orderByRaw('min(adds.created_at) desc')
            ->get();

        return view('layouts.home', compact('userData'));
    }
}
