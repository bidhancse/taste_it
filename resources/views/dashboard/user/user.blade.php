@extends('dashboard.index')
@section('content')


<!--**********************************
Content body start
***********************************-->
<div class="content-body">
   <div class="container-fluid">
      <!-- row -->
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title">Create User</h4>
                  <a href="{{ url('/dashboard/manage-user') }}" class="btn btn-secondary btn-square">Manage</a>
              </div>
              <div class="card-body">
                  <div class="basic-form">
                    <form method="POST" class="btn-submit" enctype="multipart/form-data">

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name..." required>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email..." required>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone..." required>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Password</label>
                                <input type="text" class="form-control" name="password" id="password" placeholder="Enter Password..." required>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Status</label>
                                <select class="form-control default-select" name="status" id="status">
                                   <option value="1">Enable</option>
                                   <option value="0">Disable</option>
                               </select>
                           </div>

                            <div class="form-group col-md-6">
                                <label>Picture</label>
                                <input type="file" class="form-control" name="picture" id="picture" required>
                            </div>
                    </div>
                    <button type="submit" class="btn btn-info btn-square">Submit</button>
                    <button type="reset" class="btn btn-warning btn-square">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!--**********************************
Content body end
***********************************-->


{{-- Insert --}}
<script type="text/javascript">
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
  
    $(".btn-submit").submit(function(e){
      e.preventDefault();
  
      $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url:"{{ url('createuser') }}",
        method:"POST",
        data:new FormData(this),
        dataType:'JSON',
        contentType: false,
        cache: false,
        processData: false,
  
        success:function(data)
        {
          alert("Hello")
  
        },error: function(data) {
  
          UIkit.notification({
            message: 'User Create Done',
            pos:     'top-right',
            status: 'success',
            timeout:  2000
          });
  
          $('#name').val('');
          $('#email').val('');
          $('#phone').val('');
          $('#password').val('');
          $('#status').val('');
          $('#picture').val('');
  
        }
      })
  
    });
  
  </script>


@endsection