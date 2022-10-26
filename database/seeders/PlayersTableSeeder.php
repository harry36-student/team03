<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generateRandomString($length = 10) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function generateRandomName() {
        $first_name = $this->generateRandomString(rand(2, 15));
        $first_name = strtolower($first_name);
        $first_name = ucfirst($first_name);
        $last_name = $this->generateRandomString(rand(2, 15));
        $last_name = strtolower($last_name);
        $last_name = ucfirst($last_name);
        $name = $first_name . " ". $last_name;
        return $name;
    }
    public function generateRandomPosition() {
        $positions = ['投手','捕手','一壘手','二壘手','三壘手','游擊手','左外野手','中外野手','右外野手'];
        return $positions[rand(0, count($positions)-1)];

    }
    public function generateRandomhabits() {
        $positions = ['左投左打','右投左打','左投右打','右投右打','右投左右開弓','左投左右開弓'];
        return $positions[rand(0, count($positions)-1)];

    }
    public function generateRandomNation() {
        $positions = ['中華民國','日本','美國','巴拿馬','多明尼加','加拿大','委內瑞拉'];
        return $positions[rand(0, count($positions)-1)];

    }
    public function run()
    {
        for ($i=0; $i<401; $i++)
        {
            $name = $this->generateRandomName();
            $position = $this->generateRandomPosition();
            $onboarddate = $this->generateRandomhabits();
            $nation = $this->generateRandomNation();
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));
            DB::table('players')->insert([
                'name' => $name,
                'number' => rand(0, 999),
                'location' => $position,
                'habit' => $onboarddate,
                'height' => rand(165, 220),
                'weight' => rand(80, 120),
                'nation' => $nation,
                'rank' => rand(1, 30),
                'teamid' => rand(1, 6),
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }
}
