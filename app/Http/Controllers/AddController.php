<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Add;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        request()->validate([
            'user_id' => 'required',
            'pallet' => 'required',
            'eilutes' => 'required',
        ]);

        Add::create($request->all());
        return back()->with('success','Uždirbti pinigai išsaugoti!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $trackers = Add::where('user_id', '=',auth()->id())
            ->orderBy('created_at', 'desc')
            ->get();

        return View('layouts.show',compact('trackers'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showMonth()
    {

        //sum of pallets and eilutes
        //order and group by MONTH
        $manages = DB::table('adds')->where('user_id', '=', auth()->id())
            ->select(DB::raw('sum(pallet) as totalpallet')
            ,DB::raw('sum(eilutes) as totaleilutes')
            ,DB::raw("MONTH(created_at) as month"))
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        return view('layouts.manage',compact('manages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
