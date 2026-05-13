<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Player;

class Team extends Model
{
    protected $fillable = ['name', 'min_year', 'max_year'];

    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
