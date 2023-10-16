@extends('admin.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>All Events</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
						<li class="breadcrumb-item active">All Pending Events</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header bg-navy">
						<h3 class="card-title"><i class="fas fa-dumbbell"></i> Events List</h3>
						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
								title="Collapse">
								<i class="fas fa-minus"></i>
							</button>
						</div>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
										aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-md" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h3 class="modal-title modal-title-library"></h3>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<p>*<b>Note:</b> QR Attendance Checkin is allowed from event's start datetime till 30 minutes after the event.</p>
													<img id="bigger-image" src="{{asset('images/sample/no_image_available.jpeg')}}"
														width="100%" alt="">
												</div>
											</div>
										</div>
									</div>
						<div class="table-responsive">
							<table id="example" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Event Name</th>
										<th>Company</th>
										<th>Date</th>
										<th>Event Time Start</th>
										<th>Event Time End</th>
										<th>Registration Points</th>
										<th>Attendance Points</th>
										<th>Total Registrations</th>
										<th>Total Attendance</th>
										<th>Organizer Name</th>
										<th>Organizer Email</th>
										<th>Organizer Contact No.</th>
										<th>Status</th>
										<th>Created Date</th>
										@if (Auth::user()->role == 'superadmin' || Auth::user()->role == 'editor')

										<th>Action</th>
										@endif

									</tr>
								</thead>
								<tbody>
									@foreach($events as $event)
									<tr>
										<td>{{$loop->iteration}}</td>
										<td>{{!empty($event->name) ? $event->name : '-'}}</td>
										<td>{{!empty($event->company) ? $event->company->name : '-'}}</td>
										<td>{{!empty($event->date) ? $event->date : '-'}}</td>
										<td>{{ $event->start_time ?? '-' }}</td>
										<td>{{ $event->end_time ?? '-' }}</td>
										<td>{{ $event->joined_point ?? 0 }}</td>
										<td>{{ $event->attendance_point ?? 0 }}</td>
										{{-- <td><a
											href="{{route('user.page',$event->slug)}}">{{$event->users()->count()}}</a>
										</td> --}}
										<td>{{ $event->users()->count() }} </td>
										<td>{{ $event->AttendedUsers->count() }} </td>
										{{-- <td><a
											href="{{route('user.page',$event->slug)}}">{{$event->users()->count()}}</a>
										</td> --}}
										<td>{{!empty($event->organizer) ? $event->organizer : '-' }}</td>
										<td>{{!empty($event->email) ? $event->email : '-' }}</td>
										<td>{{!empty($event->contact) ? $event->contact : '-' }}</td>

										<td>{{strtoupper($event->event_status) ?? '-'}}</td>
										<td>{{Carbon::parse($event->created_at)->format('Y-m-d H:i:s')}}</td>

										@if (Auth::user()->role == 'superadmin' || Auth::user()->role == 'editor')

										<td>
											<a class="btn btn-primary" href="{{route('event.show', $event->id)}}"><i
													class="fa fa-search" aria-hidden="true"></i></a>

											<a class="btn btn-warning" href="{{ route('event.edit',$event->id) }}"><i
													class="fa fa-edit text-white" aria-hidden="true"></i></a>
											@if($event->uuid)
											{{-- <a class="btn btn-success trigger-modal" url="http://api.qrserver.com/v1/create-qr-code/?data={{ old('uuid', $event->uuid ?? '') }}&size=1000x1000" title="QR Code"><i
												class="fas fa-qrcode text-white" aria-hidden="true"></i></a> --}}
												@php
													$user_env = config('app.deep_link') ?? 'https://panel.engagelife.com.my';
													$link = $user_env.'/update-attendance-qr/'.$event->uuid;
												@endphp
												{{-- @dump($link) --}}

												<a class="btn btn-success trigger-modal" url="http://api.qrserver.com/v1/create-qr-code/?data={{ $link }}&size=1000x1000" title="QR Code"><i
													class="fas fa-qrcode text-white" aria-hidden="true"></i></a>
											@endif

											<button data-id="{{ $event->id }}" class="btn btn-danger delete-btn"
												href="{{ route('event.destroy',$event->id) }}"><i class="fa fa-trash"
													aria-hidden="true"></i></button>
										</td>
										@endif
									</tr>
									@endforeach
								</tbody>
								<tfoot>
									<tr>
										<th>No</th>
										<th>Event Name</th>
										<th>Company</th>
										<th>Date</th>
										<th>Event Time Start</th>
										<th>Event Time End</th>
										<th>Registration Points</th>
										<th>Attendance Points</th>
										<th>Total Registrations</th>
										<th>Total Attendance</th>
										<th>Organizer Name</th>
										<th>Organizer Email</th>
										<th>Organizer Contact No.</th>
										<th>Status</th>
										<th>Created Date</th>

										@if (Auth::user()->role == 'superadmin' || Auth::user()->role == 'editor')

										<th>Action</th>
										@endif
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('script')
<script>
	// console.log('oii');
	$(document).ready(function(){
      $('#example').DataTable({
'stateSave': true,
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        // "pageLength": 5,
        "columnDefs": [{
            orderable: false,
            targets: [3,4]
        }],
		dom: 'Bfrtip',
		buttons: [
			'copy', 'csv', 'excel', 'pdf','print'
		]
      });

	  $(document).on('click', '.trigger-modal', function(e){
			e.preventDefault();
			var source = $(this).attr('url');
			var title =$(this).attr('title');

			if (source != 'undefined') {
				$('#bigger-image').attr('src', source);
				$('#exampleModal').modal('show');
				$('.modal-title').text(title);
			}
		});

	  $('table').on('click', '.delete-btn', function(){
            let id = $(this).data('id');
            let url = "{{ route('event.destroy',['event' => 'placeholder']) }}";
            url = url.replace('placeholder',id);

            Swal.fire({
                title: 'Are you sure?',
                text: 'You will not be able to recover this data!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, keep it'
                }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: url,
                        method: "post",
                        data: {
                            _method: "DELETE",
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(response){
                            if(response.success){

                                Swal.fire(
                                'Deleted!',
                                'Event has been deleted.',
                                'success'
                                ).then(function(){
                                    window.location.reload(true);
                                })
                            }
                        }
                    });

                // For more information about handling dismissals please visit
                // https://sweetalert2.github.io/#handling-dismissals
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire(
                    'Cancelled',
                    'Your data is safe :)',
                    'error'
                    )
                }
            })
    	});
    });
</script>
@endsection