<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reqcategory extends Model
{
    public $table = "reqcategorys";

    protected $fillable = [
        "req_category"
    ];
}
