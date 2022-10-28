<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Player;

class PlayersController extends Controller
{
    public function index()
    {
        $players = Player::all();
        return view('players.index', ['players' => $players]);
    }
    public function first()
    {
        $posts=DB::table('players')->get();
        return view('database', ['articles' => $posts]);
    }
}
