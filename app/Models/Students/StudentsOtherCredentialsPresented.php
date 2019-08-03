<?php

namespace App\Models\Students;

use Illuminate\Database\Eloquent\Model;

class StudentsOtherCredentialsPresented extends Model
{
    protected $table = 'students_other_credentials_presented';
	protected $fillable = [
		'id', 'peptPasser', 'peptPasserRating', 'ALS_A_and_E_passer', 'ALS_A_and_E_passerRating', 'others', 'othersSpecify', 'dateExaminationOrAssesment', 'nameAddressTestingCenter'
	];
}
