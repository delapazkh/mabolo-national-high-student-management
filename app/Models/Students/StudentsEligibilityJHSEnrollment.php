<?php

namespace App\Models\Students;

use Illuminate\Database\Eloquent\Model;

class StudentsEligibilityJHSEnrollment extends Model
{
    protected $table = 'students_eligibility_for_jhs_enrollment';
	protected $fillable = [
		'id', 'elementarySchoolCompleter', 'generalAverage', 'citation', 'nameOfElementarySchool', 'schoolID', 'addressOfSchool'
	];
}
