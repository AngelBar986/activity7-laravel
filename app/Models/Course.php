<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_key',
        'course_name',
        'robotics_kit_id'
    ];

    /**
     * Un curso pertenece a un robotics kit
     */
    public function roboticsKit()
    {
        return $this->belongsTo(RoboticsKit::class);
    }
}
