<form method="POST" class="btn-submit">
    @csrf
  
    <input type="hidden" name="" id="id" value="{{ $Data->id }}">
  
    <div class="form-row">
  
        <div class="form-group col-md-6">
            <label>Chef Name</label>
            <input type="text" class="form-control" value="{{ $Data->chef_name }}" name="chef_name" id="chef_name" placeholder="Enter Chef Name..." required>
        </div>

        <div class="form-group col-md-6">
            <label>Chef Position</label>
            <input type="text" class="form-control" value="{{ $Data->position }}" name="position" id="position" placeholder="Enter Position..." required>
        </div>

        <div class="form-group col-md-6">
            <label>Facebook Url</label>
            <input type="text" class="form-control" value="{{ $Data->facebook }}" name="facebook" id="facebook" placeholder="Enter Facebook Url..." required>
        </div>

        <div class="form-group col-md-6">
            <label>Instagram Url</label>
            <input type="text" class="form-control" value="{{ $Data->instagram }}" name="instagram" id="instagram" placeholder="Enter Instagram Url..." required>
        </div>

        <div class="form-group col-md-6">
            <label>Twitter Url</label>
            <input type="text" class="form-control" value="{{ $Data->twitter }}" name="twitter" id="twitter" placeholder="Enter Twitter Url..." required>
        </div>

        <div class="form-group col-md-6">
            <label>Linkedin Url</label>
            <input type="text" class="form-control" value="{{ $Data->linkedin }}" name="linkedin" id="linkedin" placeholder="Enter Linkedin Url..." required>
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
       url:"{{ url('updatechef') }}/"+id,
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