@extends('admin.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Event Feedback</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
						<li class="breadcrumb-item active">Event Feedback</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-12">
				<!-- Default box -->
				<div class="card">
					<div class="card-header bg-navy">
						<h3 class="card-title"><i class="fas fa-running"></i> Event Feedback</h3>
						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
								title="Collapse">
								<i class="fas fa-minus"></i>
							</button>
						</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-12 col-md-12 order-1 order-md-2">
								<div class="col-md-12">
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
													<img id="bigger-image" src="{{asset('images/sample/no_image_available.jpeg')}}"
														width="100%" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12 col-sm-3">
										<div class="info-box bg-light">
											<div class="info-box-content">
												<span class="info-box-text text-center text-muted">Event Name</span>
												<span
													class="info-box-number text-center text-muted mb-0">{{!empty($event->name) ? $event->name : '-'}}</span>
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-3">
										<div class="info-box bg-light">
											<div class="info-box-content">
												<span class="info-box-text text-center text-muted">Organizer</span>
												<span class="info-box-number text-center text-muted mb-0">
													<img src="{{ !empty($event->company) ? asset($event->company->logo_path) : '-'}}"
														width="30px" alt="">
												</span>
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-3">
										<div class="info-box bg-light">
											<div class="info-box-content">
												<span class="info-box-text text-center text-muted">Event Date</span>
												<span
													class="info-box-number text-center text-muted mb-0">{{!empty($event->date) ? $event->date : '-'  }}<span>
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-3">
										<div class="info-box bg-light">
											<div class="info-box-content">
												<span class="info-box-text text-center text-muted">Registered Participant</span>
												<span
													class="info-box-number text-center text-muted mb-0">{{$event->users()->count() }}
													person(s)</span>

											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="description"><i class="fas fa-book-open"></i> Description</label>
									<div>
										{!! !empty($event->description) ? $event->description : '-' !!}
									</div>
								</div>
								<div class="form-group form-row">
									<div class="col-md-6">
										<label for="description"> <i class="fas fa-gift"></i> Point for
											Joined participant</label>
										<div>
											{!! !empty($event->joined_point) ? $event->joined_point : 0 !!} Points
										</div>
									</div>
									<div class="col-md-6">
										<label for="description"> <i class="fas fa-gift"></i> Point for
											Attended participant</label>
										<div>
											{!! !empty($event->attendance_point) ? $event->attendance_point : 0 !!}
											Points
										</div>
									</div>
								</div>

								<div class="form-group">
									<label for="description"><i class="fas fa-map-marker-alt"></i> Location</label>
									<div>
										{{ !empty($event->location) ? $event->location: '-'}}, <br>
										{{ !empty($event->address) ? $event->address : '-'}}
									</div>
								</div>
								<div class="form-group form-row">
									<div class="col-md-6">
										<label for="description"><i class="fas fa-envelope"></i> Contact Email</label>
										<div>
											{{ !empty($event->email) ? $event->email : '-'}}
										</div>
									</div>
									<div class="col-md-6">
										<label for="description"><i class="fas fa-phone"></i> Contact Number</label>
										<div>
											{{ !empty($event->contact) ? $event->contact : '-'}}
										</div>
									</div>
								</div>
								<div class="form-group form-row">
									<div class="col-md-6">
										<label for="description"><i class="far fa-clock"></i> Time Period</label>
										<div>
											{{ !empty($event->start_time) ? $event->start_time : '-'}} -
											{{ !empty($event->end_time) ? $event->end_time : '-'}}
										</div>
									</div>
									<div class="col-md-6">
										<label for="description"><i class="fas fa-user-plus"></i> Max Capacity</label>
										<div>
											{{ !empty($event->max_capacity) ? $event->max_capacity : '-'}} person(s)
										</div>
									</div>
								</div>
								<div class="form-group form-row">
									<div class="col-md-6">
										<label for="description"><i class="fa fa-user-tie"></i> Host By</label>
										<div>
											{{ $event->created_by ? $event->host->name : 'Admin'}}
										</div>
									</div>
									<div class="col-md-6">
										<label for="description"><i class="fa fa-square"></i> Status</label>
										<div>
											{{ !empty($event->event_status) ? strtoupper($event->event_status) : '-'}}
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="qr_code">QR Code</label>
									<p>
										{{-- @if($event->uuid) --}}
										@php
											$user_env = config('app.deep_link') ?? 'https://panel.engagelife.com.my';
											$link = $user_env.'/update-attendance-qr/'.$event->uuid;
											$link = parse_url($link, PHP_URL_SCHEME) === null ? "https://" . $link : $link;
										@endphp

										<a class="trigger-modal" url="http://api.qrserver.com/v1/create-qr-code/?data={{ $link }}&size=1000x1000" title="QR Code">
											<img src="http://api.qrserver.com/v1/create-qr-code/?data={{ $link }}&size=100x100" alt="">
										</a>

										{{-- @else

											<a href="{{ $event->uuid }}">Generate QR Code</a>

										@endif --}}
									</p>

								</div>
								<div class="form-group">
									<p>
                                        <button type="button" id="attendance-link" class="p-0 btn box-referral btn-copy-link" onclick="copyLink(this.id)" onmouseout="outFunc()" data-link="{{$link }}"><span class="tooltiptext" id="myTooltip">Copy to clipboard</span>{{ __('Copy QR Code Link') }}</button>									</p>
								</div>
							</div>
						</div>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<!-- Default box -->
				<div class="card">
					<div class="card-header bg-navy">
						<h3 class="card-title"><i class="fas fa-user-friends"></i> Feedback List</h3>
						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
								title="Collapse">
								<i class="fas fa-minus"></i>
							</button>
						</div>
					</div>
					<div class="card-body">

						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active show" id="attended">
								{{-- <div id="attended"> --}}
								<table id="example" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>No</th>
											<th>User Name</th>
											<th>User Email</th>
											<th>Submit Date</th>
											<th>Feedback</th>
											<th>CONTENT</th>
											<th>COACH/TRAINER</th>
											<th>OVERALL</th>
											<th>RELEVANCE</th>
										</tr>
									</thead>
									<tbody>
										@php
											$loop_1 = 0;
											$loop_2 = 0;
											$loop_3 = 0;
										@endphp

										{{-- @dd($event->joined_users); --}}

										@forelse($event->feedback as $feedback)
												<tr>
													<td>{{$loop_1 += 1}}</td>
													<td>{{!empty($feedback->user) ? $feedback->user->name : '-'}}</td>
													<td>{{!empty($feedback->user) ? $feedback->user->email : '-'}}</td>
													{{-- <td>{{!empty($participate->pivot->register_at) ? $participate->pivot->register_at : '-'}} --}}
														<td>{{!empty($feedback->created_at) ? $feedback->created_at : '-'}}
													</td>
													<td>{{$feedback->comment}}</td>
													@foreach($feedback->star as $star)
														<td>{{$star->star}}</td>
													@endforeach

												</tr>
										@empty
										@endforelse
									</tbody>
									<tfoot>
										<tr>
											<th>No</th>
											<th>User Name</th>
											<th>User Email</th>
											<th>Submit Date</th>
											<th>Feedback</th>
											<th>CONTENT</th>
											<th>COACH/TRAINER</th>
											<th>OVERALL</th>
											<th>RELEVANCE</th>
										</tr>
									</tfoot>
								</table>
							</div>

					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
		</div>

	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('script')
<script>
	$(document).ready(function(){
		$('#example_attendance').DataTable({
stateSave: true,
			"paging": true,
			"lengthChange": false,
			"searching": true,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"pageLength": 10,
			"columnDefs": [{
				orderable: false
			}],
			"dom": 'Bfrtip',
            "buttons": [
                'copy', 'csv', 'excel', 'pdf','print'
            ]
		});
		$('#example').DataTable({
stateSave: true,
			"paging": true,
			"lengthChange": false,
			"searching": true,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			// "pageLength": 5,
			"columnDefs": [{
				orderable: false
			}],
			"dom": 'Bfrtip',
            "buttons": [
                'copy', 'csv', 'excel', 'pdf','print'
            ]
		});
		$('#example_2').DataTable({
stateSave: true,
			"paging": true,
			"lengthChange": false,
			"searching": true,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			// "pageLength": 5,
			"columnDefs": [{
				orderable: false
			}],
			"dom": 'Bfrtip',
            "buttons": [
                'copy', 'csv', 'excel', 'pdf','print'
            ]
		});
		$('#example_3').DataTable({
stateSave: true,
			"paging": true,
			"lengthChange": false,
			"searching": true,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			// "pageLength": 5,
			"columnDefs": [{
				orderable: false
			}],
			"dom": 'Bfrtip',
            "buttons": [
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
		$('table').on('click', '.confirm-attend', function(e){
			e.preventDefault();

			var ref = $(this).data('ref');

            Swal.fire({
                title: 'Change attendance status?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes!',
                cancelButtonText: 'No!'
                }).then((result) => {
                if (result.value) {
					$('#update-attend-'+ref).submit();

                // For more information about handling dismissals please visit
                // https://sweetalert2.github.io/#handling-dismissals
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire(
                    'Cancelled',
                    'Attendance status remain',
                    'error'
                    )
                }
            })
    	});
	});

</script>
@endsection