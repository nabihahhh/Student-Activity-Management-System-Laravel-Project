<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{

    protected $guarded = [
    ];


    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function approvalCommittee()
    {
        return $this->belongsTo(User::class, 'approvalCommittee_id');
    }

    public function cfo()
    {
        return $this->belongsTo(User::class, 'cfo_id');
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }


}
