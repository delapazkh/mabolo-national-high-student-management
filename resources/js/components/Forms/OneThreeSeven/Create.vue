<template>
  <span>
    <div v-if="step1" >
      <div class="row">
        <div class="col-md-12">
          <table width="100%">
            <tr>
              <td>Create a 137 form on which student:</td>
              <td>
                <input name="search_student" type="text" class="form-control" v-model="search_keyword" @input="searchStudent()" placeholder="search by first name and last name">
              </td>
            </tr>
          </table>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">First name</th>
                <th scope="col">Middle name</th>
                <th scope="col">Last name</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="student in students" style="cursor: pointer;">
                <th scope="row">{{student.id}}</th>
                <td>{{student.givenName}} {{student.name_extension}}</td>
                <td>{{student.middleName}}</td>
                <td>{{student.lastName}}</td>
                <td><button type="button" class="btn btn-primary" @click="chooseStudent(student.id)">Choose</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <form v-if="step2" method="post" v-on:submit.prevent="submitForm">
      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8" style="text-align:center">
          <div class="card-header">
            Republic of the Philippines <br>
            Department of Education
            <h4 class="card-title">
            Learner Permanent Record for Junior High School (SF10-JHS)
            </h4>
            <i>(Formerly Form 137)</i>
            <h5 class="card-title">
            Learner's Information
            </h5>
          </div>
        </div>
        <div class="col-md-2">
        </div>
      </div>

      <br><br>

      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
              <button type="submit" class="btn btn-primary">Submit 137 form</button>
              <button type="button" class="btn btn-warning" @click="chooseAnother">Change student</button>
              <a href="/enrollment" class="btn btn-link">
                <i class="fas fa-long-arrow-alt-left" style="margin-right: 5px"></i> 
                Back to list
              </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-success" role="alert" v-if="success_message">
            {{success_message}}
          </div>
          <div class="alert alert-danger" role="alert" v-if="error_message">
            {{error_message}}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          Student ID (<i>To edit this info go to <a v-bind:href="'/students/'+student_id">{{learners_info_first_name}} {{learners_info_name_extension}} {{learners_info_middle_name}} {{learners_info_last_name}}</a></i>)
          <input name="student_id" v-model="student_id" type="hidden" class="form-control">
          <p class="form-control" disabled="disabled">#{{student_id}}</p>
          <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.student_id) ? array_of_errors.student_id[0]: '' }}</small>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          Last name
          <input name="learners_info_last_name" v-model="learners_info_last_name" type="hidden" class="form-control">
          <p class="form-control" disabled="disabled">{{learners_info_last_name}}</p>
          <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.learners_info_last_name) ? array_of_errors.learners_info_last_name[0]: '' }}</small>
        </div>
        <div class="col-md-4">
          First name
          <input name="learners_info_first_name" v-model="learners_info_first_name" type="hidden" class="form-control">
          <p class="form-control" disabled="disabled">{{learners_info_first_name}}</p>
          <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.learners_info_first_name) ? array_of_errors.learners_info_first_name[0]: '' }}</small>
        </div>
        <div class="col-md-2">
          Name Extn. (Jr, I, II)
          <input name="learners_info_name_extension" v-model="learners_info_name_extension" type="hidden" class="form-control">
          <p class="form-control" disabled="disabled">{{learners_info_name_extension}}</p>
          <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.learners_info_name_extension) ? array_of_errors.learners_info_name_extension[0]: '' }}</small>
        </div>
        <div class="col-md-2">
          Middle name
          <input name="learners_info_middle_name" v-model="learners_info_middle_name" type="hidden" class="form-control">
          <p class="form-control" disabled="disabled">{{learners_info_middle_name}}</p>
          <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.learners_info_middle_name) ? array_of_errors.learners_info_middle_name[0]: '' }}</small>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          Learn Reference Number (LRN): 
          <input name="learners_info_lrn" v-model="learners_info_lrn" type="hidden" class="form-control">
          <p class="form-control" disabled="disabled">{{learners_info_lrn}}</p>
          <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.learners_info_lrn) ? array_of_errors.learners_info_lrn[0]: '' }}</small>
        </div>
        <div class="col-md-4">
          Birthdate 
          <input name="learners_info_birthdate" v-model="learners_info_birthdate" type="hidden" class="form-control" placeholder="(mm/dd/yyyy)">
          <p class="form-control" disabled="disabled">{{learners_info_birthdate}}</p>
          <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.learners_info_birthdate) ? array_of_errors.learners_info_birthdate[0]: '' }}</small>
        </div>
        <div class="col-md-4">
          Sex
          <p class="form-control" disabled="disabled">{{learners_info_sex}}</p>
          <!-- <select name="learners_info_sex" class="form-control">
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select> -->
          <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.learners_info_sex) ? array_of_errors.learners_info_sex[0]: '' }}</small>
        </div>
      </div>

      <br>

      <div class="row" v-show="eligibility_exist || ocp_exist">
        <div class="col-md-12" style="text-align:center">
          <div class="alert alert-info" role="alert">
            We have detected that <a v-bind:href="'/students/'+student_id" style="color: white;">{{learners_info_first_name}} {{learners_info_name_extension}} {{learners_info_middle_name}} {{learners_info_last_name}}</a> has already an existing 137 form.
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12" style="text-align:center">
          <h4 class="card-title">
          Eligibility for JHS Enrollment
          </h4>
        </div>
      </div>

      <br>

      <div style="border-style: solid;border-width: 1px; padding: 10px 10px">
        <div class="row">
          <div class="col-md-4">
            <input name="eligibility_elementary_school_completer" v-model="eligibility.elementarySchoolCompleter" type="checkbox" class="form-control"> 
            Elementary School Completer 
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.eligibility_elementary_school_completer) ? array_of_errors.eligibility_elementary_school_completer[0]: '' }}</small>
          </div>
          <div class="col-md-4">
            General Average: 
            <input name="eligibility_general_average" type="text" v-model="eligibility.generalAverage" class="form-control" placeholder="">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.eligibility_general_average) ? array_of_errors.eligibility_general_average[0]: '' }}</small>
          </div>
          <div class="col-md-4">
            Citation: 
            <input name="eligibility_citation"  v-model="eligibility.citation" type="text" class="form-control" placeholder="(If any)">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.eligibility_citation) ? array_of_errors.eligibility_citation[0]: '' }}</small>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            Name of Elementary School:
            <input name="eligibility_name_of_elementary_school" v-model="eligibility.nameOfElementarySchool" type="text" class="form-control">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.eligibility_name_of_elementary_school) ? array_of_errors.eligibility_name_of_elementary_school[0]: '' }}</small>
          </div>
          <div class="col-md-4">
            School ID:
            <input name="eligibility_school_id"  v-model="eligibility.schoolID"  type="text" class="form-control" placeholder="">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.eligibility_school_id) ? array_of_errors.eligibility_school_id[0]: '' }}</small>
          </div>
          <div class="col-md-4">
            Address of School:
            <input name="eligibility_address_of_school"  v-model="eligibility.addressOfSchool"  type="text" class="form-control" placeholder="">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.eligibility_address_of_school) ? array_of_errors.eligibility_address_of_school[0]: '' }}</small>
          </div>
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col-md-12">
          Other credentials presented
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          PEPT Passer
          <input name="other_creds_pept_passer" v-model="ocp.ALS_A_and_E_passer" type="checkbox" class="form-control"> 
          <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.other_creds_pept_passer) ? array_of_errors.other_creds_pept_passer[0]: '' }}</small>
        </div>
        <div class="col-md-2">
          Rating:
        <input name="other_creds_pept_passer_rating" v-model="ocp.ALS_A_and_E_passerRating" type="text" class="form-control" placeholder="">
          <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.other_creds_pept_passer_rating) ? array_of_errors.other_creds_pept_passer_rating[0]: '' }}</small>
        </div>
        <div class="col-md-2">
          ALS A & E Passer
          <input name="other_creds_als_a_and_e_passer" v-model="ocp.peptPasser" type="checkbox" class="form-control">
          <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.other_creds_als_a_and_e_passer) ? array_of_errors.other_creds_als_a_and_e_passer[0]: '' }}</small>  
        </div>
        <div class="col-md-2">
          Rating:
          <input name="other_creds_als_a_and_e_passer_rating" v-model="ocp.peptPasserRating" type="text" class="form-control" placeholder="">
          <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.other_creds_als_a_and_e_passer_rating) ? array_of_errors.other_creds_als_a_and_e_passer_rating[0]: '' }}</small>  
        </div>
        <div class="col-md-4">
          <input name="other_creds_others" v-model="ocp.others" type="checkbox" class="form-control"> 
          Others (Pls. Specify)
          <input name="other_creds_others_specify"  v-model="ocp.othersSpecify" type="text" class="form-control">
          <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.other_creds_others_specify) ? array_of_errors.other_creds_others_specify[0]: '' }}</small>  
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          Date of Examination/Assesment:
          <input name="date_of_examination" v-model="ocp.dateExaminationOrAssesment" type="date" class="form-control" placeholder="(mm/dd/yyyy)"> 
          <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.date_of_examination) ? array_of_errors.date_of_examination[0]: '' }}</small>  
        </div>
        <div class="col-md-6">
          Name and address of Testing Center:
          <input name="name_address_of_testing_center" v-model="ocp.nameAddressTestingCenter" type="text" class="form-control" placeholder="">
          <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.name_address_of_testing_center) ? array_of_errors.name_address_of_testing_center[0]: '' }}</small>  
        </div>
      </div>

      <br>

      <div class="row" style="display:none;">
        <div class="col-md-12" style="text-align:center">
          <h4 class="card-title">
          Schoolastic Record
          </h4>
        </div>
      </div>

      <br>

      <div style="display:none; border-style: solid;border-width: 1px;padding: 10px 10px">
        <div class="row">
          <div class="col-md-4">
            School:
            <input name="sr_school" type="text" class="form-control"> 
          </div>
          <div class="col-md-2">
            School ID:
            <input name="sr_school_id" type="text" class="form-control" placeholder="">
          </div>
          <div class="col-md-2">
            District
            <input name="sr_district" type="text" class="form-control"> 
          </div>
          <div class="col-md-2">
            Division:
            <input name="sr_division" type="text" class="form-control" placeholder="">
          </div>
          <div class="col-md-2">
            Region:
            <input name="sr_region" type="text" class="form-control" placeholder="">
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            Classified as Grade:
            <input name="sr_school" type="text" class="form-control"> 
          </div>
          <div class="col-md-2">
            Section:
            <input name="sr_school_id" type="text" class="form-control" placeholder="">
          </div>
          <div class="col-md-2">
            School Year:
            <input name="sr_district" type="text" class="form-control"> 
          </div>
          <div class="col-md-3">
            Name of Adviser/Teacher:
            <input name="sr_division" type="text" class="form-control" placeholder="">
          </div>
          <div class="col-md-2">
            Signature:
            <input name="sr_region" type="text" class="form-control" placeholder="">
          </div>
        </div>

        <br>

        <div class="row">
          <table class="table" style="margin: 15px;">
            <thead class="thead-dark">
              <tr>
                <th scope="col" rowspan="2">Learning Areas</th>
                <th scope="col" colspan="4" style="text-align: center;">Qaulity Rating</th>
                <th scope="col" rowspan="2">Final Rating</th>
                <th scope="col" rowspan="2">Remarks</th>
              </tr>
              <tr>
                <th scope="col">1</th>
                <th scope="col">2</th>
                <th scope="col">3</th>
                <th scope="col">4</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Filipino</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">English</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">Mathematics</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">Science</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">Araling Panlipunan (AP)</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">Edukasyon sa Pagpakatao (EsP)</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">Technology and Livelihood Education (TLE)</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">MAPEH</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">→ Music</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">→ Arts</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">→ Physical Education</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">→ Health</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th></th>
                <td colspan="4" style="text-align: center;">General Average</td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="row">
          <table class="table" style="margin: 15px;">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Remedial Classes</th>
                <th scope="col" colspan="6" style="text-align: center;">
                  Conducted from <input name="remedial_from_date" type="date" class="form-control" placeholder=""> 
                  to <input name="remedial_to_date" type="date" class="form-control" placeholder=""></th>
              </tr>
              <tr>
                <th scope="col">Subject</th>
                <th scope="col">Final Rating</th>
                <th scope="col">Remedial Class Mark</th>
                <th scope="col">Recomputed Final</th>
                <th scope="col">Remarks</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <br>
      <br>

      <div style="display: none; border-style: solid;border-width: 1px;padding: 10px 10px">
        <div class="row">
          <div class="col-md-4">
            School:
            <input name="sr_school" type="text" class="form-control"> 
          </div>
          <div class="col-md-2">
            School ID:
            <input name="sr_school_id" type="text" class="form-control" placeholder="">
          </div>
          <div class="col-md-2">
            District
            <input name="sr_district" type="text" class="form-control"> 
          </div>
          <div class="col-md-2">
            Division:
            <input name="sr_division" type="text" class="form-control" placeholder="">
          </div>
          <div class="col-md-2">
            Region:
            <input name="sr_region" type="text" class="form-control" placeholder="">
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            Classified as Grade:
            <input name="sr_school" type="text" class="form-control"> 
          </div>
          <div class="col-md-2">
            Section:
            <input name="sr_school_id" type="text" class="form-control" placeholder="">
          </div>
          <div class="col-md-2">
            School Year:
            <input name="sr_district" type="text" class="form-control"> 
          </div>
          <div class="col-md-3">
            Name of Adviser/Teacher:
            <input name="sr_division" type="text" class="form-control" placeholder="">
          </div>
          <div class="col-md-2">
            Signature:
            <input name="sr_region" type="text" class="form-control" placeholder="">
          </div>
        </div>

        <br>

        <div class="row">
          <table class="table" style="margin: 15px;">
            <thead class="thead-dark">
              <tr>
                <th scope="col" rowspan="2">Learning Areas</th>
                <th scope="col" colspan="4" style="text-align: center;">Qaulity Rating</th>
                <th scope="col" rowspan="2">Final Rating</th>
                <th scope="col" rowspan="2">Remarks</th>
              </tr>
              <tr>
                <th scope="col">1</th>
                <th scope="col">2</th>
                <th scope="col">3</th>
                <th scope="col">4</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Filipino</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">English</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">Mathematics</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">Science</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">Araling Panlipunan (AP)</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">Edukasyon sa Pagpakatao (EsP)</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">Technology and Livelihood Education (TLE)</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">MAPEH</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">→ Music</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">→ Arts</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">→ Physical Education</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">→ Health</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th></th>
                <td colspan="4" style="text-align: center;">General Average</td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="row">
          <table class="table" style="margin: 15px;">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Remedial Classes</th>
                <th scope="col" colspan="6" style="text-align: center;">
                  Conducted from <input name="remedial_from_date" type="date" class="form-control" placeholder=""> 
                  to <input name="remedial_to_date" type="date" class="form-control" placeholder=""></th>
              </tr>
              <tr>
                <th scope="col">Subject</th>
                <th scope="col">Final Rating</th>
                <th scope="col">Remedial Class Mark</th>
                <th scope="col">Recomputed Final</th>
                <th scope="col">Remarks</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <br>
      <br>

      <div style="display: none; border-style: solid;border-width: 1px;padding: 10px 10px">
        <div class="row">
          <div class="col-md-12" style="text-align:center">
            <h4 class="card-title">
            Certification
            </h4>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            I certify that this is a true record of 
            <input name="array1_cert_fullname" v-model="array1_cert_fullname" type="text" class="form-control">
          </div>
          <div class="col-md-3">
            with LRN 
            <input name="array1_cert_LRN" v-model="array1_cert_LRN" type="text" class="form-control">
          </div>
          <div class="col-md-5">
            and that he/she is eligible for admission to Grade 
            <input name="array1_cert_grade" v-model="array1_cert_grade" type="text" class="form-control">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            Name of School:
            <input name="array1_cert_name_of_school" v-model="array1_cert_name_of_school" type="text" class="form-control">
          </div>
          <div class="col-md-4">
            School ID:
            <input name="array1_cert_school_id" v-model="array1_cert_school_id" type="text" class="form-control">
          </div>
          <div class="col-md-4">
            Last School Year attended:
            <input name="array1_cert_last_school_year_attended" v-model="array1_cert_last_school_year_attended" type="text" class="form-control">
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            Date
            <input name="array1_cert_date" v-model="array1_cert_date" type="date" class="form-control">
          </div>
          <div class="col-md-5">
            Name of Principal/School Head over printed name:
            <input name="array1_cert_principal_name" v-model="array1_cert_principal_name" type="text" class="form-control">
          </div>
          <div class="col-md-4">
            Affix School here
            <input name="array1_cert_affix_school_here" v-model="array1_cert_affix_school_here" type="text" class="form-control">
          </div>
        </div>
      </div>

      <br>
      <br>

      <div style="display: none; border-style: solid;border-width: 1px;padding: 10px 10px">
        <div class="row">
          <div class="col-md-4">
            School:
            <input name="sr_school" type="text" class="form-control"> 
          </div>
          <div class="col-md-2">
            School ID:
            <input name="sr_school_id" type="text" class="form-control" placeholder="">
          </div>
          <div class="col-md-2">
            District
            <input name="sr_district" type="text" class="form-control"> 
          </div>
          <div class="col-md-2">
            Division:
            <input name="sr_division" type="text" class="form-control" placeholder="">
          </div>
          <div class="col-md-2">
            Region:
            <input name="sr_region" type="text" class="form-control" placeholder="">
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            Classified as Grade:
            <input name="sr_school" type="text" class="form-control"> 
          </div>
          <div class="col-md-2">
            Section:
            <input name="sr_school_id" type="text" class="form-control" placeholder="">
          </div>
          <div class="col-md-2">
            School Year:
            <input name="sr_district" type="text" class="form-control"> 
          </div>
          <div class="col-md-3">
            Name of Adviser/Teacher:
            <input name="sr_division" type="text" class="form-control" placeholder="">
          </div>
          <div class="col-md-2">
            Signature:
            <input name="sr_region" type="text" class="form-control" placeholder="">
          </div>
        </div>

        <br>

        <div class="row">
          <table class="table" style="margin: 15px;">
            <thead class="thead-dark">
              <tr>
                <th scope="col" rowspan="2">Learning Areas</th>
                <th scope="col" colspan="4" style="text-align: center;">Qaulity Rating</th>
                <th scope="col" rowspan="2">Final Rating</th>
                <th scope="col" rowspan="2">Remarks</th>
              </tr>
              <tr>
                <th scope="col">1</th>
                <th scope="col">2</th>
                <th scope="col">3</th>
                <th scope="col">4</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Filipino</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">English</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">Mathematics</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">Science</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">Araling Panlipunan (AP)</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">Edukasyon sa Pagpakatao (EsP)</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">Technology and Livelihood Education (TLE)</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">MAPEH</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">→ Music</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">→ Arts</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">→ Physical Education</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">→ Health</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th></th>
                <td colspan="4" style="text-align: center;">General Average</td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="row">
          <table class="table" style="margin: 15px;">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Remedial Classes</th>
                <th scope="col" colspan="6" style="text-align: center;">
                  Conducted from <input name="remedial_from_date" type="date" class="form-control" placeholder=""> 
                  to <input name="remedial_to_date" type="date" class="form-control" placeholder=""></th>
              </tr>
              <tr>
                <th scope="col">Subject</th>
                <th scope="col">Final Rating</th>
                <th scope="col">Remedial Class Mark</th>
                <th scope="col">Recomputed Final</th>
                <th scope="col">Remarks</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <br>
      <br>

      <div style="display: none; border-style: solid;border-width: 1px;padding: 10px 10px">
        <div class="row">
          <div class="col-md-4">
            School:
            <input name="sr_school" type="text" class="form-control"> 
          </div>
          <div class="col-md-2">
            School ID:
            <input name="sr_school_id" type="text" class="form-control" placeholder="">
          </div>
          <div class="col-md-2">
            District
            <input name="sr_district" type="text" class="form-control"> 
          </div>
          <div class="col-md-2">
            Division:
            <input name="sr_division" type="text" class="form-control" placeholder="">
          </div>
          <div class="col-md-2">
            Region:
            <input name="sr_region" type="text" class="form-control" placeholder="">
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            Classified as Grade:
            <input name="sr_school" type="text" class="form-control"> 
          </div>
          <div class="col-md-2">
            Section:
            <input name="sr_school_id" type="text" class="form-control" placeholder="">
          </div>
          <div class="col-md-2">
            School Year:
            <input name="sr_district" type="text" class="form-control"> 
          </div>
          <div class="col-md-3">
            Name of Adviser/Teacher:
            <input name="sr_division" type="text" class="form-control" placeholder="">
          </div>
          <div class="col-md-2">
            Signature:
            <input name="sr_region" type="text" class="form-control" placeholder="">
          </div>
        </div>

        <br>

        <div class="row">
          <table class="table" style="margin: 15px;">
            <thead class="thead-dark">
              <tr>
                <th scope="col" rowspan="2">Learning Areas</th>
                <th scope="col" colspan="4" style="text-align: center;">Qaulity Rating</th>
                <th scope="col" rowspan="2">Final Rating</th>
                <th scope="col" rowspan="2">Remarks</th>
              </tr>
              <tr>
                <th scope="col">1</th>
                <th scope="col">2</th>
                <th scope="col">3</th>
                <th scope="col">4</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Filipino</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">English</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">Mathematics</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">Science</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">Araling Panlipunan (AP)</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">Edukasyon sa Pagpakatao (EsP)</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">Technology and Livelihood Education (TLE)</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">MAPEH</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">→ Music</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">→ Arts</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">→ Physical Education</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">→ Health</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th></th>
                <td colspan="4" style="text-align: center;">General Average</td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="row">
          <table class="table" style="margin: 15px;">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Remedial Classes</th>
                <th scope="col" colspan="6" style="text-align: center;">
                  Conducted from <input name="remedial_from_date" type="date" class="form-control" placeholder=""> 
                  to <input name="remedial_to_date" type="date" class="form-control" placeholder=""></th>
              </tr>
              <tr>
                <th scope="col">Subject</th>
                <th scope="col">Final Rating</th>
                <th scope="col">Remedial Class Mark</th>
                <th scope="col">Recomputed Final</th>
                <th scope="col">Remarks</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>


      <br>
      <br>

      <div style="display: none; border-style: solid;border-width: 1px;padding: 10px 10px">
        <div class="row">
          <div class="col-md-4">
            School:
            <input name="sr_school" type="text" class="form-control"> 
          </div>
          <div class="col-md-2">
            School ID:
            <input name="sr_school_id" type="text" class="form-control" placeholder="">
          </div>
          <div class="col-md-2">
            District
            <input name="sr_district" type="text" class="form-control"> 
          </div>
          <div class="col-md-2">
            Division:
            <input name="sr_division" type="text" class="form-control" placeholder="">
          </div>
          <div class="col-md-2">
            Region:
            <input name="sr_region" type="text" class="form-control" placeholder="">
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            Classified as Grade:
            <input name="sr_school" type="text" class="form-control"> 
          </div>
          <div class="col-md-2">
            Section:
            <input name="sr_school_id" type="text" class="form-control" placeholder="">
          </div>
          <div class="col-md-2">
            School Year:
            <input name="sr_district" type="text" class="form-control"> 
          </div>
          <div class="col-md-3">
            Name of Adviser/Teacher:
            <input name="sr_division" type="text" class="form-control" placeholder="">
          </div>
          <div class="col-md-2">
            Signature:
            <input name="sr_region" type="text" class="form-control" placeholder="">
          </div>
        </div>

        <br>

        <div class="row">
          <table class="table" style="margin: 15px;">
            <thead class="thead-dark">
              <tr>
                <th scope="col" rowspan="2">Learning Areas</th>
                <th scope="col" colspan="4" style="text-align: center;">Qaulity Rating</th>
                <th scope="col" rowspan="2">Final Rating</th>
                <th scope="col" rowspan="2">Remarks</th>
              </tr>
              <tr>
                <th scope="col">1</th>
                <th scope="col">2</th>
                <th scope="col">3</th>
                <th scope="col">4</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Filipino</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">English</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">Mathematics</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">Science</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">Araling Panlipunan (AP)</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">Edukasyon sa Pagpakatao (EsP)</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">Technology and Livelihood Education (TLE)</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">MAPEH</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">→ Music</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">→ Arts</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">→ Physical Education</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th scope="row">→ Health</th>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <th></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th></th>
                <td colspan="4" style="text-align: center;">General Average</td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="row">
          <table class="table" style="margin: 15px;">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Remedial Classes</th>
                <th scope="col" colspan="6" style="text-align: center;">
                  Conducted from <input name="remedial_from_date" type="date" class="form-control" placeholder=""> 
                  to <input name="remedial_to_date" type="date" class="form-control" placeholder=""></th>
              </tr>
              <tr>
                <th scope="col">Subject</th>
                <th scope="col">Final Rating</th>
                <th scope="col">Remedial Class Mark</th>
                <th scope="col">Recomputed Final</th>
                <th scope="col">Remarks</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
              <tr>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
                <td><input name="school_enrolled" type="text" class="form-control" placeholder=""></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <br>
      <br>

      <div style="display: none; border-style: solid;border-width: 1px;padding: 10px 10px">
        <div class="row">
          <div class="col-md-12" style="text-align:center">
            <h4 class="card-title">
            Certification
            </h4>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            I certify that this is a true record of 
            <input name="cert_fullname" type="text" class="form-control">
          </div>
          <div class="col-md-3">
            with LRN 
            <input name="cert_LRN" type="text" class="form-control">
          </div>
          <div class="col-md-5">
            and that he/she is eligible for admission to Grade 
            <input name="cert_grade" type="text" class="form-control">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            Name of School:
            <input name="cert_name_of_school" type="text" class="form-control">
          </div>
          <div class="col-md-4">
            School ID:
            <input name="cert_school_id" type="text" class="form-control">
          </div>
          <div class="col-md-4">
            Last School Year attended:
            <input name="cert_last_school_year_attended" type="text" class="form-control">
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            Date
            <input name="cert_date" type="date" class="form-control">
          </div>
          <div class="col-md-5">
            Name of Principal/School Head over printed name:
            <input name="cert_principal_name" type="text" class="form-control">
          </div>
          <div class="col-md-4">
            Affix School here
            <input name="cert_affix_school_here" type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-success" role="alert" v-if="success_message">
            {{success_message}}
          </div>
          <div class="alert alert-danger" role="alert" v-if="error_message">
            {{error_message}}
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-12">
          <br><br><br><br><br><br>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
              <button type="submit" class="btn btn-primary">Submit 137 form</button>
              <a href="/enrollment" class="btn btn-link">
                <i class="fas fa-long-arrow-alt-left" style="margin-right: 5px"></i>
                Back to list
              </a>
          </div>
        </div>
      </div>
    </form>
  </span>
</template>

<script>
export default {
    data: function() {
      return {
        success_message: "",
        error_message: "",

        // step 1
        step1: true,
        students: [],
        search_keyword: '',

        // step 2
        step2: false,
        // success_message: "",
        // error_message: "",

        // 137 form
        student_id: '',
        learners_info_last_name: '',
        learners_info_first_name: '',
        learners_info_name_extension: '',
        learners_info_middle_name: '',
        learners_info_lrn: '',
        learners_info_birthdate: '',
        learners_info_sex: '',

        // Eligibility
        eligibility: {
          addressOfSchool: '',
          citation: '',
          elementarySchoolCompleter: 'off',
          generalAverage: '',
          nameOfElementarySchool: '',
          schoolID: ''
        },
        eligibility_exist: false,

        // Other credentials presented
        ocp: {
            ALS_A_and_E_passer: '',
            ALS_A_and_E_passerRating: '',
            dateExaminationOrAssesment: '', 
            nameAddressTestingCenter: '',
            others: '',
            othersSpecify: '',
            peptPasser: 'off',
            peptPasserRating: '',
        },
        ocp_exist: false,


        // Certification
        array1_cert_fullname: '',
        array1_cert_LRN: '',
        array1_cert_grade: '',
        array1_cert_name_of_school: '',
        array1_cert_school_id: '',
        array1_cert_last_school_year_attended: '',
        array1_cert_date: '',
        array1_cert_principal_name: '',
        array1_cert_affix_school_here: '',


        array_of_errors: {
          date_of_examination: [""],
          eligibility_address_of_school: [""],
          eligibility_citation: [""],
          eligibility_general_average: [""],
          eligibility_name_of_elementary_school: [""],
          eligibility_school_id: [""],
          learners_info_lrn: [""],
          learners_info_name_extension: [""],
          learners_info_sex: [""],
          name_address_of_testing_center: [""]
        }
      }
    },
    created: function(){
      this.getStudents()
    },
    methods: {
      getStudents: function(){
        axios.get('/students/get/all').then(function (response) {
          // console.log(response)
          this.students = response.data
        }.bind(this)).catch(function (error) {
        }.bind(this))
      },
      searchStudent: function(){
        axios.get('/students/'+this.search_keyword+'/search').then(function (response) {
          // console.log(response.data)
          this.students = response.data
        }.bind(this)).catch(function (error) {
          console.log(response)
        }.bind(this))
      },
      chooseStudent: function(id){
        axios.get('/students/'+id+'/show').then(function (response) {
          let person = response.data.person
          let school_data = response.data.school_data
          let other_credentials_presented = response.data.otherCredentialsPresented
          let eligibility_jhs_enrollment = response.data.eligibilityJHSEnrollment

          console.log(response.data)

          if(other_credentials_presented){
            this.ocp_exist = true

            this.ocp.ALS_A_and_E_passer         = other_credentials_presented.ALS_A_and_E_passer
            this.ocp.ALS_A_and_E_passerRating   = other_credentials_presented.ALS_A_and_E_passerRating
            this.ocp.dateExaminationOrAssesment = other_credentials_presented.dateExaminationOrAssesment
            this.ocp.nameAddressTestingCenter   = other_credentials_presented.nameAddressTestingCenter
            this.ocp.others                     = other_credentials_presented.others
            this.ocp.othersSpecify              = other_credentials_presented.othersSpecify
            this.ocp.peptPasser                 = other_credentials_presented.peptPasser
            this.ocp.peptPasserRating           = other_credentials_presented.peptPasserRating
            console.log('not empty other_credentials_presented')
          }
          if(eligibility_jhs_enrollment){
            this.eligibility_exist = true
            this.eligibility.addressOfSchool           = eligibility_jhs_enrollment.addressOfSchool
            this.eligibility.citation                  = eligibility_jhs_enrollment.citation
            this.eligibility.elementarySchoolCompleter = eligibility_jhs_enrollment.elementarySchoolCompleter
            this.eligibility.generalAverage            = eligibility_jhs_enrollment.generalAverage
            this.eligibility.nameOfElementarySchool    = eligibility_jhs_enrollment.nameOfElementarySchool
            this.eligibility.schoolID                  = eligibility_jhs_enrollment.schoolID
            console.log('not empty eligibility_jhs_enrollment')
          }

          this.step1 = false
          this.step2 = true


          this.student_id = person.id
          this.learners_info_last_name = person.lastName
          this.learners_info_first_name = person.givenName
          this.learners_info_middle_name = person.middleName
          this.learners_info_lrn = school_data.lRN
          this.learners_info_birthdate = person.birthDate
          this.learners_info_sex = person.gender
          this.learners_info_name_extension = person.name_extension
        }.bind(this)).catch(function (error) {
          console.log(response)
        }.bind(this))
      },
      chooseAnother: function(){
          this.step2 = false
          this.step1 = true
      },
      submitForm: function(){
        this.clearErrors()

        axios.post('/forms/137/store', $('form').serialize()).then(function (response) {
          console.log(response)
          this.success_message = response.data.message
          this.error_message   = ""
        }.bind(this)).catch(function (error) {
          this.success_message = ""
          this.error_message   = error.response.data.message
          this.array_of_errors = error.response.data.errors
        }.bind(this))
      },
      clearErrors: function(){
        this.array_of_errors.date_of_examination = ['']
        this.array_of_errors.eligibility_address_of_school = ['']
        this.array_of_errors.eligibility_citation = ['']
        this.array_of_errors.eligibility_general_average = ['']
        this.array_of_errors.eligibility_name_of_elementary_school = ['']
        this.array_of_errors.eligibility_school_id = ['']
        this.array_of_errors.learners_info_lrn = ['']
        this.array_of_errors.learners_info_name_extension = ['']
        this.array_of_errors.learners_info_sex = ['']
        this.array_of_errors.name_address_of_testing_center   = ['']      
      }
    }
}
</script>
