<template>
  <span>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-category">
              All students List 
              <a href="/forms/enrollment/create">
                <i class="fas fa-plus-circle" style="color:green; cursor: pointer;"></i>
              </a>
            </h5>

          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Name
                  </th>
                  <th class="text-right">
                    Enrollment Date
                  </th>
                  <th>
                  </th>
                </thead>
                <tbody>
                  <tr v-for="student in students">
                    <td>
                      #{{student.id}}
                    </td>
                    <td>
                      {{student.lastName}}, {{student.middleName}} {{student.givenName}}
                    </td>
                    <td class="text-right">
                      {{student.enrollmentDate}}
                    </td>
                    <td class="td-actions text-right">
                      <button @click="editRedirect(student.id)" type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                        <i class="now-ui-icons ui-2_settings-90"></i>
                      </button>
                      <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                        <i class="now-ui-icons ui-1_simple-remove"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </span>
</template>

<script>
export default {
    data: function() {
      return {
        students: ""
      }
    },
    created: function(){
      console.log('aw')
      this.getStudents()
    },
    methods: {
      getStudents: function(){
        axios.get('/students/get/all').then(function (response) {
          console.log(response)
          this.students = response.data
        }.bind(this)).catch(function (error) {
        }.bind(this))
      },
      editRedirect(id){
        window.location.href = '/students/'+id
      }
    }
}
</script>
