<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable =[
        'bus_route_id',
        'direction',
        'start_timestamp',
        'end_timestamp'
    ];


}
