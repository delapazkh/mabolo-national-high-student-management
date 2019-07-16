<?php

namespace App\Models\Students;

use Illuminate\Database\Eloquent\Model;

class StudentsAcademicHistory extends Model
{
    protected $table = 'students_academic_history';
	protected $fillable = [
		'id', 'previousGrade', 'lastSchoolAttended', 'schoolYear'
	];
}
