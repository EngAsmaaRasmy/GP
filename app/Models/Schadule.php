<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schadule extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id', 'week_day', 'time',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
