<?php

namespace App\Models\Students;

use Illuminate\Database\Eloquent\Model;

class StudentsGuardian extends Model
{
    protected $table = 'students_gaurdian';
	protected $fillable = [
		'id', 'occupation', 'phoneNumber', 'lastName', 'givenName', 'middleName', 'guardianRelationship', 'memberof4P_S'
	];
}
