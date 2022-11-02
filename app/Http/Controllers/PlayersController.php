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
    public function show($id)
    {   
        $players = Player::findOrFail($id);
        return view('players.show', ['players' => $players]);
    }
    public function destroy($id)
    {   
        $players = Player::findOrFail($id);
        $players->delete();
        return redirect('players');
    }
}
