<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enrolledSubjects extends Model
{
    use HasFactory;

    protected $table = 'enrolled_subjects';

    protected $fillable = [

        'esNo',
        'subjectCode',
        'description',
        'units',
        'schedule',
    ];

}
