<form method="POST" class="btn-submit">
    @csrf
  
    <input type="hidden" name="" id="id" value="{{ $Data->id }}">
  
    <div class="form-row">
  
        <div class="form-group col-md-6">
        <label>Title</label>
        <input type="text" class="form-control input" placeholder="Enter Title..." name="title"  id="title" value="{{ $Data->title }}">
        </div>

        <div class="form-group col-md-6">
            <label>Heading</label>
            <input type="text" class="form-control input" placeholder="Enter Heading..." name="heading"  id="title" value="{{ $Data->heading }}">
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
       url:"{{ url('updateslider') }}/"+id,
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