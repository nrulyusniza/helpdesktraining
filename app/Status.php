<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public $table = "statuss";

    protected $fillable = [
        "status_label"
    ];
}
