<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = [
        'name',
        'domain',
        'owner_name',
        'email',
        'phone',
        'plan',
        'status',
        'notes',
    ];
}
