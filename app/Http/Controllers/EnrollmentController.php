<?php

namespace App\Http\Controllers;

use App\Models\Persons\Persons;
use App\Models\Persons\PersonsDirection;
use App\Models\Persons\PersonsExtraCurricular;
use App\Models\Persons\PersonsDwellingDetails;
use App\Models\Persons\PersonsToiletType;
use App\Models\Persons\PersonsSourceOfWater;
use App\Models\Persons\PersonsObjectsAtHome;
use App\Models\Persons\PersonsEductionalSituation;
use App\Models\Persons\PersonsSchooledData;
use App\Models\Persons\PersonsFather;
use App\Models\Persons\PersonsMother;
use App\Models\Students\StudentsGuardian;
use App\Models\Students\StudentsAcademicHistory;
use App\Models\Students\StudentsFamilyDetails;
use App\Models\Students\StudentsFamily;
use App\Models\User;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persons = Persons::all();
        return view('enrollment.index', compact('persons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('enrollment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            $o = new Persons;
            $o->id             = $request->input('pi_student_id');
            $o->student_id     = $request->input('pi_student_id');
            $o->lastName       = $request->input('pi_family_name');
            $o->givenName      = $request->input('pi_given_name');
            $o->middleName     = $request->input('pi_middle_name');
            $o->birthDate      = $request->input('pi_birthdate');
            $o->enrollmentDate = $request->input('pi_enrollment_date');

            // Dummy Data
            $o->civilStatus    = 'empty';
            $o->gender         = 'empty';
            $o->bloodGroup     = 'emp';
            $o->religion       = 'empty';
            $o->save();

            $addres_1 = $request->input('pi_direction_one');
            $addres_2 = $request->input('pi_direction_two');
            $addres_3 = $request->input('pi_direction_three');

            $o = new PersonsDirection;
            $o->id               = $request->input('pi_student_id');
            $o->directionAddress = $addres_1.' '.$addres_2.' '.$addres_3;
            
            // Dummy Data
            $o->countryName      = 'Philippines'; 
            $o->save();

            $o = new StudentsGuardian;
            $o->id                   = $request->input('pi_student_id');
            $o->occupation           = $request->input('pi_guardian_occupation');
            $o->phoneNumber          = $request->input('pi_guardian_contact_number');
            $o->lastName             = $request->input('pi_guardian_family_name');
            $o->givenName            = $request->input('pi_guardian_given_name');
            $o->middleName           = $request->input('pi_guardian_middle_name');
            $o->guardianRelationship = $request->input('pi_relationship_to_student');
            $o->memberof4P_S         = $request->input('pi_member_of_4ps');
            $o->save();

            $o = new StudentsAcademicHistory;
            $o->id                 = $request->input('pi_student_id');
            $o->previousGrade      = $request->input('pi_enrolled_as_grade');
            $o->lastSchoolAttended = $request->input('pi_school_last_attended');
            $o->schoolYear         = $request->input('pi_school_year');
            $o->save();

            $o = new PersonsEductionalSituation;
            $o->id                  = $request->input('pi_student_id');
            $o->travelTime          = $request->input('es_travel_time');
            if($request->input('es_transportation') == "others"){
                $o->transportation = $request->input('es_others_specify');
            }else{
                $o->transportation = $request->input('es_transportation');
            }
            $o->homeworkSupport     = $request->input('es_help_for_homework');
            $o->studentAleadyDroppedOutofSchool = $request->input('es_student_dropout_school');
            $o->howLong             = $request->input('es_how_long_dropout');
            $o->reason              = $request->input('es_dropout_reasons');
            $o->withParents         = $request->input('es_stay_with_parents');
            $o->studentRelationShip = $request->input('es_relationship_staying');
            $o->studentSelfSupport  = $request->input('es_work_to_support');
            $o->studentWork         = $request->input('es_work_of_student');
            $o->save();

            $o = new PersonsSchooledData;
            $o->id               = $request->input('pi_student_id');
            $o->StudentStatus    = $request->input('school_enrolled_student_status');
            $o->SchooledEnrolled = $request->input('school_enrolled');
            $o->SchoolDate       = $request->input('school_enrolled_date');
            $o->LRN              = $request->input('school_enrolled_lrn');
            $o->save();

            $fathers_family_name = $request->input('fhs_fathers_family_name');
            $fathers_given_name  = $request->input('fhs_fathers_given_name');
            $fathers_middle_name = $request->input('fhs_fathers_middle_name');

            $o = new PersonsFather;
            $o->id             = $request->input('pi_student_id');
            $o->lastName       = $request->input('fhs_fathers_family_name');
            $o->givenName      = $request->input('fhs_fathers_given_name');
            $o->middleName     = $request->input('fhs_fathers_middle_name');
            $o->age            = $request->input('fhs_fathers_age');
            $o->deathStatus    = $request->input('fhs_fathers_death_status');
            $o->religion       = $request->input('fhs_fathers_religion');
            $o->occupation     = $request->input('fhs_fathers_occupation');
            $o->monthlyIncome  = $request->input('fhs_fathers_monthly_income');
            $o->educationLevel = $request->input('fhs_fathers_edu_attainment');

            // Dummy
            $o->fatherDOB      = date('Y-m-d H:i:s');
            $o->skills         = "empty";
            $o->course         = "empty";
            $o->grade          = 0;
            $o->save();

            $mothers_family_name = $request->input('fhs_mothers_family_name');
            $mothers_given_name  = $request->input('fhs_mothers_given_name');
            $mothers_middle_name = $request->input('fhs_mothers_middle_name');

            $o = new PersonsMother;
            $o->id             = $request->input('pi_student_id');
            $o->lastName       = $mothers_family_name;
            $o->givenName      = $mothers_given_name;
            $o->middleName     = $mothers_middle_name;
            $o->age            = $request->input('fhs_mothers_age');
            $o->deathStatus    = $request->input('fhs_mothers_death_status');
            $o->religion       = $request->input('fhs_mothers_religion');
            $o->occupation     = $request->input('fhs_mothers_occupation');
            $o->monthlyIncome  = $request->input('fhs_mothers_monthly_income');
            $o->educationLevel = $request->input('fhs_mothers_edu_attainment');

            // Dummy
            $o->fatherDOB      = date('Y-m-d H:i:s');
            $o->skills         = "empty";
            $o->course         = "empty";
            $o->grade          = 0;
            $o->save();
            
            $o = new StudentsFamily;
            $o->id            = $request->input('pi_student_id');
            $o->father_s_Name = $fathers_family_name.', '.$fathers_given_name.' '.$fathers_middle_name;
            $o->mother_s_Name = $mothers_family_name.', '.$mothers_given_name.' '.$mothers_middle_name;
            $o->save();

            $o = new StudentsFamilyDetails;
            $o->id                         = $request->input('pi_student_id');
            $o->numberofBrothers           = $request->input('fhs_number_brothers');
            $o->numberofSisters            = $request->input('fhs_number_sisters');
            $o->didBrother_SisterDroppedoutofSchool = $request->input('fhs_brother_sister_dropout_school');
            $o->reason                     = $request->input('fhs_brother_sister_dropout_school_reason');
            $o->familyMemComOrgaAffiliated = $request->input('fhs_family_members_affiliated_with_community_organization');
            $o->organisationName           = $request->input('fhs_name_of_organization');
            $o->save();

            $o = new PersonsDwellingDetails;
            $o->id                = $request->input('pi_student_id');
            $o->dwellingPlaceDesc = $request->input('iad_dwelling');
            $o->othersSpecify     = $request->input('iad_dwelling_specify');
            $o->save();
            
            $o = new PersonsToiletType;
            $o->id                    = $request->input('pi_student_id');
            $o->toiletTypeDescription = $request->input('iad_toilet_type');
            $o->othersSpecify         = $request->input('iad_toilet_type_specify');
            $o->save();
            
            $o = new PersonsSourceOfWater;
            $o->id              = $request->input('pi_student_id');
            $o->waterSourceDesc = $request->input('iad_source_of_water');
            $o->othersSpecify   = $request->input('iad_source_of_water_specify');
            $o->save();

            $o = new PersonsObjectsAtHome;
            $o->id              = $request->input('pi_student_id');
            $o->specificObjects = $request->input('iad_objects_at_home');
            $o->othersSpecify   = $request->input('iad_objects_at_home_specify');
            $o->save();

            $o = new PersonsExtraCurricular;
            $o->id      = $request->input('pi_student_id');
            $o->details = $request->input('extra_curricular');
            $o->save();
        } catch (\Exception $e) {
            return response(["message"=> $e->getMessage()], 400)
                  ->header('Content-Type', 'text/plain');
        }

        return response(["message"=>"Successfully Enrolled!"], 200)
                  ->header('Content-Type', 'application/json');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
