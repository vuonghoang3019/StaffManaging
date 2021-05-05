<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedule';
    protected $fillable = ['teacher_id','course_id','classroom_id'];

    public function calendar()
    {
        return $this->belongsTo(Calendar::class,'calendar_id');
    }
}
