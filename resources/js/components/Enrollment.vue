<template>
    <span>
    <form method="post" v-on:submit.prevent="submitForm">
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-success" role="alert">
            {{success_message}}
          </div>
          <div class="alert alert-danger" role="alert">
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
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Date
            <input name="school_enrolled_date" type="date" class="form-control">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            LRN
            <input name="school_enrolled_lrn" type="text" class="form-control">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
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
      </div>

      <!----------------------------- I. Personal Information ------------------------------>
      
      <div class="row">
        <div class="col-md-12">
          <h4 class="card-title">I. Personal Information</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            Student ID
            <input name="pi_student_id" type="text" class="form-control" placeholder="#">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Birth date
            <input name="pi_birthdate" type="date" class="form-control">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Enrollment date
            <input name="pi_enrollment_date" type="date" class="form-control">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            Family Name
            <input name="pi_family_name" type="text" class="form-control">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            Given Name
            <input name="pi_given_name" type="text" class="form-control">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            Middle Name
            <input name="pi_middle_name" type="text" class="form-control">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            House # / Street / Brgy.
            <input name="pi_direction_one" type="text" class="form-control">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            Municipality / City
            <input name="pi_direction_two" type="text" class="form-control">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            Region
            <input name="pi_direction_three" type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            Parent or Guardian
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            Family Name
            <input name="pi_guardian_family_name" type="text" class="form-control" placeholder="Guardians family name">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Given Name
            <input name="pi_guardian_given_name" type="text" class="form-control" placeholder="Guardians given name">
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            Middle Name
            <input name="pi_guardian_middle_name" type="text" class="form-control" placeholder="Guardians middle name">
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            Contact number
            <input name="pi_guardian_contact_number" type="text" class="form-control" placeholder="Guardians contact number">
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            Occupation
            <input name="pi_guardian_occupation" type="text" class="form-control" placeholder="Guardians occupation">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8">
          <div class="form-group">
            Relation of student to the parent / guardian
            <input name="pi_relationship_to_student" type="text" class="form-control">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            A member of 4 P's
            <input name="pi_member_of_4ps" type="text" class="form-control" placeholder="Yes / No">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            Enrolled as Grade
            <input name="pi_enrolled_as_grade" type="text" class="form-control">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            School last attended
            <input name="pi_school_last_attended" type="text" class="form-control">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            School year
            <input name="pi_school_year" type="text" class="form-control">
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
            <input name="es_others_specify" type="text" class="form-control" placeholder="please specify">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4" style="text-align: right;">
          Who help the student in doing homework?
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
            <input name="es_student_dropout_school" type="text" class="form-control" placeholder="Yes / No">
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
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            What is/are the reason/s?
            <input name="es_dropout_reasons" type="text" class="form-control">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            During the school time, does the student stay with the parents?
            <input name="es_stay_with_parents" type="text" class="form-control" placeholder="Yes / No">
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
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            Does the student work to support schooling costs? 
            <input name="es_work_to_support" type="text" class="form-control" placeholder="Yes / No">
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
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Given Name
            <input name="fhs_fathers_given_name" type="text" class="form-control" placeholder="Fathers given name">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Middle Name
            <input name="fhs_fathers_middle_name" type="text" class="form-control" placeholder="Fathers middle name">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Is Father alive or deceased?
            <input name="fhs_fathers_death_status" type="text" class="form-control" placeholder="Alive or Deceased">
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
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Religion
            <input name="fhs_fathers_religion" type="text" class="form-control" placeholder="Fathers religion">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Occupation
            <input name="fhs_fathers_occupation" type="text" class="form-control" placeholder="Fathers occupation">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Monthly Income
            <input name="fhs_fathers_monthly_income" type="text" class="form-control" placeholder="Fathers monthly income">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            Fathers highest educational attainment
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
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Given Name
            <input name="fhs_mothers_given_name" type="text" class="form-control" placeholder="Mothers given name">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Middle Name
            <input name="fhs_mothers_middle_name" type="text" class="form-control" placeholder="Mothers middle name">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Is Mother alive or deceased?
            <input name="fhs_mothers_death_status" type="text" class="form-control" placeholder="Alive or Deceased">
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
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Religion
            <input name="fhs_mothers_religion" type="text" class="form-control" placeholder="Mothers religion">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Occupation
            <input name="fhs_mothers_occupation" type="text" class="form-control" placeholder="Mothers occupation">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            Monthly Income
            <input name="fhs_mothers_monthly_income" type="text" class="form-control" placeholder="Mothers monthly Income">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            Mothers highest educational attainment
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
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            Number of Sister/s
            <input name="fhs_number_sisters" type="text" class="form-control">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            Did brother and sister dropped out of school?
            <input name="fhs_brother_sister_dropout_school" type="text" class="form-control" placeholder="Yes or No">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
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
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            Are there family members who are affiliated with community organization?
            <input name="fhs_family_members_affiliated_with_community_organization" type="text" class="form-control" placeholder="Yes or No">
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
            <input name="iad_dwelling_specify" type="text" class="form-control" placeholder="Please specify">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2" style="text-align: right;">
          Type of toilet: 
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
            <input name="iad_toilet_type_specify" type="text" class="form-control" placeholder="Please specify">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2" style="text-align: right;">
          Source of water:
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
            <input name="iad_source_of_water_specify" type="text" class="form-control" placeholder="Please specify">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2" style="text-align: right;">
          Check if available at home:
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
            <input name="iad_objects_at_home_specify" type="text" class="form-control" placeholder="Please specify">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            Extra Curricular
            <input name="extra_curricular" type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-success" role="alert">
            {{success_message}}
          </div>
          <div class="alert alert-danger" role="alert">
            {{error_message}}
          </div>
        </div>
      </div>


<!-------------------------------- End ---------------------------------->
      <!-- <div class="row">
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
      </div> -->

      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
              <button type="submit" class="btn btn-primary">Enroll Now</button>
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
        error_message: ""
      }
    },
    created: function(){
    },
    methods: {
      submitForm: function(){
        axios.post('/enrollment/store', $('form').serialize()).then(function (response) {
          this.success_message = response.data.message
        }.bind(this)).catch(function (error) {
          this.error_message = error.response.data.message
        }.bind(this))
      }
    }
}
</script>
