<?php

namespace App;

use App\Equipment;
use Illuminate\Database\Eloquent\Model;

class Equipmentlog extends Model
{
    public $table = "equipmentlogs";

    protected $fillable = [
        "equipment_id", "asset_newlocation", "updated_date", "assetlog_status"
    ];

    public function equipment()
    {
        return $this->belongsTo(Equipment::class, 'equipment_id');
    }
}
