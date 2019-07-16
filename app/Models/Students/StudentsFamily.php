<?php

namespace App\Models\Students;

use Illuminate\Database\Eloquent\Model;

class StudentsFamily extends Model
{
    protected $table = 'students_family';
	protected $fillable = [
		'id', 'father_s_Name', 'mother_s_Name', 'deceased'
	];
}
