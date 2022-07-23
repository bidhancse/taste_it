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
                  <h4 class="card-title">Update Settings Information</h4>
              </div>
              <div class="card-body">
                  <div class="basic-form">
                    <form method="POST" class="btn-submit" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <input type="hidden" name="" id="id" value="{{ $Data->id }}">
                            <div class="form-group col-md-6">
                                <label>Title</label>
                                <input type="text" class="form-control" value="{{$Data->title}}" name="title" placeholder="Enter Title..." required>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Email</label>
                                <input type="text" class="form-control" value="{{$Data->email}}" name="email" placeholder="Enter Email..." required>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Phone</label>
                                <input type="text" class="form-control" value="{{$Data->phone}}" name="phone" placeholder="Enter Phone..." required>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Facebook Url</label>
                                <input type="text" class="form-control" value="{{$Data->facebook}}" name="facebook" placeholder="Enter Facebook Url..." required>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Twitter Url</label>
                                <input type="text" class="form-control" value="{{$Data->twitter}}" name="twitter" placeholder="Enter Twitter Url..." required>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Instagram Url</label>
                                <input type="text" class="form-control" value="{{$Data->instagram}}" name="instagram" placeholder="Enter Instagram Url..." required>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Favicon</label>
                                <input type="file" class="form-control" name="favicon">
                                @if(isset($Data->favicon))
                                <img src="{{ url($Data->favicon) }}" style="max-height: 50px; outline:none outline: none;">
                                @endif
                                <input type="hidden" value="{{ $Data->favicon }}">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Logo</label>
                                <input type="file" class="form-control" name="logo">
                                @if(isset($Data->logo))
                                <img src="{{ url($Data->logo) }}" style="max-height: 50px; outline:none outline: none;">
                                @endif
                                <input type="hidden" value="{{ $Data->logo }}"> 
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
       url:"{{ url('settingsupdate') }}/"+id,
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
          message: 'Data Update Done',
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