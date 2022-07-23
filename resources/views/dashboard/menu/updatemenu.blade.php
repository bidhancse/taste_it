<form method="POST" class="btn-submit">
    @csrf
  
    <input type="hidden" name="" id="id" value="{{ $Data->id }}">
  
    <div class="form-row">
  
        <div class="form-group col-md-6">
            <label>Food Name</label>
            <input type="text" class="form-control" name="food_name" value="{{ $Data->food_name }}" placeholder="Enter Food Name..." required>
        </div>

        <div class="form-group col-md-6">
            <label>Food Category</label>
           

            <select class="form-control default-select" name="food_category">
                <option value="{{$Data->food_category}}" <?php if($Data->food_category ){ echo "selected";} ?> >
                  @if($Data->food_category == 1) BREAKFAST
                  @elseif($Data->food_category == 2) LUNCH
                  @elseif($Data->food_category == 3) DINNER
                  @elseif($Data->food_category == 4) DESSERTS
                  @elseif($Data->food_category == 5)WINE CARD
                  @elseif($Data->food_category == 6)DRINKS & TEA
                  @endif
                </option>
                  
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
            <input type="text" class="form-control" name="food_details" value="{{ $Data->food_details }}" placeholder="Enter Food Details..." required>
        </div>

        <div class="form-group col-md-6">
            <label>Price</label>
            <input type="text" class="form-control" name="price" value="{{ $Data->price }}" placeholder="Enter Price..." required>
        </div>
    
        <div class="form-group col-md-12">
            <label>Picture</label>
            <input type="file" class="form-control" id="picture" name="picture">
            @if(isset($Data->picture))
            <img id="blah" src="{{url($Data->picture)}}" style="max-height: 80px; margin-top: 5px;" class="zoom">
            @endif
        
            <input type="hidden" value="{{ $Data->picture }}" name="old_image">
        </div>
  
    </div>
  
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info">Update</button>
    </div>
</form>
  
  
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
       url:"{{ url('updatemenu') }}/"+id,
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