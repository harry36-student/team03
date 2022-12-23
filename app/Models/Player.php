<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $fillable=[
    
    'id',
    'name',
    'number',
    'location',
    'habit',
    'height',
    'weight',
    'nation',
    'rank',
    'teamid',
    'created_at',
    'updated_at'
    ];
    public function team()
    {
        return $this->belongsTo('App\Models\Team', 'teamid', 'id');
    }
    public function scopeAllPositions($query)
    {
        $query->select('location')->groupBy('location');
    }
    public function scopePosition($query, $pos)
    {
        $query->where('location', '=', $pos);

    }
    public function scopenation($query)
    {
        $query->orderBy('nation');
    }
    public function scopelocation($query, $pos)
    {
        $query->where('location', '=', $pos);
    }
}
