<?php

namespace App\Models\Students;

use Illuminate\Database\Eloquent\Model;

class StudentsFamilyDetails extends Model
{
    protected $table = 'students_family_details';
	protected $fillable = [
		'id', 'numberofBrothers', 'numberofSisters', 'didBrother_SisterDroppedoutofSchool', 'reason', 'familyMemComOrgaAffiliated', 'organisationName'
	];
}
