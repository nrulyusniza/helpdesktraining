<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    public $table = "reactions";

    protected $fillable = [
        "response_type"
    ];
}
