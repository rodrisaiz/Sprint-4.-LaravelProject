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

    
    public function create()
    {
        return  view('/team/createTeam');
    }

    
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

    
    public function show(Team $id)
    {
        return view('team.show',['team'=> $id]);
    }

    
    public function edit(Team $id)
    {
        return view('team.edit',['team'=> $id]);
    }

    
    public function update(Request $request, Team $team)
    {

        $request->validate([
            'team_name' => 'required',
            'team_dt' => 'required',
            'team_stadium' => 'required',
            'team_img' => 'mimes:jpg,png,jpeg|max:5048'


        ]);

        if($request->team_img){

            $newImageName = time() . '-' . $request->team_name . '.' . $request->team_img->extension();

            $request->team_img->move(public_path('images'), $newImageName);
        
        }else{

            $newImageName = $team->img_path;
        }

      

        $team->name = $request->input('team_name');
        $team->dt = $request->input('team_dt');
        $team->stadium = $request->input('team_stadium');
        $team->img_path = $newImageName;

        $team->save();

        return  to_route('home');

    }

    
    public function destroy(Team $team)
    {
        $team->delete();

        return  to_route('home');
    }
}
