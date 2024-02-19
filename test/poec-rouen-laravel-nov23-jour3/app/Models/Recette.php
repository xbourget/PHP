<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    use HasFactory;


    protected $fillable = [
        "name",
        "difficulty",
        "time_to_prepare",
        "category_id",
        "user_id",
        "display_time"
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
