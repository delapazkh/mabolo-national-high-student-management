<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students\StudentsOtherCredentialsPresented;
use App\Models\Students\StudentsEligibilityJHSEnrollment;


class OneThreeSevenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forms.one-three-seven.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // we dont use this
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            // Eligibility 
            'eligibility_elementary_school_completer' => 'in:on,off',
            'eligibility_general_average'             => 'required_if:eligibility_elementary_school_completer,==,on',
            'eligibility_citation'                    => 'required_if:eligibility_elementary_school_completer,==,on',
            'eligibility_name_of_elementary_school'   => 'required_if:eligibility_elementary_school_completer,==,on',
            'eligibility_school_id'                   => 'required_if:eligibility_elementary_school_completer,==,on',
            'eligibility_address_of_school'           => 'required_if:eligibility_elementary_school_completer,==,on',

            // Other credentials presented
            'other_creds_pept_passer'               => 'in:on,off',
            'other_creds_pept_passer_rating'        => 'required_if:other_creds_pept_passer,==,on',
            'other_creds_als_a_and_e_passer'        => 'in:on,off',
            'other_creds_als_a_and_e_passer_rating' => 'required_if:other_creds_als_a_and_e_passer,==,on',
            'other_creds_others'                    => 'in:on,off',
            'other_creds_others_specify'            => 'required_if:other_creds_others,==,on',
            'date_of_examination'                   => 'required|date',
            'name_address_of_testing_center'        => 'required',
        ]);

        try {
            $x = StudentsEligibilityJHSEnrollment::find($request->input('student_id'));
            if(!$x){
                $x = new StudentsEligibilityJHSEnrollment;
            }

                $x->id = $request->input('student_id');
                
                $x->elementarySchoolCompleter = $request->input('eligibility_elementary_school_completer');
                if($request->input('eligibility_elementary_school_completer') == 'on'){
                    $x->generalAverage            = $request->input('eligibility_general_average');
                    $x->citation                  = $request->input('eligibility_citation');
                    $x->nameOfElementarySchool    = $request->input('eligibility_name_of_elementary_school');
                    $x->schoolID                  = $request->input('eligibility_school_id');
                    $x->addressOfSchool           = $request->input('eligibility_address_of_school');
                    $x->save();
                }

            $o = StudentsOtherCredentialsPresented::find($request->input('student_id'));
            if(!$o){
                $o = new StudentsOtherCredentialsPresented;
            }

            $o->id = $request->input('student_id');

            $o->peptPasser = $request->input('other_creds_pept_passer');
            if($request->input('other_creds_pept_passer') == 'on'){
                $o->peptPasserRating = $request->input('other_creds_pept_passer_rating');
            }
            $o->ALS_A_and_E_passer = $request->input('other_creds_als_a_and_e_passer');
            if($request->input('other_creds_als_a_and_e_passer') == 'on'){
                $o->ALS_A_and_E_passerRating   = $request->input('other_creds_als_a_and_e_passer_rating');
            }
            $o->others = $request->input('other_creds_others');
            if($request->input('other_creds_others') == 'on'){
                $o->othersSpecify = $request->input('other_creds_others_specify');
            }

            $o->dateExaminationOrAssesment = $request->input('date_of_examination');
            $o->nameAddressTestingCenter   = $request->input('name_address_of_testing_center');
            $o->save();

        } catch (\Exception $e) {

            $o = StudentsOtherCredentialsPresented::find($request->input('pi_student_id'));
            if($o){ $o->delete(); }

            if($request->input('other_creds_pept_passer') == 'on'){
                $x = StudentsEligibilityJHSEnrollment::find($request->input('pi_student_id'));
                if($x){ $x->delete(); }
            }

            return response(["message"=> $e->getMessage()], 400)
                  ->header('Content-Type', 'application/json');
        }

        $name = $request->input('learners_info_first_name').' '.$request->input('learners_info_name_extension').' '.$request->input('learners_info_middle_name').' '.$request->input('learners_info_last_name');

        return response(["message" => "Successfully create 137 form for ".$name, "id" => intval($request->input('student_id'))], 200)
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
