<?php

namespace App\Models\Persons;

use Illuminate\Database\Eloquent\Model;

class PersonsExtraCurricular extends Model
{
    protected $table = 'persons_extra_curricular';
	protected $fillable = [
		'id', 'details'
	];
}
