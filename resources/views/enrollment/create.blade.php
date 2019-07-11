@extends('layouts.dashboard')

@section('title', 'Mabolo National High School')

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-category">
              Enroll a student
            </h5>

          </div>
          <div class="card-body">
            <form>
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
                    <input type="text" class="form-control">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    Date
                    <input type="text" class="form-control">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    LRN
                    <input type="text" class="form-control">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                  </div>
                </div>
              </div>
              <div class="row" style="margin-left: 15px;">
                <div class="col-md-3">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    <label class="form-check-label">Old Student</label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    <label class="form-check-label">New Student</label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    <label class="form-check-label">Transferee</label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    <label class="form-check-label">Balik Aral</label>
                  </div>
                </div>
              </div>

<!-------------------------------- I. Personal Information ---------------------------------->
              <div class="row">
                <div class="col-md-12">
                  <h4 class="card-title">I. Personal Information</h4>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    Family Name
                    <input type="text" class="form-control">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    Given Name
                    <input type="text" class="form-control">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    Middle Name
                    <input type="text" class="form-control">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    House # / Street / Brgy.
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    Municipality / City
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    Region
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    Parent or Guardian
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    Contact number
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    Occupation
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    Relation of student to the parent / guardian
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    A member of 4 P's
                    <input type="text" class="form-control" placeholder="Yes / No">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    Enrolled as Grade
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    School last attended
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    School year
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>

<!-------------------------------- II. Edcuational Situation ---------------------------------->
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
                    <input type="checkbox" class="form-check-input">
                    15 minutes
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    30 minutes
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    45 minutes
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    1 hour
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    1 ½ hour
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    2 hours
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
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
                    <input type="checkbox" class="form-check-input">
                    <i class="fas fa-hiking"></i> Walking
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    <i class="fas fa-bus"></i> Bus
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    <i class="fas fa-shuttle-van"></i> Jeepney / Van
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    <i class="fas fa-motorcycle"></i> Pedicab
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    <i class="fas fa-motorcycle"></i> Tricycle
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    <i class="fas fa-car"></i> Car
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    <i class="fas fa-question"></i> Others
                    <input type="text" class="form-control" placeholder="please specify">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4" style="text-align: right;">
                  Who help the student in doing homework?
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    <i class="fas fa-user-alt-slash"></i> No one
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    <i class="fas fa-user-friends"></i> Bro/Sister
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    <i class="fas fa-user-nurse"></i> Mother
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    <i class="fas fa-user-tie"></i> Father
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    <i class="fas fa-user-shield"></i> Guardian
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    <i class="fas fa-user-friends"></i> Both Parents
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
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
                    <input type="text" class="form-control" placeholder="Yes / No">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    If Yes, how long?
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    What is/are the reason/s?
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    During the school time, does the student stay with the parents?
                    <input type="text" class="form-control" placeholder="Yes / No">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-11">
                  <div class="form-group">
                    If No, what is the student's relationship with the person/s whom the student stays?
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    Does the student work to support schooling costs? 
                    <input type="text" class="form-control" placeholder="Yes / No">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-11">
                  <div class="form-group">
                    If Yes, what is the work of the students?
                    <input type="text" class="form-control">
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
                <div class="col-md-3">
                  <div class="form-group">
                    <i class="fas fa-user-tie"></i> Fathers Name
                    <input type="text" class="form-control">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    Fathers Given Name
                    <input type="text" class="form-control">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    Fathers Middle Name
                    <input type="text" class="form-control">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    Is Father alive or deceased?
                    <input type="text" class="form-control" placeholder="Alive or Deceased">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  If Yes.
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    Age
                    <input type="text" class="form-control">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    Religion
                    <input type="text" class="form-control">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    Occupation
                    <input type="text" class="form-control">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    Monthly Income
                    <input type="text" class="form-control">
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
                      <input type="checkbox" class="form-check-input">
                      Elementary Level
                    </span>
                    <span style="margin-left: 20px;">
                      <input type="checkbox" class="form-check-input">
                      Elementary Graduate
                    </span>
                    <span style="margin-left: 20px;">
                      <input type="checkbox" class="form-check-input">
                      Highschool Level
                    </span>
                    <span style="margin-left: 20px;">
                      <input type="checkbox" class="form-check-input">
                      Highschool Graduate
                    </span>
                    <span style="margin-left: 20px;">
                      <input type="checkbox" class="form-check-input">
                      College Level
                    </span>
                    <span style="margin-left: 20px;">
                      <input type="checkbox" class="form-check-input">
                      College Graduate
                    </span>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <i class="fas fa-user-nurse"></i> Mothers Name
                    <input type="text" class="form-control">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    Mothers Given Name
                    <input type="text" class="form-control">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    Mothers Middle Name
                    <input type="text" class="form-control">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    Is Mother alive or deceased?
                    <input type="text" class="form-control" placeholder="Alive or Deceased">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  If Yes.
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    Age
                    <input type="text" class="form-control">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    Religion
                    <input type="text" class="form-control">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    Occupation
                    <input type="text" class="form-control">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    Monthly Income
                    <input type="text" class="form-control">
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
                    <span style="margin-left:30px;">
                      <input type="checkbox" class="form-check-input">
                      Elementary Level
                    </span>
                    <span style="margin-left:30px;">
                      <input type="checkbox" class="form-check-input">
                      Elementary Graduate
                    </span>
                    <span style="margin-left:30px;">
                      <input type="checkbox" class="form-check-input">
                      Highschool Level
                    </span>
                    <span style="margin-left:30px;">
                      <input type="checkbox" class="form-check-input">
                      Highschool Graduate
                    </span>
                    <span style="margin-left:30px;">
                      <input type="checkbox" class="form-check-input">
                      College Level
                    </span>
                    <span style="margin-left:30px;">
                      <input type="checkbox" class="form-check-input">
                      College Graduate
                    </span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    Number of Brother/s
                    <input type="text" class="form-control">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    Number of Sister/s
                    <input type="text" class="form-control">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    Did brother and sister dropped out of school?
                    <input type="text" class="form-control" placeholder="Yes or No">
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
                      <input type="text" class="form-control">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    Are there family members who are affiliated with community organization?
                    <input type="text" class="form-control" placeholder="Yes or No">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-11">
                  <div class="form-group">
                    If Yes, names of ogranization
                    <input type="text" class="form-control">
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
                <div class="col-md-3" style="text-align: right;">
                  Check whicever applies:
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    owns house
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    rents house
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    shares house
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    lives of street
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    Others
                    <input type="text" class="form-control" placeholder="Please specify">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3" style="text-align: right;">
                  Type of toilet: 
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    water sailed
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    flush
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    pit
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    Others
                    <input type="text" class="form-control" placeholder="Please specify">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3" style="text-align: right;">
                  Source of water:
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    faucet/tap
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    deep well
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    fetched from outside
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    bought
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    Others
                    <input type="text" class="form-control" placeholder="Please specify">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3" style="text-align: right;">
                  Check if available at home:
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    TV
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    radio
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    books
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    computer
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    magazines
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    newspaper
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    Others
                    <input type="text" class="form-control" placeholder="Please specify">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    Extra Curricular
                    <input type="text" class="form-control">
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
                      <a href="/enrollment" class="btn btn-link">
                        <i class="fas fa-long-arrow-alt-left" style="margin-right: 5px"></i> 
                        Back to list
                      </a>
                  </div>
                </div>
              </div>
            </form>
            
          </div>
        </div>
      </div>
    </div>
    <div class="row">
    </div>
  </div>
  <footer class="footer">
    <div class="container-fluid">
    </div>
  </footer>
@endsection