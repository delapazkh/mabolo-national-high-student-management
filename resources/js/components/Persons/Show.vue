<template>
  <span>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">I. Personal Information</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-5 pr-1">
                                <div class="form-group">
                                    <label>Company (disabled)</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                            <div class="col-md-3 px-1">
                                <div class="form-group">
                                    <label>Username</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>City</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>Country</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Postal Code</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="image">
                    <img src="/img/bg5.jpg" alt="...">
                </div>
                <div class="card-body">
                    <div class="author">
                         <a href="#">
                        <img class="avatar border-gray" src="/img/mike.jpg" alt="...">
                            <h5 class="title">{{person.givenName}} {{person.name_extension}} {{person.middleName}} {{person.lastName}}</h5>
                        </a>
                        <p class="description">
                            ID #{{person.id}}
                        </p>
                    </div>
                    <p class="description text-center">
                        {{person.address}}
                    </p>
                </div>
                <hr>
                <!-- <div class="button-container">
                    <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                        <i class="fab fa-facebook-f"></i>
                    </button>
                    <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                        <i class="fab fa-twitter"></i>
                    </button>
                    <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                        <i class="fab fa-google-plus-g"></i>
                    </button>
                </div> -->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">II. Edcuational Situation</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-5 pr-1">
                                <div class="form-group">
                                    <label>Company (disabled)</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                            <div class="col-md-3 px-1">
                                <div class="form-group">
                                    <label>Username</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>City</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>Country</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Postal Code</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">III. Family and Home Situation</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-5 pr-1">
                                <div class="form-group">
                                    <label>Company (disabled)</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                            <div class="col-md-3 px-1">
                                <div class="form-group">
                                    <label>Username</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>City</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>Country</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Postal Code</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">IV. Information about dwelling</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-5 pr-1">
                                <div class="form-group">
                                    <label>Company (disabled)</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                            <div class="col-md-3 px-1">
                                <div class="form-group">
                                    <label>Username</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>City</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>Country</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Postal Code</label>
                                    <textarea rows="1" cols="80" class="form-control" disabled>Lamborghini Mercy</textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive">
            <button type="submit" @click="editStudentRedirect()" class="btn btn-primary">Edit student</button>
            <a href="/students" class="btn btn-link">
              <i class="fas fa-long-arrow-alt-left" style="margin-right: 5px"></i>
              To students list
            </a>
        </div>
      </div>
    </div>
  </span>
</template>

<script>
export default {
    data: function() {
      return {
        id: "",
        person: "",
        success_message: "",
        error_message: ""
      }
    },
    created: function(){
      let id = window.location.pathname.split('/')[2].split('-').join('_')
      this.id = id
      this.getStudents(id)
    },
    methods: {
      getStudents(id){
        axios.get('/students/'+id+'/show').then(function (response) {
          // console.log(response.data)
          this.person = response.data.person
          this.success_message = "Students data retrieved successfully!"
          this.error_message   = ""
        }.bind(this)).catch(function (error) {
          console.log(response)
          this.success_message = ""
          this.error_message   = error.response.data.message
        }.bind(this))
      },
      editStudentRedirect(){
        window.location.replace('/forms/enrollment/'+this.id+'/edit')
      }
      
    }
}
</script>
