<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ["name", "desc", "description", "image"];

    public function doctor()
    {
        return $this->hasMany(Doctor::class);
    }
}
