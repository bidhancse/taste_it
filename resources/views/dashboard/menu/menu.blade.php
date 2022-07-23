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
                  <h4 class="card-title">Insert Menu</h4>
                  <a href="{{ url('/dashboard/manage-menu') }}" class="btn btn-secondary btn-square">Manage</a>
              </div>
              <div class="card-body">
                  <div class="basic-form">
                    <form method="POST" class="btn-submit" enctype="multipart/form-data">

                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label>Food Name</label>
                              <input type="text" class="form-control" name="food_name" id="food_name" placeholder="Enter Food Name..." required>
                          </div>

                          <div class="form-group col-md-6">
                              <label>Food Category</label>
                              <select class="form-control default-select" name="food_category" id="food_category">
                                 <option value="1">BREAKFAST</option>
                                 <option value="2">LUNCH</option>
                                 <option value="3">DINNER</option>
                                 <option value="4">DESSERTS</option>
                                 <option value="5">COFFEE & SHAKE</option>
                                 <option value="6">DRINKS</option>
                             </select>
                         </div>

                         <div class="form-group col-md-6">
                            <label>Food Details</label>
                            <input type="text" class="form-control" name="food_details" id="food_details" placeholder="Enter Food Details..." required>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Price</label>
                            <input type="text" class="form-control" name="price" id="price" placeholder="Enter Price..." required>
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
        url:"{{ url('menuinsert') }}",
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
            message: 'Menu Insert Done',
            pos:     'top-right',
            status: 'success',
            timeout:  2000
          });
  
          $('#food_name').val('');
          $('#food_category').val('');
          $('#food_details').val('');
          $('#price').val('');
          $('#picture').val('');
  
        }
      })
  
    });
  
  </script>


@endsection