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
                  <h4 class="card-title">Update Contact Information</h4>
              </div>
              <div class="card-body">
                  <div class="basic-form">
                    <form method="POST" class="btn-submit" enctype="multipart/form-data">
                      @csrf

                      <div class="form-row">
                          <input type="hidden" name="id" id="id" value="{{ $Data->id }}">
                            <div class="form-group col-md-12">
                                <label>Contact Details</label>
                                <textarea class="form-control" name="contact_details" rows="6">{{ $Data->contact_details}}</textarea>
                            </div>

                    </div>
                    <button type="submit" class="btn btn-info btn-square">Update</button>
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

{{-- Update --}}
<script type="text/javascript">

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
  
    $(".btn-submit").submit(function(e){
      e.preventDefault();
      var id = $('#id').val();
      var data = $(this).serialize();
      $.ajax({
        url:'{{ url('contactupdate') }}/'+id,
        method:'POST',
        data:data,
        success:function(response){
          UIkit.notification({
            message: 'Data Update Done',
            status: 'success',
            pos: 'top-right',
            timeout: 2000
          });
         
         window.location="";
        },
        error:function(error){
          console.log(error)
        }
      });
    });
  
  </script>


@endsection