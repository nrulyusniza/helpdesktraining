<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticstatus extends Model
{
    public $table = "ticstatuss";

    protected $fillable = [
        "ticstatus_label"
    ];
}
