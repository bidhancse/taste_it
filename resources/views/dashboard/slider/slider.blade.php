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
                  <h4 class="card-title">Insert Slider</h4>
                  <a href="{{ url('/dashboard/manage-slider') }}" class="btn btn-secondary btn-square">Manage</a>
              </div>
              <div class="card-body">
                  <div class="basic-form">
                    <form method="POST" class="btn-submit" enctype="multipart/form-data">

                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label>Title</label>
                              <input type="text" class="form-control" name="title" id="title" placeholder="Enter TItle..." required>
                          </div>

                          <div class="form-group col-md-6">
                            <label>Heading</label>
                            <input type="text" class="form-control" name="heading" id="heading" placeholder="Enter Heading..." required>
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
        url:"{{ url('sliderinsert') }}",
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
            message: 'Slider Insert Done',
            pos:     'top-right',
            status: 'success',
            timeout:  2000
          });
  
          $('#title').val('');
          $('#heading').val('');
          $('#picture').val('');
  
        }
      })
  
    });
  
  </script>

@endsection