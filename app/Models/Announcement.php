<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [
        'lecture_id',
        'announcement',
        'course_id',
        'target_audience',
        'message',
    ];

    public function lecture(){
        return $this->belongsTo(Lecture::class);
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }
}
