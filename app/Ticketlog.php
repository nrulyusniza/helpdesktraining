<?php

namespace App;

use App\Reaction;
use App\Ticstatus;
use App\Ticket;
use Illuminate\Database\Eloquent\Model;

class Ticketlog extends Model
{
    public $table = "ticketlogs";

    protected $fillable = [
        "date", "description", "ticket_id", "update_by", "response_date", "response_time",
        "reaction_id", "attachment", "log_status"
    ];

    public function reaction()
    {
        return $this->belongsTo(Reaction::class, 'reaction_id');
    }

    public function ticstatus()
    {
        return $this->belongsTo(Ticstatus::class, 'log_status');
    }

    public function ticket()
    {
        return $this->belongsTo(Ticket::class, 'ticket_id');
    }
}
