<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Game;
use App\Models\Team;


class GameController extends Controller
{

    public function index()
    {
        return view('/match/matches', ['games' => Game::get()]);
        
    }

    public function create()
    {
        return view('/match/createMatch', ['teams' => Team::get()]);
        
    }

    public function store(Request $request)
    {
        $request->validate([

            'team1' => 'required',
            'goalsteam1' => 'numeric',
            'team2' => 'required',
            'goalsteam2' => 'numeric',
            'matchstadium' => 'required',


        ]);

        $game = new Game;

        $game->Team1_id = $request->input('team1');
        $game->goals_Team1 = $request->input('goalsteam1');
        $game->Team2_id = $request->input('team2');
        $game->goals_Team2 = $request->input('goalsteam2');
        $game->stadium = $request->input('matchstadium');
        $game->date = $request->input('matchdate');
        $game->time = $request->input('matchtime');

        $game->save();

        return  to_route('matches');
        


    }

    public function show(Game $id)
    {
        return view('match.show',['game'=> $id]);
    }
   
    public function edit(Game $id)
    {
        return view('match.edit',['game' =>  $id]);
    }


    public function update(Request $request, Game $game)
    {

        $request->validate([

            'goalsteam1' => 'numeric',
            'goalsteam2' => 'numeric',
            'matchstadium' => 'required',


        ]);


        
        $game->Team1_id = $game->Team1_id;
        $game->goals_Team1 = $request->input('goalsteam1');
        $game->Team2_id = $game->Team2_id;
        $game->goals_Team2 = $request->input('goalsteam2');
        $game->stadium = $request->input('matchstadium');
        $game->date = $request->input('matchdate');
        $game->time = $request->input('matchtime');

        $game->save();

        return  to_route('matches');
    }
    
    public function destroy(Game $game)
    {
        $game->delete();

        return  to_route('matches');
    }
}
