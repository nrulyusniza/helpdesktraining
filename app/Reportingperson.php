<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reportingperson extends Model
{
    public $table = "reportingpersons";

    protected $fillable = [
        "rptpers_name", "rptpers_phone", "rptpers_ext", "rptpers_mobile", "rptpers_email"
    ];
}
