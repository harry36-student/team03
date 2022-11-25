<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTeamRequest;
use Illuminate\Http\Request;
use App\Models\Team;
use Carbon\Carbon;


class TeamsController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('teams.index', ['teams' => $teams]);
    }
    public function api_teams()
    {
        return Team::all();
    }
    public function api_update(Request $request)
    {
        $team = Team::find($request->input('id'));
        if ($team == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }

        $team->team = $request->input('team');
        $team->leader = $request->input('leader');
        $team->history = $request->input('history');
        $team->coach = $request->input('coach');
        $team->home = $request->input('home');
        if ($team->save())
        {
            return response()->json([
                'status' => 1,
            ]);
        } else {
            return response()->json([
                'status' => 0,
            ]);
        }
    }
    public function api_delete(Request $request)
    {
        $team = Team::find($request->input('id'));

        if ($team == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }

        if ($team->delete())
        {
            return response()->json([
                'status' => 1,
            ]);
        }

    }
    public function create()
    {
        return view('teams.create');
    }

    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('teams.edit', ['team'=>$team]);
    }

    public function show($id)
    {
        $teams = Team::findOrFail($id);
        $players = $teams->players;
        return view('teams.show', ['teams' => $teams, 'players'=>$players]);
    }
    public function store(CreateTeamRequest $request)
    {
        $team = $request->input('team');
        $history = $request->input('history');
        $leader = $request->input('leader');
        $home = $request->input('home');
        $coach = $request->input('coach');

        Team::create([
            'team' => $team,
            'history'=>$history,
            'leader' => $leader,
            'home' => $home,
            'coach' => $coach,
            'created' => Carbon::now()
        ]);
        return redirect('teams');
    }
    public function update($id, CreateTeamRequest $request)
    {
        $team = Team::findOrFail($id);

        $team->name = $request->input('name');
        $team->history = $request->input('history');
        $team->leader = $request->input('leadere');
        $team->coach = $request->input('coach');
        $team->home = $request->input('home');
        $team->save();

        return redirect('teams');
    }

    public function destroy($id)
    {
        $teams = Team::findOrFail($id);
        $teams->delete();
        return redirect('teams');
    }
}