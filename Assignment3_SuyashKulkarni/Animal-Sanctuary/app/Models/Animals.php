<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Animals extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'animal_name',
        'species',
        'join_date'
    ];

    // Define the relationship to the feeding schedules
    public function feedingSchedules()
    {
        return $this->hasMany(FeedingSchedule::class, 'animal_id');
    }
}
