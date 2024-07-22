<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\ClassRoom;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'class_room_id',
        'gender'
    ];

    public function ClassRoom()
    {
        return $this->belongsTo(ClassRoom::class);
    }
}
