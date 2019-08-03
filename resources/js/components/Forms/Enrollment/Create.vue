<template>
    <span>
    <form method="post" v-on:submit.prevent="submitForm">
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
              <button type="submit" class="btn btn-primary">Enroll Now</button>
              <a href="/students" class="btn btn-link">
                <i class="fas fa-long-arrow-alt-left" style="margin-right: 5px"></i> 
                To students list
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
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
          <div class="card-header">
            <h4 class="card-title">
            Student Personal and Family Background Questionnaire / Enrollment Form
            </h4>
          </div>
        </div>
        <div class="col-md-2">
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            School Enrolled
            <input name="school_enrolled" type="text" class="form-control">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.school_enrolled) ? array_of_errors.school_enrolled[0]: '' }}</small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Date
            <input name="school_enrolled_date" type="date" class="form-control">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.school_enrolled_date) ? array_of_errors.school_enrolled_date[0]: '' }}</small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            LRN
            <input name="school_enrolled_lrn" type="text" class="form-control">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.school_enrolled_lrn) ? array_of_errors.school_enrolled_lrn[0]: '' }}</small>
          </div>
        </div>
      </div>
      <div class="row" style="margin-left: 15px;">
        <div class="col-md-3">
          <div class="form-group">
            <input  type="radio" name="school_enrolled_student_status" value="old_student" class="form-check-input">
            <label class="form-check-label">Old Student</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <input type="radio" name="school_enrolled_student_status" value="new_student" class="form-check-input">
            <label class="form-check-label">New Student</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <input type="radio" name="school_enrolled_student_status" value="transferee" class="form-check-input">
            <label class="form-check-label">Transferee</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <input type="radio" name="school_enrolled_student_status" value="balik_aral" class="form-check-input">
            <label class="form-check-label">Balik Aral</label>
          </div>
        </div>
        <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.school_enrolled_student_status) ? array_of_errors.school_enrolled_student_status[0]: '' }}</small>
      </div>

      <!----------------------------- I. Personal Information ------------------------------>

      <div class="row">
        <div class="col-md-12">
          <h4 class="card-title">I. Personal Information</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            Student ID
            <input name="pi_student_id" type="text" class="form-control" placeholder="#">
        <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.pi_student_id) ? array_of_errors.pi_student_id[0]: '' }}</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            Birth date
            <input name="pi_birthdate" type="date" class="form-control">
        <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.pi_birthdate) ? array_of_errors.pi_birthdate[0]: '' }}</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            Enrollment date
            <input name="pi_enrollment_date" type="date" class="form-control">
        <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.pi_enrollment_date) ? array_of_errors.pi_enrollment_date[0]: '' }}</small>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            Family Name
            <input name="pi_family_name" type="text" class="form-control">
        <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.pi_family_name) ? array_of_errors.pi_family_name[0]: '' }}</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            Given Name
            <input name="pi_given_name" type="text" class="form-control">
        <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.pi_given_name) ? array_of_errors.pi_given_name[0]: '' }}</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            Middle Name
            <input name="pi_middle_name" type="text" class="form-control">
        <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.pi_middle_name) ? array_of_errors.pi_middle_name[0]: '' }}</small>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
            Name Extn. (Jr, I, II)
            <input name="pi_name_extension" type="text" class="form-control">
        <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.pi_name_extension) ? array_of_errors.pi_name_extension[0]: '' }}</small>
        </div>
        <div class="col-md-4">
          Sex
          <select name="pi_sex" class="form-control">
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
          <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.pi_sex) ? array_of_errors.pi_sex[0]: '' }}</small>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            House # / Street / Brgy.
            <input name="pi_direction_one" type="text" class="form-control">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.pi_direction_one) ? array_of_errors.pi_direction_one[0]: '' }}</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            Municipality / City
            <input name="pi_direction_two" type="text" class="form-control">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.pi_direction_two) ? array_of_errors.pi_direction_two[0]: '' }}</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            Region
            <input name="pi_direction_three" type="text" class="form-control">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.pi_direction_three) ? array_of_errors.pi_direction_three[0]: '' }}</small>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            Parent or Guardian
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            Family Name
            <input name="pi_guardian_family_name" type="text" class="form-control" placeholder="Guardians family name">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.pi_guardian_family_name) ? array_of_errors.pi_guardian_family_name[0]: '' }}</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            Given Name
            <input name="pi_guardian_given_name" type="text" class="form-control" placeholder="Guardians given name">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.pi_guardian_given_name) ? array_of_errors.pi_guardian_given_name[0]: '' }}</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            Middle Name
            <input name="pi_guardian_middle_name" type="text" class="form-control" placeholder="Guardians middle name">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.pi_guardian_middle_name) ? array_of_errors.pi_guardian_middle_name[0]: '' }}</small>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            Relation of student to the parent / guardian
            <input name="pi_relationship_to_student" type="text" class="form-control">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.pi_relationship_to_student) ? array_of_errors.pi_relationship_to_student[0]: '' }}</small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Contact number
            <input name="pi_guardian_contact_number" type="text" class="form-control" placeholder="Guardians contact number">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.pi_guardian_contact_number) ? array_of_errors.pi_guardian_contact_number[0]: '' }}</small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Occupation
            <input name="pi_guardian_occupation" type="text" class="form-control" placeholder="Guardians occupation">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.pi_guardian_occupation) ? array_of_errors.pi_guardian_occupation[0]: '' }}</small>
          </div>
        </div>
      </div>
        <div class="col-md-4">
          <div class="form-group">
            A member of 4 P's

            <select name="pi_member_of_4ps" class="form-control">
              <option value="No">No</option>
              <option value="Yes">Yes</option>
            </select>
              <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.pi_guardian_occupation) ? array_of_errors.pi_guardian_occupation[0]: '' }}</small>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            Enrolled as Grade
            <input name="pi_enrolled_as_grade" type="text" class="form-control">
              <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.pi_guardian_occupation) ? array_of_errors.pi_guardian_occupation[0]: '' }}</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            School last attended
            <input name="pi_school_last_attended" type="text" class="form-control">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.pi_school_last_attended) ? array_of_errors.pi_school_last_attended[0]: '' }}</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            School year
            <input name="pi_school_year" type="text" class="form-control">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.pi_school_year) ? array_of_errors.pi_school_year[0]: '' }}</small>
          </div>
        </div>
      </div>

      <!--------------------------- II. Edcuational Situation -------------------------------->

      <div class="row">
        <div class="col-md-12">
          <h4 class="card-title">II. Edcuational Situation</h4>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4" style="text-align: right;">
          Travel Time? (Check the nearest time from home to school):
          <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.es_travel_time) ? array_of_errors.es_travel_time[0]: '' }}</small>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="es_travel_time" type="checkbox" value="15 minutes" class="form-check-input">
            15 minutes
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="es_travel_time" type="checkbox" value="30 minutes" class="form-check-input">
            30 minutes
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="es_travel_time" type="checkbox" value="45 minutes" class="form-check-input">
            45 minutes
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="es_travel_time" type="checkbox" value="1 hour" class="form-check-input">
            1 hour
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="es_travel_time" type="checkbox" value="1 ½ hour" class="form-check-input">
            1 ½ hour
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="es_travel_time" type="checkbox" value="2 hours" class="form-check-input">
            2 hours
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <input name="es_travel_time" type="checkbox" value="over 2 hours" class="form-check-input">
            over 2 hours
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4" style="text-align: right;">
          Means of transportation to school?
          <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.es_transportation) ? array_of_errors.es_transportation[0]: '' }}</small>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="es_transportation" value="walking" type="checkbox" class="form-check-input">
            <i class="fas fa-hiking"></i> Walking
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="es_transportation" type="checkbox" value="bus" class="form-check-input">
            <i class="fas fa-bus"></i> Bus
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="es_transportation" type="checkbox" value="jeepney_or_van" class="form-check-input">
            <i class="fas fa-shuttle-van"></i> Jeepney / Van
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="es_transportation" type="checkbox" value="pedicab" class="form-check-input">
            <i class="fas fa-motorcycle"></i> Pedicab
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="es_transportation" type="checkbox" value="tricycle" class="form-check-input">
            <i class="fas fa-motorcycle"></i> Tricycle
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="es_transportation" type="checkbox" value="car" class="form-check-input">
            <i class="fas fa-car"></i> Car
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <input name="es_transportation" type="checkbox" value="others" class="form-check-input">
            <i class="fas fa-question"></i> Others
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.es_others_specify) ? array_of_errors.es_others_specify[0]: '' }}</small>
            <input name="es_others_specify" type="text" class="form-control" placeholder="please specify">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4" style="text-align: right;">
          Who help the student in doing homework?
          <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.es_help_for_homework) ? array_of_errors.es_help_for_homework[0]: '' }}</small>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="es_help_for_homework" value="no_one" type="checkbox" class="form-check-input">
            <i class="fas fa-user-alt-slash"></i> No one
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="es_help_for_homework" value="bro_or_sister" type="checkbox" class="form-check-input">
            <i class="fas fa-user-friends"></i> Bro/Sister
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="es_help_for_homework" value="mother" type="checkbox" class="form-check-input">
            <i class="fas fa-user-nurse"></i> Mother
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="es_help_for_homework" value="father" type="checkbox" class="form-check-input">
            <i class="fas fa-user-tie"></i> Father
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="es_help_for_homework" value="guardian" type="checkbox" class="form-check-input">
            <i class="fas fa-user-shield"></i> Guardian
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="es_help_for_homework" value="both_parents" type="checkbox" class="form-check-input">
            <i class="fas fa-user-friends"></i> Both Parents
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="es_help_for_homework" value="classmates" type="checkbox" class="form-check-input">
            <i class="fas fa-users"></i> Classmates
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          Has the student ever drop out of school?
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <select name="es_student_dropout_school" class="form-control">
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.es_student_dropout_school) ? array_of_errors.es_student_dropout_school[0]: '' }}</small>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-5">
          <div class="form-group">
            If Yes, how long?
            <input name="es_how_long_dropout" type="text" class="form-control">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.es_how_long_dropout) ? array_of_errors.es_how_long_dropout[0]: '' }}</small>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            What is/are the reason/s?
            <input name="es_dropout_reasons" type="text" class="form-control">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.es_dropout_reasons) ? array_of_errors.es_dropout_reasons[0]: '' }}</small>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            Stay with parents?
            <select name="es_stay_with_parents" class="form-control">
              <option value="No">No</option>
              <option value="Yes">Yes</option>
            </select>
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.es_stay_with_parents) ? array_of_errors.es_stay_with_parents[0]: '' }}</small>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-11">
          <div class="form-group">
            If No, what is the student's relationship with the person/s whom the student stays?
            <input name="es_relationship_staying" type="text" class="form-control">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.es_relationship_staying) ? array_of_errors.es_relationship_staying[0]: '' }}</small>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            Does the student work to support schooling costs?
            <select name="es_work_to_support" class="form-control">
              <option value="No">No</option>
              <option value="Yes">Yes</option>
            </select>
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.es_work_to_support) ? array_of_errors.es_work_to_support[0]: '' }}</small>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-11">
          <div class="form-group">
            If Yes, what is the work of the students?
            <input name="es_work_of_student" type="text" class="form-control">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.es_work_of_student) ? array_of_errors.es_work_of_student[0]: '' }}</small>
          </div>
        </div>
      </div>

<!-------------------------------- III. Family and Home Situation ---------------------------------->
      <div class="row">
        <div class="col-md-12">
          <h4 class="card-title">III. Family and Home Situation</h4>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <i class="fas fa-user-tie"></i> Fathers Info
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Family Name
            <input name="fhs_fathers_family_name" type="text" class="form-control" placeholder="Fathers family name">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.fhs_fathers_family_name) ? array_of_errors.fhs_fathers_family_name[0]: '' }}</small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Given Name
            <input name="fhs_fathers_given_name" type="text" class="form-control" placeholder="Fathers given name">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.fhs_fathers_given_name) ? array_of_errors.fhs_fathers_given_name[0]: '' }}</small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Middle Name
            <input name="fhs_fathers_middle_name" type="text" class="form-control" placeholder="Fathers middle name">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.fhs_fathers_middle_name) ? array_of_errors.fhs_fathers_middle_name[0]: '' }}</small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Is Father alive?
            <select name="fhs_fathers_death_status" class="form-control">
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.fhs_fathers_death_status) ? array_of_errors.fhs_fathers_death_status[0]: '' }}</small>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12" style="color:green">
          If Alive.
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            Age
            <input name="fhs_fathers_age" type="text" class="form-control" placeholder="Fathers age">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.fhs_fathers_age) ? array_of_errors.fhs_fathers_age[0]: '' }}</small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Religion
            <input name="fhs_fathers_religion" type="text" class="form-control" placeholder="Fathers religion">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.fhs_fathers_religion) ? array_of_errors.fhs_fathers_religion[0]: '' }}</small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Occupation
            <input name="fhs_fathers_occupation" type="text" class="form-control" placeholder="Fathers occupation">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.fhs_fathers_occupation) ? array_of_errors.fhs_fathers_occupation[0]: '' }}</small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Monthly Income
            <input name="fhs_fathers_monthly_income" type="text" class="form-control" placeholder="Fathers monthly income">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.fhs_fathers_monthly_income) ? array_of_errors.fhs_fathers_monthly_income[0]: '' }}</small>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            Fathers highest educational attainment
          <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.fhs_fathers_edu_attainment) ? array_of_errors.fhs_fathers_edu_attainment[0]: '' }}</small>
          </div>
        </div>
        <div class="col-md-9">
          <div class="form-group">
            <span style="margin-left: 20px;">
              <input name="fhs_fathers_edu_attainment" type="radio" value="elementary_level" class="form-check-input">
              Elementary Level
            </span>
            <span style="margin-left: 20px;">
              <input name="fhs_fathers_edu_attainment" type="radio" value="elementary_grad" class="form-check-input">
              Elementary Graduate
            </span>
            <span style="margin-left: 20px;">
              <input name="fhs_fathers_edu_attainment" type="radio" value="highschool_level" class="form-check-input">
              Highschool Level
            </span>
            <span style="margin-left: 20px;">
              <input name="fhs_fathers_edu_attainment" type="radio" value="highschool_grad" class="form-check-input">
              Highschool Graduate
            </span>
            <span style="margin-left: 20px;">
              <input name="fhs_fathers_edu_attainment" type="radio" value="college_level" class="form-check-input">
              College Level
            </span>
            <span style="margin-left: 20px;">
              <input name="fhs_fathers_edu_attainment" type="radio" value="college_grad" class="form-check-input">
              College Graduate
            </span>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <i class="fas fa-user-nurse"></i> Mothers Info
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Family Name
            <input name="fhs_mothers_family_name" type="text" class="form-control" placeholder="Mothers family name">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.fhs_mothers_family_name) ? array_of_errors.fhs_mothers_family_name[0]: '' }}</small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Given Name
            <input name="fhs_mothers_given_name" type="text" class="form-control" placeholder="Mothers given name">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.fhs_mothers_given_name) ? array_of_errors.fhs_mothers_given_name[0]: '' }}</small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Middle Name
            <input name="fhs_mothers_middle_name" type="text" class="form-control" placeholder="Mothers middle name">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.fhs_mothers_middle_name) ? array_of_errors.fhs_mothers_middle_name[0]: '' }}</small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Is Mother alive?
            <select name="fhs_mothers_death_status" class="form-control">
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.fhs_mothers_death_status) ? array_of_errors.fhs_mothers_death_status[0]: '' }}</small>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12" style="color:green">
          If Alive.
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            Age
            <input name="fhs_mothers_age" type="text" class="form-control" placeholder="Mothers age">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.fhs_mothers_age) ? array_of_errors.fhs_mothers_age[0]: '' }}</small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Religion
            <input name="fhs_mothers_religion" type="text" class="form-control" placeholder="Mothers religion">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.fhs_mothers_religion) ? array_of_errors.fhs_mothers_religion[0]: '' }}</small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Occupation
            <input name="fhs_mothers_occupation" type="text" class="form-control" placeholder="Mothers occupation">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.fhs_mothers_occupation) ? array_of_errors.fhs_mothers_occupation[0]: '' }}</small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Monthly Income
            <input name="fhs_mothers_monthly_income" type="text" class="form-control" placeholder="Mothers monthly Income">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.fhs_mothers_monthly_income) ? array_of_errors.fhs_mothers_monthly_income[0]: '' }}</small>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            Mothers highest educational attainment
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.fhs_mothers_edu_attainment) ? array_of_errors.fhs_mothers_edu_attainment[0]: '' }}</small>
          </div>
        </div>
        <div class="col-md-9">
          <div class="form-group">
            <span style="margin-left:20px;">
              <input name="fhs_mothers_edu_attainment" type="radio" value="elementary_level" class="form-check-input">
              Elementary Level
            </span>
            <span style="margin-left:20px;">
              <input name="fhs_mothers_edu_attainment" type="radio" value="elementary_grad" class="form-check-input">
              Elementary Graduate
            </span>
            <span style="margin-left:20px;">
              <input name="fhs_mothers_edu_attainment" type="radio" value="highschool_level" class="form-check-input">
              Highschool Level
            </span>
            <span style="margin-left:20px;">
              <input name="fhs_mothers_edu_attainment" type="radio" value="highschool_grad" class="form-check-input">
              Highschool Graduate
            </span>
            <span style="margin-left:20px;">
              <input name="fhs_mothers_edu_attainment" type="radio" value="college_level" class="form-check-input">
              College Level
            </span>
            <span style="margin-left:20px;">
              <input name="fhs_mothers_edu_attainment" type="radio" value="college_grad" class="form-check-input">
              College Graduate
            </span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            Number of Brother/s
            <input name="fhs_number_brothers" type="text" class="form-control">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.fhs_number_brothers) ? array_of_errors.fhs_number_brothers[0]: '' }}</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            Number of Sister/s
            <input name="fhs_number_sisters" type="text" class="form-control">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.fhs_number_sisters) ? array_of_errors.fhs_number_sisters[0]: '' }}</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            Did brother and sister dropped out of school?
            <select name="fhs_brother_sister_dropout_school" class="form-control">
              <option value="No">No</option>
              <option value="Yes">Yes</option>
            </select>
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.fhs_brother_sister_dropout_school) ? array_of_errors.fhs_brother_sister_dropout_school[0]: '' }}</small>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-11">
          <div class="form-group">
            If Yes, what is the reason/s of dropping out?
              <input name="fhs_brother_sister_dropout_school_reason" type="text" class="form-control">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.fhs_brother_sister_dropout_school_reason) ? array_of_errors.fhs_brother_sister_dropout_school_reason[0]: '' }}</small>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            Are there family members who are affiliated with community organization?
            <select name="fhs_family_members_affiliated_with_community_organization" class="form-control">
              <option value="No">No</option>
              <option value="Yes">Yes</option>
            </select>
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.fhs_family_members_affiliated_with_community_organization) ? array_of_errors.fhs_family_members_affiliated_with_community_organization[0]: '' }}</small>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-11">
          <div class="form-group">
            If Yes, names of ogranization
            <input name="fhs_name_of_organization" type="text" class="form-control">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.fhs_name_of_organization) ? array_of_errors.fhs_name_of_organization[0]: '' }}</small>
          </div>
        </div>
      </div>

<!-------------------------------- IV. Information about dwelling ------------------------------->
      <div class="row">
        <div class="col-md-12">
          <h4 class="card-title">IV. Information about dwelling</h4>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2" style="text-align: right;">
          Check whicever applies:
          <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.iad_dwelling) ? array_of_errors.iad_dwelling[0]: '' }}</small>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="iad_dwelling" value="owns_house" type="checkbox" class="form-check-input">
            owns house
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="iad_dwelling" value="rents_house" type="checkbox" class="form-check-input">
            rents house
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="iad_dwelling" value="shares_house" type="checkbox" class="form-check-input">
            shares house
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="iad_dwelling" value="lives_of_street" type="checkbox" class="form-check-input">
            lives of street
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input name="iad_dwelling" value="others" type="checkbox" class="form-check-input">
            Others
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.iad_dwelling_specify) ? array_of_errors.iad_dwelling_specify[0]: '' }}</small>
            <input name="iad_dwelling_specify" type="text" class="form-control" placeholder="Please specify">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2" style="text-align: right;">
          Type of toilet:
          <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.iad_toilet_type) ? array_of_errors.iad_toilet_type[0]: '' }}</small>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="iad_toilet_type" value="water_sailed" type="checkbox" class="form-check-input">
            water sailed
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="iad_toilet_type" value="flush" type="checkbox" class="form-check-input">
            flush
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="iad_toilet_type" value="pit" type="checkbox" class="form-check-input">
            pit
          </div>
        </div>
        <div class="col-md-7">
          <div class="form-group">
            <input name="iad_toilet_type" value="others" type="checkbox" class="form-check-input">
            Others
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.iad_toilet_type_specify) ? array_of_errors.iad_toilet_type_specify[0]: '' }}</small>
            <input name="iad_toilet_type_specify" type="text" class="form-control" placeholder="Please specify">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2" style="text-align: right;">
          Source of water:
          <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.iad_source_of_water) ? array_of_errors.iad_source_of_water[0]: '' }}</small>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="iad_source_of_water" value="faucet_tap" type="checkbox" class="form-check-input">
            faucet/tap
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="iad_source_of_water" value="deep_well" type="checkbox" class="form-check-input">
            deep well
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <input name="iad_source_of_water" value="fetched_from_fetched" type="checkbox" class="form-check-input">
            fetched from outside
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="iad_source_of_water" value="bought" type="checkbox" class="form-check-input">
            bought
          </div>
        </div>
        <div class="col-md-5">
          <div class="form-group">
            <input name="iad_source_of_water" value="others" type="checkbox" class="form-check-input">
            Others
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.iad_source_of_water_specify) ? array_of_errors.iad_source_of_water_specify[0]: '' }}</small>
            <input name="iad_source_of_water_specify" type="text" class="form-control" placeholder="Please specify">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2" style="text-align: right;">
          Check if available at home:
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.iad_source_of_water) ? array_of_errors.iad_source_of_water[0]: '' }}</small>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="iad_objects_at_home" value="tv" type="checkbox" class="form-check-input">
            TV
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="iad_objects_at_home" value="radio" type="checkbox" class="form-check-input">
            radio
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="iad_objects_at_home" value="books" type="checkbox" class="form-check-input">
            books
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="iad_objects_at_home" value="computer" type="checkbox" class="form-check-input">
            computer
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="iad_objects_at_home" value="magazines" type="checkbox" class="form-check-input">
            magazines
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <input name="iad_objects_at_home" value="newspaper" type="checkbox" class="form-check-input">
            newspaper
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <input name="iad_objects_at_home" value="others" type="checkbox" class="form-check-input">
            Others
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.iad_objects_at_home_specify) ? array_of_errors.iad_objects_at_home_specify[0]: '' }}</small>
            <input name="iad_objects_at_home_specify" type="text" class="form-control" placeholder="Please specify">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            Extra Curricular
            <input name="extra_curricular" type="text" class="form-control">
            <small class="form-text text-muted" style="color:red !important">{{ (array_of_errors.extra_curricular) ? array_of_errors.extra_curricular[0]: '' }}</small>
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


<!-------------------------------- End ---------------------------------->
      <div class="row">
        <div class="col-md-12">
          <br><br><br><br><br><br>
          <br><br><br><br><br><br>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
        </div>
        <div class="col-md-4">
          <span>_________________________________________________</span>
          <h4 class="card-title">Signature over printedname</h4>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
              <button type="submit" class="btn btn-primary">Enroll Now</button>
              <a href="/students" class="btn btn-link">
                <i class="fas fa-long-arrow-alt-left" style="margin-right: 5px"></i>
                To students list
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
        array_of_errors: {
          school_enrolled: [],
          es_dropout_reasons: [],
          es_help_for_homework: [],
          es_how_long_dropout: [],
          es_relationship_staying: [],
          es_stay_with_parents: [],
          es_student_dropout_school: [],
          es_travel_time: [],
          es_work_of_student: [],
          es_work_to_support: [],
          es_others_specify: [],
          es_transportation: [],
          extra_curricular: [],
          fhs_brother_sister_dropout_school: [],
          fhs_brother_sister_dropout_school_reason: [],
          fhs_family_members_affiliated_with_community_organization: [],
          fhs_fathers_age: [],
          fhs_fathers_death_status: [],
          fhs_fathers_edu_attainment: [],
          fhs_fathers_family_name: [],
          fhs_fathers_given_name: [],
          fhs_fathers_middle_name: [],
          fhs_fathers_monthly_income: [],
          fhs_fathers_occupation: [],
          fhs_fathers_religion: [],
          fhs_mothers_age: [],
          fhs_mothers_death_status: [],
          fhs_mothers_edu_attainment: [],
          fhs_mothers_family_name: [],
          fhs_mothers_given_name: [],
          fhs_mothers_middle_name: [],
          fhs_mothers_monthly_income: [],
          fhs_mothers_occupation: [],
          fhs_mothers_religion: [],
          fhs_name_of_organization: [],
          fhs_number_brothers: [],
          fhs_number_sisters: [],
          iad_dwelling: [],
          iad_objects_at_home: [],
          iad_source_of_water: [],
          iad_toilet_type: [],
          pi_name_extension: [],
          pi_sex: [],
          pi_birthdate: [],
          pi_direction_one: [],
          pi_direction_three: [],
          pi_direction_two: [],
          pi_enrolled_as_grade: [],
          pi_enrollment_date: [],
          pi_family_name: [],
          pi_given_name: [],
          pi_guardian_contact_number: [],
          pi_guardian_family_name: [],
          pi_guardian_given_name: [],
          pi_guardian_middle_name: [],
          pi_guardian_occupation: [],
          pi_middle_name: [],
          pi_relationship_to_student: [],
          pi_school_last_attended: [],
          pi_school_year: [],
          pi_student_id: [],
          pi_member_of_4ps: [],
          school_enrolled: [],
          school_enrolled_date: [],
          school_enrolled_lrn: [],
          school_enrolled_student_status: []
        }
      }
    },
    created: function(){
      // nothing to do
    },
    methods: {
      submitForm: function(){
        this.clearErrors()
        
        axios.post('/forms/enrollment/store', $('form').serialize()).then(function (response) {
          this.success_message = response.data.message
          this.error_message   = ""
          window.location.replace('/students/'+response.data.id)
        }.bind(this)).catch(function (error) {
          console.log(error)
          this.success_message = ""
          this.error_message   = error.response.data.message
          this.array_of_errors = error.response.data.errors
        }.bind(this))
      },
      clearErrors: function(){
        this.array_of_errors = {
          school_enrolled: [],
          es_dropout_reasons: [''],
          es_help_for_homework: [''],
          es_how_long_dropout: [''],
          es_relationship_staying: [''],
          es_stay_with_parents: [''],
          es_student_dropout_school: [''],
          es_travel_time: [''],
          es_work_of_student: [''],
          es_work_to_support: [''],
          es_others_specify: [''],
          es_transportation: [''],
          extra_curricular: [''],
          fhs_brother_sister_dropout_school: [''],
          fhs_brother_sister_dropout_school_reason: [''],
          fhs_family_members_affiliated_with_community_organization: [''],
          fhs_fathers_age: [''],
          fhs_fathers_death_status: [''],
          fhs_fathers_edu_attainment: [''],
          fhs_fathers_family_name: [''],
          fhs_fathers_given_name: [''],
          fhs_fathers_middle_name: [''],
          fhs_fathers_monthly_income: [''],
          fhs_fathers_occupation: [''],
          fhs_fathers_religion: [''],
          fhs_mothers_age: [''],
          fhs_mothers_death_status: [''],
          fhs_mothers_edu_attainment: [''],
          fhs_mothers_family_name: [''],
          fhs_mothers_given_name: [''],
          fhs_mothers_middle_name: [''],
          fhs_mothers_monthly_income: [''],
          fhs_mothers_occupation: [''],
          fhs_mothers_religion: [''],
          fhs_name_of_organization: [''],
          fhs_number_brothers: [''],
          fhs_number_sisters: [''],
          iad_dwelling: [''],
          iad_objects_at_home: [''],
          iad_source_of_water: [''],
          iad_toilet_type: [''],
          pi_name_extension: [''],
          pi_sex: [''],
          pi_birthdate: [''],
          pi_direction_one: [''],
          pi_direction_three: [''],
          pi_direction_two: [''],
          pi_enrolled_as_grade: [''],
          pi_enrollment_date: [''],
          pi_family_name: [''],
          pi_given_name: [''],
          pi_guardian_contact_number: [''],
          pi_guardian_family_name: [''],
          pi_guardian_given_name: [''],
          pi_guardian_middle_name: [''],
          pi_guardian_occupation: [''],
          pi_middle_name: [''],
          pi_relationship_to_student: [''],
          pi_school_last_attended: [''],
          pi_school_year: [''],
          pi_student_id: [''],
          pi_member_of_4ps: [''],
          school_enrolled: [''],
          school_enrolled_date: [''],
          school_enrolled_lrn: [''],
          school_enrolled_student_status: ['']
        }
      }
    }
}
</script>
