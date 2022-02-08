<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $guarded = [
    ];

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }
    
    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}



