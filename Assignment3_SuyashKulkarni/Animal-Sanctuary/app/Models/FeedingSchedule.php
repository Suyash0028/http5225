<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FeedingSchedule extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'animal_id',
        'feeding_time',
        'quantity',
        'feeding_frequency',
    ];
}
