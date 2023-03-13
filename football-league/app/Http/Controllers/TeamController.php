<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Team;


class TeamController extends Controller
{

    public function index()
    {
        return view('/team/home', ['teams' => Team::get()]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  view('/team/createTeam');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'team_name' => 'required',
            'team_dt' => 'required',
            'team_stadium' => 'required',
            'team_img' => 'required|mimes:jpg,png,jpeg|max:5048'


        ]);

        $newImageName = time() . '-' . $request->team_name . '.' . $request->team_img->extension();

       $request->team_img->move(public_path('images'), $newImageName);

        $team = new Team;

        $team->name = $request->input('team_name');
        $team->dt = $request->input('team_dt');
        $team->stadium = $request->input('team_stadium');
        $team->img_path = $newImageName;

        $team->save();

        return  to_route('home');

    }

    /**
     * Display the specified resource.
     */
    public function show(Team $id)
    {
        return view('team.show',['team'=> $id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
