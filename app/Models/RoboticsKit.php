<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoboticsKit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'kit_code',
        'description'
    ];

    /**
     * Un robotics kit tiene muchos cursos
     */
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
