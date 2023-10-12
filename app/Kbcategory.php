<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kbcategory extends Model
{
    public $table = "kbcategorys";

    protected $fillable = [
        "kb_category"
    ];
}
