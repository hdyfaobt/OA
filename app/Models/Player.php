<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'position',
        'jersey_number',
        'dob',
        'nationality',
        'team_id',

    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    

}
