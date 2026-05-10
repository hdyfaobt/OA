<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    public function index()
{
    $players = \App\Models\Player::all();

    return view('admin.players.index', ['players' => $players]);
}
public function show(Player $player)
{
    return view('admin.players.show', ['player' => $player]);
}
}
