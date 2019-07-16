<?php

namespace App\Models\Persons;

use Illuminate\Database\Eloquent\Model;

class PersonsMother extends Model
{
    protected $table = 'persons_mother_s_student_alive';
	protected $fillable = [
		'id', 'lastName', 'givenName', 'middleName', 'age', 'deathStatus', 'fatherDOB', 'religion', 'occupation', 'monthlyIncome', 'educationLevel', 'Skills', 'Course', 'grade'
	];
}
