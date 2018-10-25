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
    public function index ()
    {
        return view('layouts.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create ()
    {
        return view('forms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store (Request $request)
    {
        request()->validate([
            'user_id' => 'required',
            'pallet' => 'required',
            'eilutes' => 'required',
            'vip' => 'required',
            'valandos' => 'required'
        ]);

        Add::create($request->all());
        return back()->with('success', 'Uždirbti pinigai išsaugoti!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show ()
    {

        $trackers = Add::where('user_id', '=', auth()->id())->take(5)
            ->orderBy('created_at', 'desc')
            ->get();

        return View('layouts.show', compact('trackers'));

    }

    public function showAll ()
    {

        $trackers = Add::where('user_id', '=', auth()->id())
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        return View('layouts.showAll', compact('trackers'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    public function showMonth ()
    {

        $manages = DB::table('adds')->where('user_id', '=', auth()->id())->take(3)
            ->select(DB::raw('sum(pallet) as totalpallet')
                , DB::raw('sum(eilutes) as totaleilutes')
                , DB::raw('sum(vip) as totalvip')
                , DB::raw('sum(valandos) as totalvalandos')
                , DB::raw('YEAR(created_at) year, MONTH(created_at) month'))
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get();


        return view('layouts.manage', compact('manages'));
    }

    public function showMonthAll ()
    {

        $manages = DB::table('adds')->where('user_id', '=', auth()->id())
            ->select(DB::raw('sum(pallet) as totalpallet')
                , DB::raw('sum(eilutes) as totaleilutes')
                , DB::raw('sum(vip) as totalvip')
                , DB::raw('sum(valandos) as totalvalandos')
                , DB::raw('YEAR(created_at) year, MONTH(created_at) month'))
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get();


        return view('layouts.manageAll', compact('manages'));
    }

    //Delete feature need to be added for user erros but need some kind of safety
    //Maybe other delete screen.

    public function destroy ($id)
    {
        $task = Add::findOrFail($id);

        $task->delete();

        return back()->with('warning', 'Ištrinta sekmingai');

    }

}
