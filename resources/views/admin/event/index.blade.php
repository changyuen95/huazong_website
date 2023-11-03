@extends('admin.layouts.master')



@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<div class="event-loading-spinner"></div>
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
						<li class="breadcrumb-item active">All Events</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
		<div class="event-create-button">
			<a href="{{ route('event.create') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" target="_blank">
				<span class="mr-2"><i class="fas fa-plus"></i></span>
				Create Event
			</a>
		</div>
	</section>

	@error('message')
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
		{{ $message }}
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	@enderror

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header bg-navy">
						<h3 class="card-title"><i class="fas fa-dumbbell"></i> Events List</h3>
						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fas fa-minus"></i>
							</button>
						</div>
					</div>
					<!-- /.card-header -->
					<div class="card-body event_table_body d-none">
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
										<img id="bigger-image" src="{{asset('images/sample/no_image_available.jpeg')}}" width="100%" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="table-responsive">
							<div class="row event_status_filter_section justify-content-end">
								<div class="col col-md-2 d-flex justify-content-end align-items-center">
									Status:
								</div>
								<div class="col-4 col-md-2 input-group">
									<select class="event_filter_select custom-select">
										<option value="All" {{ request()->query('status') == 'All' ? 'selected' : '' }}>All</option>
										<option value="Pending" {{ request()->query('status') == 'Pending' ? 'selected' : '' }}>Pending</option>
										<option value="Active " {{ request()->query('status') == 'Active' ? 'selected' : '' }}>Active</option>
										<option value="Rejected" {{ request()->query('status') == 'Rejected' ? 'selected' : '' }}>Rejected</option>
										<option value="Cancelled" {{ request()->query('status') == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
										<option value="Inactive" {{ request()->query('status') == 'Inactive' ? 'selected' : '' }}>Inactive</option>
									</select>
								</div>
							</div>

							<table id="event-admin-table" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Event Name</th>
										<th>Event Description</th>
										<th>Published Date</th>
										<th>Created By</th>
										<th>Organized By</th>
										<th>Status</th>
										<th>Created Date</th>
										<th>Action</th>
										=
									</tr>
								</thead>
								<tbody>
									@foreach($events as $event)
									<tr>
										<td>{{$loop->iteration}}</td>
										<td>{{!empty($event->title) ? $event->title : '-'}}</td>
										<td>{{!empty($event->content) ? strip_tags($event->content) : '-'}}</td>
										<td>{{!empty($event->publish_date) ? Carbon::parse($event->publish_date)->format('Y-m-d H:i:s') : '-'}}</td>
										<td>{{!empty($event->host) ? $event->host->name : '-'}}</td>
										<td>{{!empty($event->host) ? $event->host->group->name : '-'}}</td>
										<td>{{$event->status}}</td>
										<td>{{Carbon::parse($event->created_at)->format('Y-m-d H:i:s')}}</td>
										<td>
											<a class="btn btn-primary" href="{{route('event.show', $event->id)}}"><i class="fa fa-search" aria-hidden="true"></i></a>

											<a class="btn btn-warning" href="{{ route('event.edit',$event->id) }}"><i class="fa fa-edit text-white" aria-hidden="true"></i></a>
											@if($event->uuid)
											{{-- <a class="btn btn-success trigger-modal" url="http://api.qrserver.com/v1/create-qr-code/?data={{ old('uuid', $event->uuid ?? '') }}&size=1000x1000" title="QR Code"><i class="fas fa-qrcode text-white" aria-hidden="true"></i></a> --}}
											@php
											$user_env = config('app.deep_link') ?? 'https://panel.engagelife.com.my';
											$link = $user_env.'/update-attendance-qr/'.$event->uuid;
											@endphp
											{{-- @dump($link) --}}

											<a class="btn btn-success trigger-modal" url="http://api.qrserver.com/v1/create-qr-code/?data={{ $link }}&size=1000x1000" title="QR Code"><i class="fas fa-qrcode text-white" aria-hidden="true"></i></a>
											@endif

											<button data-id="{{ $event->id }}" class="btn btn-danger delete-btn" href="{{ route('event.destroy',$event->id) }}"><i class="fa fa-trash" aria-hidden="true"></i></button>

									</tr>
									@endforeach
								</tbody>
								<tfoot>
									<tr>
										<th>No</th>
										<th>Event Name</th>
										<th>Event Description</th>
										<th>Published Date</th>
										<th>Created By</th>
										<th>Organized By</th>
										<th>Status</th>
										<th>Created Date</th>
										<th>Action</th>
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
	$(document).ready(function() {
		$('#event-admin-table').DataTable({
			'stateSave': true,
			"paging": true,
			"lengthChange": false,
			"searching": true,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"columnDefs": [{
				orderable: false,
				targets: [3, 4]
			}],
			dom: 'Bfrtip',
			buttons: [
				'csv', 'excel', 'pdf', 'print'
			],
		});

		$(document).on('click', '.trigger-modal', function(e) {
			e.preventDefault();
			var source = $(this).attr('url');
			var title = $(this).attr('title');

			if (source != 'undefined') {
				$('#bigger-image').attr('src', source);
				$('#exampleModal').modal('show');
				$('.modal-title').text(title);
			}
		});

		$('table').on('click', '.delete-btn', function() {
			let id = $(this).data('id');
			let url = "{{ route('event.destroy',['event' => 'placeholder']) }}";
			url = url.replace('placeholder', id);

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
						success: function(response) {
							console.log(response.success);
							if (response.success) {

								Swal.fire(
									'Deleted!',
									'Event has been deleted.',
									'success'
								).then(function() {
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

		$('#btn-admin-logout').click(function(event) {
			event.preventDefault();
			document.getElementById('logout-form').submit();
		});


		// Filter Event Status
		$(".event_filter_select").on('change', function(event) {
			let eventSearch = "{{ route('admin.event.search') }}" + "?status=" + event.target.value

			$.ajax({
				url: eventSearch,
				method: "get",
				success: function(response) {
					window.location.href = eventSearch
				}
			})
		})

		$('.event-loading-spinner').hide().ajaxStart(function() {
			$(this).show(); // show Loading Div
		}).ajaxStop(function() {
			$(this).hide(); // hide loading div
		})

		$('.event_table_body').removeClass('d-none');


	});
</script>
@endsection