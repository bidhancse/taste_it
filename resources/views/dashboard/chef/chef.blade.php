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
                  <h4 class="card-title">Insert Chef</h4>
                  <a href="{{ url('/dashboard/manage-chef') }}" class="btn btn-secondary btn-square">Manage</a>
              </div>
              <div class="card-body">
                  <div class="basic-form">
                    <form method="POST" class="btn-submit" enctype="multipart/form-data">

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Chef Name</label>
                                <input type="text" class="form-control" name="chef_name" id="chef_name" placeholder="Enter Chef Name..." required>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Chef Position</label>
                                <input type="text" class="form-control" name="position" id="position" placeholder="Enter Position..." required>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Facebook Url</label>
                                <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Enter Facebook Url..." required>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Instagram Url</label>
                                <input type="text" class="form-control" name="instagram" id="instagram" placeholder="Enter Instagram Url..." required>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Twitter Url</label>
                                <input type="text" class="form-control" name="twitter" id="twitter" placeholder="Enter Twitter Url..." required>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Linkedin Url</label>
                                <input type="text" class="form-control" name="linkedin" id="linkedin" placeholder="Enter Linkedin Url..." required>
                            </div>

                            <div class="form-group col-md-12">
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
        url:"{{ url('chefinsert') }}",
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
            message: 'Chef Insert Done',
            pos:     'top-right',
            status: 'success',
            timeout:  2000
          });
  
          $('#chef_name').val('');
          $('#position').val('');
          $('#facebook').val('');
          $('#instagram').val('');
          $('#twitter').val('');
          $('#linkedin').val('');
          $('#picture').val('');
  
        }
      })
  
    });
  
  </script>



@endsection