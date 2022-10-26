<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsTableSeeder extends Seeder
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
    public function generateRandomhistory() {
        $history = ['2022-今','2021-今','2020-今','2019-今','2018-今','2017-今','2016-今','2015-今'];
        return $history[rand(0, count($history)-1)];

    }
    public function generateRandomname() {
        $first_name = $this->generateRandomString(rand(2, 15));
        $first_name = strtolower($first_name);
        $first_name = ucfirst($first_name);
        $last_name = $this->generateRandomString(rand(2, 15));
        $last_name = strtolower($last_name);
        $last_name = ucfirst($last_name);
        $name = $first_name . " ". $last_name;
        return $name;

    }
    public function run()
    {
        for ($i=1; $i<7; $i++)
        {
            $randomTeam = $this->generateRandomString();
            $history = $this->generateRandomhistory();
            $leader = $this->generateRandomname();
            $coach = $this->generateRandomname();
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));
            DB::table('teams')->insert([
                'teamid' => $i,
                'team' => $randomTeam,
                'history' => $history,
                'leader' => $leader,
                'coach' => $coach,
                'home' => $this->generateRandomname(),
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }
}
