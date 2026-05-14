<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Player;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::all();

        return view('admin.players.index', ['players' => $players]);
    }

    public function show(Player $player)
    {
        return view('admin.players.show', ['player' => $player]);
    }

    public function create()
    {
        $teams = Team::all();

        return view('admin.players.create', ['teams' => $teams]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'affiliation' => 'required|string|max:255|unique:players,affiliation',
            'jersey_number' => 'required|integer|min:1|max:99',
            'dob' => 'required|date',
            'team_id' => 'nullable|exists:teams,id',
        ]);

        if (empty($data['team_id'])) {
            $birthYear = (int) Carbon::parse($data['dob'])->year;

            $team = Team::where('min_year', '<=', $birthYear)
                ->where('max_year', '>=', $birthYear)
                ->inRandomOrder()
                ->first();

            $data['team_id'] = $team?->id;
        }

        Player::create($data);

        return redirect()->route('admin.players.index')->with('success', 'Player created successfully.');

    }

    public function edit(Player $player)
    {
        $teams = Team::all();

        return view('admin.players.edit', ['player' => $player, 'teams' => $teams]);
    }

    public function update(Request $request, Player $player)
    {
        $data = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'affiliation' => 'required|string|max:255|unique:players,affiliation,'.$player->id,
            'jersey_number' => 'required|integer|min:1|max:99',
            'dob' => 'required|date',
            'team_id' => 'nullable|exists:teams,id',
        ]);

        if (empty($data['team_id'])) {
            $birthYear = (int) Carbon::parse($data['dob'])->year;

            $team = Team::where('min_year', '<=', $birthYear)
                ->where('max_year', '>=', $birthYear)
                ->inRandomOrder()
                ->first();

            $data['team_id'] = $team?->id;
        }

        $player->update($data);

        return redirect()->route('admin.players.index')->with('success', 'Player updated successfully.');
    }
}
