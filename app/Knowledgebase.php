<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Knowledgebase extends Model
{
    public $table = "knowledgebases";

    protected $fillable = [
        "kb_title", "kb_content"
    ];
}
