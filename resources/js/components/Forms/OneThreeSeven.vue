<template>
    <span>
    <form method="post" v-on:submit.prevent="submitForm">
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
              <a href="/enrollment" class="btn btn-link">
                <i class="fas fa-long-arrow-alt-left" style="margin-right: 5px"></i> 
                Back to list
              </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          Last name
          <input name="school_enrolled" type="text" class="form-control">
        </div>
        <div class="col-md-4">
          First name
          <input name="school_enrolled" type="text" class="form-control">
        </div>
        <div class="col-md-2">
          Name Extn. (Jr, I, II)
          <input name="school_enrolled" type="text" class="form-control">
        </div>
        <div class="col-md-2">
          Middle name
          <input name="school_enrolled" type="text" class="form-control">
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          Learn Reference Number (LRN): 
          <input name="school_enrolled" type="text" class="form-control">
        </div>
        <div class="col-md-4">
          Birthdate 
          <input name="school_enrolled" type="date" class="form-control" placeholder="(mm/dd/yyyy)">
        </div>
        <div class="col-md-4">
          Sex
          <input name="school_enrolled" type="text" class="form-control" placeholder="Male / Female">
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col-md-12" style="text-align:center">
          <h4 class="card-title">
          Eligibility for JHS Enrollment
          </h4>
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col-md-4">
          <input name="school_enrolled" type="checkbox" class="form-control"> 
          Elementary School Completer 
        </div>
        <div class="col-md-4">
          General Average: 
          <input name="school_enrolled" type="text" class="form-control" placeholder="">
        </div>
        <div class="col-md-4">
          Citation: 
          <input name="school_enrolled" type="text" class="form-control" placeholder="(If any)">
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          Name of Elementary School:
          <input name="school_enrolled" type="text" class="form-control">
        </div>
        <div class="col-md-4">
          School ID:
          <input name="school_enrolled" type="text" class="form-control" placeholder="">
        </div>
        <div class="col-md-4">
          Address of School:
          <input name="school_enrolled" type="text" class="form-control" placeholder="">
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
          <input name="school_enrolled" type="checkbox" class="form-control"> 
          PEPT Passer
        </div>
        <div class="col-md-2">
          Rating:
          <input name="school_enrolled" type="text" class="form-control" placeholder="">
        </div>
        <div class="col-md-2">
          <input name="school_enrolled" type="checkbox" class="form-control"> 
          ALS A & E Passer
        </div>
        <div class="col-md-2">
          Rating:
          <input name="school_enrolled" type="text" class="form-control" placeholder="">
        </div>
        <div class="col-md-2">
          <input name="school_enrolled" type="checkbox" class="form-control"> 
          Others (Pls. Specify)
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          Date of Examination/Assesment:
          <input name="school_enrolled" type="date" class="form-control" placeholder="(mm/dd/yyyy)"> 
        </div>
        <div class="col-md-2">
          Rating:
          <input name="school_enrolled" type="text" class="form-control" placeholder="">
        </div>
        <div class="col-md-2">
          <input name="school_enrolled" type="checkbox" class="form-control"> 
          ALS A & E Passer
        </div>
        <div class="col-md-2">
          Rating:
          <input name="school_enrolled" type="text" class="form-control" placeholder="">
        </div>
        <div class="col-md-2">
          <input name="school_enrolled" type="checkbox" class="form-control"> 
          Others (Pls. Specify)
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
        error_message: ""
      }
    },
    created: function(){
      // nothing to do
    },
    methods: {
      submitForm: function(){
        axios.post('/enrollment/store', $('form').serialize()).then(function (response) {
          this.success_message = response.data.message
          this.error_message   = ""
        }.bind(this)).catch(function (error) {
          this.success_message = ""
          this.error_message   = error.response.data.message
        }.bind(this))
      }
    }
}
</script>
