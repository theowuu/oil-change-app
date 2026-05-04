<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OilChange extends Model
{
    protected $fillable = [
        'current_odometer',
        'previous_odometer',
        'previous_change_date',
    ];
}
