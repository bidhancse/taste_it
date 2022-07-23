@extends('dashboard.index')
@section('content')


<!--**********************************
Content body start
***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Manage Chef</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" style="overflow-Y: hidden;">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Chef Name</th>
                                        <th>Position</th>
                                        <th>Facebook</th>
                                        <th>Instagram</th>
                                        <th>Picture</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($Data as $DataShow)
                                    
                                    <tr id="tr{{ $DataShow->id }}">
                                        <td>{{$DataShow->chef_name}}</td>
                                        <td>{{$DataShow->position}}</td>
                                        <td>{{$DataShow->facebook}}</td>
                                        <td>{{$DataShow->instagram}}</td>
                                        <td>
                                            @if($DataShow->picture)
                                            <img src="{{url($DataShow->picture)}}" style="max-height:50px;" class="zoom">
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <span class="btn btn-success shadow btn-xs sharp mr-1 edit"  data-toggle="modal" data-target=".bd-example-modal-lg" data-id="{{ $DataShow->id }}"><i class="fa fa-pencil"></i></span>
                                                <span class="btn btn-danger shadow btn-xs sharp delete" data-id="{{ $DataShow->id }}" onclick="return confirm('Are You sure ?')"><i class="fa fa-trash"></i></span>
                                            </div>
                                        </td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
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

{{-- Model --}}
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Update Chef Information</h3>
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
  
        </div>
      </div>
    </div>
  </div>

  

{{-- Delete --}}
<script>
    $(".delete").click(function(){
      var id = $(this).data("id");
  
      $.ajax(
      {
        url: "{{ url('chefdelete') }}/"+id,
        type: 'get',
        success: function ()
        {
          $('#tr'+id).hide();
  
          UIkit.notification({
            message: 'Data Delete Successfully Done',
            status: 'danger',
            pos: 'top-right',
            timeout: 2000
          });
        }
      });
  
    });
</script>

{{-- Edit --}}
<script>
    $(".edit").click(function(){
      var id = $(this).data("id");
      $.ajax(
      {
        url: "{{ url('editchef') }}/"+id,
        type: 'get',
        data:{},
        success: function (data)
        {
          $('.modal-body').html(data);
        }
      });
  
    });
</script>


@endsection