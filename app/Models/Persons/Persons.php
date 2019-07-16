<?php

namespace App\Models\Persons;

use Illuminate\Database\Eloquent\Model;

class Persons extends Model
{
    protected $table = 'persons';
	protected $fillable = [
		'id', 'student_id', 'familyName', 'givenName', 'middleName'
	];
}
