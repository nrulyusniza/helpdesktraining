<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Severity extends Model
{
    public $table = "severitys";

    protected $fillable = [
        "severity_label"
    ];
}
