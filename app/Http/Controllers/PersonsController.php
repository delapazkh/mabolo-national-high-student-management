<?php

namespace App\Http\Controllers;

use App\Models\Persons\Persons;
use App\Models\Persons\PersonsSchooledData;
use App\Models\Students\StudentsOtherCredentialsPresented;
use App\Models\Students\StudentsEligibilityJHSEnrollment;
use Illuminate\Http\Request;

class PersonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('persons.index');
    }

    public function persons()
    {
        $persons = Persons::all();
        return response($persons, 200)
                  ->header('Content-Type', 'application/json');
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
        // we dont use this
    }

    public function search($keyword)
    {
        $persons = Persons::where('givenName', 'like', '%'.$keyword.'%')->orWhere('middleName', 'like', '%'.$keyword.'%')->get();
        return response($persons, 200)
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
        return view('persons.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showAPI($id)
    {
        $person = Persons::find($id);
        $personsSchooledData = PersonsSchooledData::find($person->id);
        $studentsOtherCredentialsPresented = StudentsOtherCredentialsPresented::find($person->id);
        $studentsEligibilityJHSEnrollment = StudentsEligibilityJHSEnrollment::find($person->id);

        $data = [
            'person'                    => $person, 
            'school_data'               => $personsSchooledData,
            'otherCredentialsPresented' => $studentsOtherCredentialsPresented,
            'eligibilityJHSEnrollment'  => $studentsEligibilityJHSEnrollment
        ];

        return response($data, 200)
                  ->header('Content-Type', 'application/json');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // we dont use this
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
        // we dont use this
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // we dont use this
    }
}
