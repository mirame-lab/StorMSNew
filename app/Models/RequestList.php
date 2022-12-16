<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestList extends Model
{
    use HasFactory;

      protected $fillable = [
        'request_id',
        'requester_id',
        'project_id',
        'material_id',
        'date_requested',
        'q_taken',
        'drum_no',
        'M_approval',
        'M_approval_date',
        'SK_approval',
        'SK_approval_date',
    ];
}
