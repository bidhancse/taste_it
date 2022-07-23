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
                        <h4 class="card-title">Manage Reservation</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" style="overflow-Y: hidden;">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Table No</th>
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
                                        <td>{{$DataShow->date}}</td>
                                        <td>{{$DataShow->time}}</td>
                                        <td>{{$DataShow->table_number}}</td>
                                        <td>
                                            <div class="d-flex">
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

  
{{-- Delete --}}
<script>
    $(".delete").click(function(){
      var id = $(this).data("id");
  
      $.ajax(
      {
        url: "{{ url('reservationdelete') }}/"+id,
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


@endsection