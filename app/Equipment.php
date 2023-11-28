<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Site;

class Equipment extends Model
{
    public $table = "equipments";

    protected $fillable = [
        "asset_hostname", "asset_location", "asset_ip", "asset_type", "site_id", "asset_kewpa"
    ];

    public function site()
    {
        return $this->belongsTo(Site::class, 'site_id');
    }

    public function equipmentlogs()
    {
        return $this->hasMany(Equipmentlog::class);
    }
}
