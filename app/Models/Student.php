<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model {

    use SoftDeletes, HasFactory;

    protected $fillable = [
        'name',
        'code',
        'official_email',
        'phone_number',
        'email'
    ];

    public function courses() {
        return $this->belongsToMany(Course::class);
    }

    public function addresses() {
        return $this->hasMany(Address::class);
    }

}
