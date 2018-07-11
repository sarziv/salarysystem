<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class AdminController extends Controller {


    public function index()
    {
    return view('admin.admin');
    }

    public function adminpage()
    {
        $admindata = DB::table('users')->leftJoin('adds', 'users.id', '=', 'adds.user_id')->where('adds.created_at', '>=', Carbon::now()->subMonths(3))
            ->select(
                DB::raw('users.name')
                , DB::raw('YEAR(adds.created_at) year, MONTH(adds.created_at) month')
                , DB::raw('sum(pallet) as totalpallet')
                , DB::raw('sum(eilutes) as totaleilutes')
                , DB::raw('sum(vip) as totalvip'))
            ->groupBy('year', 'month')
            ->groupBy('name')
            ->orderByRaw('min(adds.created_at) desc')
            ->get();

        return view('admin.adminpage', compact('admindata'));
    }

}
