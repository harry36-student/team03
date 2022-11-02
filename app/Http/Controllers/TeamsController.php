<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Team;

class TeamsController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('teams.index', ['teams' => $teams]);
    }
    public function show($id)
    {
        $teams = Team::findOrFail($id);
        return view('teams.show', ['teams' => $teams]);
    }
    public function destroy($id)
    {
        $teams = Team::findOrFail($id);
        $teams->delete();
        return redirect('teams');
    }
}