<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Verify extends Model
{
  protected $fillable = [
    'verificationComment',
    ];

    protected $primaryKey = 'id';
    protected $table = 'verify';
    public $timestamps = false;
}