<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public $table = "types";

    protected $fillable = [
        "request_type"
    ];
}
