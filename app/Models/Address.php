<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model {

    use SoftDeletes, HasFactory;

    protected $fillable = [
        'street',
        'building_number',
        'apartment_number',
        'floor_number',
        'notes',
        'student_id',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

}
