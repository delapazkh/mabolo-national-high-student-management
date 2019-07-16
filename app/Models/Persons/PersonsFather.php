<?php

namespace App\Models\Persons;

use Illuminate\Database\Eloquent\Model;

class PersonsFather extends Model
{
    protected $table = 'persons_father_s_student_alive';
	protected $fillable = [
		'id', 'lastName', 'givenName', 'middleName', 'age', 'deathStatus', 'fatherDOB', 'religion', 'occupation', 'monthlyIncome', 'educationLevel', 'Skills', 'Course', 'grade'
	];
}
