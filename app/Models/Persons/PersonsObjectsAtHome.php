<?php

namespace App\Models\Persons;

use Illuminate\Database\Eloquent\Model;

class PersonsObjectsAtHome extends Model
{
    protected $table = 'persons_objects_at_home';
	protected $fillable = [
		'id', 'specificObjects', 'othersSpecify'
	];
}
