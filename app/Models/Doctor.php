<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = ["name", "category_id", "address"];

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
