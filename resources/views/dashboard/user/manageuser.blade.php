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
                        <h4 class="card-title">Manage Users</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" style="overflow-Y: hidden;">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>SL.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                        <th>Picture</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @php
                                    $i = 1;
                                    @endphp

                                    @foreach($Data as $DataShow)
                                    
                                    <tr id="tr{{ $DataShow->id }}">
                                        <td>{{$i++}}</td>
                                        <td>{{$DataShow->name}}</td>
                                        <td>{{$DataShow->email}}</td>
                                        <td>{{$DataShow->phone}}</td>
                                        <td>
                                            <input data-id="{{$DataShow->id}}" class="toggle-class" type="checkbox" data-onstyle="success"data-offstyle="danger" data-toggle="toggle" data-on="Enable" data-off="Disable" {{ $DataShow->status ? 'checked' : '' }}>
                                        </td>
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
          <h3 class="modal-title">Update User Information</h3>
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
  
        </div>
      </div>
    </div>
  </div>


{{--  Change Status --}}
<script>
    $('.toggle-class').change(function () {
      var status = $(this).prop('checked') == true ? '1' : '0';
      var id = $(this).data('id');
      console.log(id);
      console.log(status);
  
      $.ajax({
        type: "get",
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "{{ url('changestatus') }}/"+id,
        data: {
          status: status, 
          id: id
        },
        success: function () {
          UIkit.notification({
            message: 'Status Change Done',
            status: 'danger',
            pos: 'top-right',
            timeout: 2000
          });
        }
      });
    });
</script>

{{-- Delete --}}
<script>
    $(".delete").click(function(){
      var id = $(this).data("id");
  
      $.ajax(
      {
        url: "{{ url('userdelete') }}/"+id,
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
        url: "{{ url('edituser') }}/"+id,
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