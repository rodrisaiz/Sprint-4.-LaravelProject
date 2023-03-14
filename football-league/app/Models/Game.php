<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $guarded = [];



    public function team()
    {

        return $this->hasMany(Team::class);
 

    }

    public function team1()
    {
        return $this->belongsTo(Team::class, 'Team1_id');
    }

    public function team2()
    {
        return $this->belongsTo(Team::class, 'Team2_id');

    }
    
}
