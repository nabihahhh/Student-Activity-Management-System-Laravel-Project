<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    use HasFactory;

    protected $table = 'reports';
    public $timestamps = true;

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'filename', 
        'created_at',
        'updated_at'
    ];
}