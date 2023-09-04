<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoProperty extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'properties_id'
    ];
}
