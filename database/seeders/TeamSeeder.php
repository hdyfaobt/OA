<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [
    ['name' => 'U6',  'min_year' => 2020, 'max_year' => 2020],
    ['name' => 'U7',  'min_year' => 2019, 'max_year' => 2019],
    ['name' => 'U8',  'min_year' => 2018, 'max_year' => 2018],
    ['name' => 'U9',  'min_year' => 2017, 'max_year' => 2017],
    ['name' => 'U10', 'min_year' => 2016, 'max_year' => 2016],
    ['name' => 'U11', 'min_year' => 2015, 'max_year' => 2015],
    ['name' => 'U12', 'min_year' => 2014, 'max_year' => 2014],
    ['name' => 'U13', 'min_year' => 2013, 'max_year' => 2013],
    ['name' => 'U14', 'min_year' => 2012, 'max_year' => 2012],
    ['name' => 'U15', 'min_year' => 2011, 'max_year' => 2011],
    ['name' => 'U16', 'min_year' => 2010, 'max_year' => 2010],
    ['name' => 'U17', 'min_year' => 2009, 'max_year' => 2009],
    ['name' => 'P3A', 'min_year' => 1900, 'max_year' => 2008],
    ['name' => 'P3B', 'min_year' => 1900, 'max_year' => 2008],
];

        foreach ($teams as $team) {
            \App\Models\Team::create($team);
        }

        // Add all players to a random team
        $players = \App\Models\Player::all();
        foreach($players as $player)
        {
            $birthYear = (int) \Carbon\Carbon::parse($player->dob)->year;

            $teams = \App\Models\Team::where('min_year', '<=', $birthYear)
                ->where('max_year', '>=', $birthYear)
                ->get();

            if ($teams->count() > 0) {
                $player->team_id = $teams->random()->id;
                $player->save();
            }
        }
    }
}
