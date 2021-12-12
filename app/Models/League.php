<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    use HasFactory;

    protected $table = 'league';
    public $timestamps = false;

    protected $fillable = [
        "teams",
        "PTS",
        "P",
        "W",
        "D",
        "L",
        "GD",
    ];
}
