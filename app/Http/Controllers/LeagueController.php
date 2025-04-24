<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\League;
use Yajra\DataTables\DataTables;

class LeagueController extends Controller
{
    
    // github testing
    public function index()
    {
        //
        
        
        return view('welcome');
    }

    // return league datas in datatable (yajra)
    public function index_data(){


        $data = League::orderBy('PTS','DESC');
        // return $data;
        return Datatables::of($data)
                ->addIndexColumn()
                ->rawColumns(['action'])
                ->make(true);
    }
    public function random_league(){

        $league_data = League::all();

        foreach($league_data as $league_team){
            $week = 7;
            $w = 0;
            $d = 0;
            $l = 0;
            $pts = 0;

            $w = mt_rand(0, 7);
            $left_week = $week-$w;

            $d = mt_rand(0, $left_week);
            $left_week = $left_week-$d;

            $l = $left_week;

            $pts = 3*$w + 1*$d;
            League::where('id',$league_team->id)->update(['PTS'=>$pts,'P'=>$week,'W'=>$w,'D'=>$d,'L'=>$l]);

        }
        $league_data = League::orderBy('PTS','DESC')->first();
        
        return ['team'=>$league_data->teams, 'success'=>1];
        
        return 1;
    }


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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

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
