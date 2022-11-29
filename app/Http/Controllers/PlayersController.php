<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePlayerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Player;
use App\Models\Team;

class PlayersController extends Controller
{
    public function index()
    {
        $players = Player::all();
        $locations = Player::allPositions()->get();
        $data = [];
        foreach ($locations as $location)
        {
            $data["$location->$location"] = $location->location;
        }
        return view('players.index', ['players' => $players, 'locations'=>$data]);
    }
    public function api_players()
    {
        return Player::all();
    }
    public function api_update(Request $request)
    {
        $player = Player::find($request->input('id'));
        if ($player == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }
        $player->name = $request->input('name');
        $player->number=$request->input('number');
        $player->habit=$request->input('habit');
        $player->location = $request->input('location');
        $player->height = $request->input('height');
        $player->weight = $request->input('weight');
        $player->nation = $request->input('nation');
        $player->rank = $request->input('rank');
        $player->teamid =$request->input('teamid');
        

        if ($player->save())
        {
            return response()->json([
                'status' => 1,
            ]);
        } else {
            return response()->json([
                'status' => 0,
            ]);
        }}
        public function api_delete(Request $request)
        {
            $player = Player::find($request->input('id'));
    
            if ($player == null)
            {
                return response()->json([
                    'status' => 0,
                ]);
            }
    
            if ($player->delete())
            {
                return response()->json([
                    'status' => 1,
                ]);
            }
        }
        public function senior()
    {
        $players = Player::senior()->get();
        $locations = Player::allPositions()->get();
        $data = [];
        foreach ($locations as $location)
        {
            $location["$location->location"] = $location->location;
        }
        return view('players.index', ['players' => $players, 'locations'=>$data]);
    }

    public function location(Request $request)
    {
        $players = Player::location($request->input('pos'))->get();

        $locations = Player::allPositions()->get();
        $data = [];
        foreach ($locations as $location)
        {
            $data["$location->location"] = $location->location;
        }
        return view('players.index', ['players' => $players, 'location'=>$data]);
    }
    public function create()
    {
        $tags =Team::orderBy('teams.id','asc')->pluck('teams.team','teams.id');
        return view('players.create', ['teams' =>$tags,'teamSelected'=>null]);
    }

    public function edit($id)
    {
        $player = Player::findOrFail($id);
        $tags = Team::orderBy('teams.id','asc')->pluck('teams.team','teams.id');
        $selected_tags =$player->team->id;
        return view('players.edit', ['player' =>$player, 'teams' => $tags, 'teamSelected' => $selected_tags]);
    }

    public function show($id)
    {
        $player = Player::findOrFail($id);
        $team = Team::findOrFail($player->teamid);

        return view('players.show', ['player' => $player, 'teams' => $team->team]);
    }

    public function store(CreatePlayerRequest $request)
    {
       
        $name = $request->input('name');
        $number= $request->input('number');
        $habit= $request->input('habit');
        $location = $request->input('location');
        $height = $request->input('height');
        $weight = $request->input('weight');
        $nation = $request->input('nation');
        $rank = $request->input('rank');
        $teamid = $request->input('teamid');


        $player = Player::create([
            'name'=>$name,
            'number'=>$number,
            'habit'=>$habit,
            'location'=>$location,
            'height'=>$height,
            'weight'=>$weight,
            'nation'=>$nation,
            'rank'=>$rank,
            'teamid'=>$teamid]);
        return redirect('players');
    }
    public function update($id, CreatePlayerRequest $request)
    {
        $player = Player::findOrFail($id);

        $player->name = $request->input('name');
        $player->number = $request->input('number');
        $player->habit=$request->input('habit');
        $player->location = $request->input('location');
        $player->height = $request->input('height');
        $player->weight = $request->input('weight');
        $player->nation= $request->input('nation');
        $player->rank = $request->input('rank');
        $player->teamid = $request->input('teamid');
        $player->save();

        return redirect('players');
    }

    public function destroy($id)
    {
        $player = Player::findOrFail($id);
        $player->delete();
        return redirect('players');
    }
}

