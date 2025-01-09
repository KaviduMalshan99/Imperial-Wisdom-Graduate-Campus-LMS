<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'full_name', 'address', 'contact_number', 'nic', 'nic_image', 'email', 'password', 'educational_level', 'profile_image', 'status'];

    public function course(){
        return $this->belongsToMany(Course::class, 'course_lecture');
    }
}
