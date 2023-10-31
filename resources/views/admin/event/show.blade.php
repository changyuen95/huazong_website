@extends('admin.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Event Details</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
						<li class="breadcrumb-item active">Event Details</li>
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
						<h3 class="card-title"><i class="fas fa-running"></i> Event Information</h3>
						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fas fa-minus"></i>
							</button>
						</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-12 col-md-12 order-1 order-md-2">
								<div class="col-md-12">
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
													<img id="bigger-image" src="{{asset('images/sample/no_image_available.jpeg')}}" width="100%" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row justify-content-center">
									<div class="col-12 col-sm-3">
										<div class="info-box bg-light">
											<div class="info-box-content">
												<span class="info-box-text text-center text-muted">Event Name</span>
												@foreach($event->images as $image)
												@if($image->type == "main")
												<img src="{{ $image->name ?? '#' }}" alt="" style="width:100%; object-fit:contain;">
												@endif
												@endforeach
												<span class="info-box-number text-center text-muted mb-0">{{!empty($event->title) ? $event->title : '-'}}</span>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="description"><i class="fas fa-book-open"></i> Description</label>
									<div>
										{!! !empty($event->content) ? $event->content : '-' !!}
									</div>
								</div>
								<div class="form-group form-row">
									<div class="col-md-6">
										<label for="description"><i class="fa fa-user-tie"></i> Hosted by</label>
										<div>
											{{ $event->created_by ? $event->host->name : 'Admin'}}
										</div>
									</div>
									<div class="col-md-1">
										<label for="description">
											<i class="fa fa-square"></i> Status</label>
										<div>
											{{ !empty($event->status) ? strtoupper($event->status) : '-'}}
										</div>
									</div>
								</div>
								<div class="form-group form-row">
									<div class="col-md-6">
										<label for="published_date"><i class="fas fa-book-open"></i> Published Date</label>
										<div>
											{{ $event->publish_date ?? $event->created_at }}
										</div>
									</div>
									<div class="col-md-6">
										<label for="description">
											<i class="fa fa-square"></i> Group</label>
										<div>
											{{ $event->group->name ?? '-'}}
										</div>
									</div>
								</div>
								<div class="form-group form-row">
									<div class="col-md-12">
										<a href="{{ route('event.index') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">
											Back
										</a>
									</div>
								</div>
							</div>
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
	$(document).ready(function() {
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
				'copy', 'csv', 'excel', 'pdf', 'print'
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
				'copy', 'csv', 'excel', 'pdf', 'print'
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
				'copy', 'csv', 'excel', 'pdf', 'print'
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
				'copy', 'csv', 'excel', 'pdf', 'print'
			]
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
		$('table').on('click', '.confirm-attend', function(e) {
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
					$('#update-attend-' + ref).submit();

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