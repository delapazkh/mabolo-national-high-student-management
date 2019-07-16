<?php

namespace App\Models\Persons;

use Illuminate\Database\Eloquent\Model;

class PersonsEductionalSituation extends Model
{
    protected $table = 'persons_eductional_situation';
	protected $fillable = [
		'id', 'travelTime', 'transportation', 'homeworkSupport', 'studentAleadyDroppedOutofSchool', 'howLong', 'reason', 'withParents', 'studentRelationShip', 'studentSelfSupport', 'studentWork'
	];
}
