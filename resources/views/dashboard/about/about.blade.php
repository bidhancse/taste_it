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
                  <h4 class="card-title">Update About</h4>
              </div>
              <div class="card-body">
                  <div class="basic-form">
                     <form method="POST" class="btn-submit" enctype="multipart/form-data">

                        <div class="form-row">
                          <input type="hidden" name="id" id="id" value="{{ $Data->id }}">
                           <div class="form-group col-md-12">
                              <label>Description</label>
                              <textarea class="form-control" name="description" rows="6">{{ $Data->description }}</textarea>
                          </div>

                         <div class="form-group col-md-12">
                              <label>Picture</label>
                              <input type="file" class="form-control" name="picture">
                              @if(isset($Data->picture))
                              <img id="blah" src="{{url($Data->picture)}}" style="max-height: 80px; margin-top: 5px;" class="zoom">
                              @endif
                           
                              <input type="hidden" value="{{ $Data->picture }}" name="old_image">
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
 
     $.ajax({
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      url:"{{ url('updateabout') }}/"+id,
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
         message: 'Data Update Successfully Done',
         pos:     'top-right',
         status: 'success',
         timeout:  2000
       });
 
       window.location="";
 
     },
   });
   });
 
 </script>


@endsection