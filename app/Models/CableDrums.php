<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CableDrums extends Model
{
    use HasFactory;
    protected $fillable = [
        'material_id',
        'material_name',
        'drum_no',
        'balance',
        'in_drum',
    ];
}
