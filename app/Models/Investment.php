<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;

    protected $fillable = ["name", "email", "phone", "appointment_date", "category_id", "doctor_id", "message", "done"];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
