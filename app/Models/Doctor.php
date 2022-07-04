<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = ["name", "email", "category_id", "address", "gender", "image", "password", "token"];

    protected $hidden = [
        'password', 'token'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function schaduale()
    {
        return $this->hasMany(schaduale::class);
    }

    public function reservation()
    {
        return $this->hasMany(Investment::class);
    }

}
