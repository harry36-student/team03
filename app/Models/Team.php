<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'team',
        'history',
        'leader',
        'coach',
        'home',
        'created_at',
        'updated_at'
    ];
    
    public function players()
    {
        return $this->hasMany('App\Models\Player', 'teamid');
    }

    public function delete()
    {
        $this->players()->delete();
        return parent::delete();
    }
    public function scopeZone($query,$zone)
    {
        $query->where('zone', '=', $zone);
    }
}
