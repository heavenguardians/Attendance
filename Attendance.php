<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $guarded = [];

    public function comments()
    {
        return $this->hasMany(AttendanceDetail::class);
    }
}
