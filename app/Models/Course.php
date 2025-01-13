<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'level', 'image', 'price', 'status', 'category_id', 'lecture_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function lectures(){
        return $this->belongsToMany(Lecture::class, 'course_lecture');
    }
}
