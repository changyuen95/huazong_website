@extends('admin.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Edit Event</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
						<li class="breadcrumb-item active">Edit Event</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>


	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<form id="update_event_form" action="{{route('event.update', $event->id)}}" method="POST" enctype="multipart/form-data">
				{{method_field('PUT')}}
				@csrf
				<div class="row">
					<!-- left column -->
					<div class="col-md-10">
						<!-- general form elements -->
						<div class="card card-primary">
							<div class="card-header bg-navy">
								<h3 class="card-title"><i class="fas fa-info-circle"></i> Event Information</h3>
								<div class="card-tools">
									<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
										<i class="fas fa-minus"></i>
									</button>
								</div>
							</div>
							<!-- /.card-header -->
							<!-- form start -->
							<div class="card-body">
								<div class="form-group">
									<label for="event_name">Name</label>
									<input type="text" class="form-control  @error('event_name') is-invalid @enderror" id="event_name" name="event_name" placeholder="Enter name.." value="{{old('event_name', $event->title)}}" required>
									@error('event_name')
									<span class="invalid-feedback d-block" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>


								<div class="form-group">
									<label for="event_description">Description & Itinerary</label>
									<textarea class="form-control" name="event_description">
											{!! old('event_description', $event->content) !!}
										</textarea>
									@error('event_description')
									<span class="invalid-feedback d-block" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>

								<!-- Date dd/mm/yyyy -->
								<div class="bootstrap-timepicker">
									<div class="form-group">
										<label>Published Date</label>
										<div class="input-group date" id='startdatetimepicker' data-target-input="nearest">
											<div class="input-group-prepend" data-target="#startdatetimepicker" data-toggle="datetimepicker">
												<span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
											</div>
											<input type="text" class="form-control @error('event_date') is-invalid @enderror" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd hh:mm:ss" name="event_date" data-target="#startdatetimepicker" value="{{old('event_date') ?? Carbon::now()->format('Y-m-d H:i:s')}}" required>
										</div>
										@error('event_date')
										<span class="invalid-feedback d-block" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
										<!-- /.input group -->
									</div>
								</div>

								<div class="form-group">
									<label for="customFile">Event Main Banner <i class="fa fa-info-circle" aria-hidden="true" data-html="true" data-toggle="tooltip" data-placement="right" title="Supported Formats<br>Image - jpg, jpeg, gif, png, bmp<br>Video - mp4, webm, ogg, mov"></i></label>
									<div class="custom-file">
										<input type="file" id="file-upload" name="main_banner" class="custom-file-input @error('main_banner') is-invalid @enderror" accept=".jpg,.jpeg,.png">
										<label id="filename" class="custom-file-label" for="customFile">Choose file (Max File Size:5 MB)</label>
									</div>
									<small><b>NOTE: <b><i>Recommend Size 1200 x 600 (px)</i></small>
									@foreach($event->images as $image)
									@if($image->type == "main")
									<div>
										<a href="{{ $image ? $image->name : '#' }}" target="_blank">{{ $image ? $image->name : '-' }}</a>
									</div>
									@endif
									@endforeach
									@error('file')
									<span class="invalid-feedback d-block" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>

								<div class="form-group">
									<label for="customFile">Event Details Banner <i class="fa fa-info-circle" aria-hidden="true" data-html="true" data-toggle="tooltip" data-placement="right" title="Supported Formats<br>Image - jpg, jpeg, gif, png, bmp<br>Video - mp4, webm, ogg, mov"></i></label>
									<div class="custom-file">
										<input type="file" id="file-upload" name="details_banner" class="custom-file-input @error('details_banner') is-invalid @enderror" accept=".jpg,.jpeg,.png">
										<label id="filename" class="custom-file-label" for="customFile">Choose file (Max File Size:5 MB)</label>
									</div>
									<small><b>NOTE: <b><i>Recommend Size 1200 x 600 (px)</i></small>
									@foreach($event->images as $image)
									@if($image->type == "detail")
									<div>
										<a href="{{ $image ? $image->name : '#' }}" target="_blank">{{ $image ? $image->name : '-' }}</a>
									</div>
									@endif
									@endforeach
									@error('file')
									<span class="invalid-feedback d-block" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>

								@if(auth()->user()->hasPermissionTo(App\Library\PermissionTag::PERMISSION_FOR_SUPER_ADMIN))
								<div class="form-group">
									<label for="event_status">Status</label>
									<select name="event_status" class="form-control col-3" required>
										<option value="" disabled>Please select a status</option>
										<option value="Pending" {{ $event->status == 'Pending' ? 'selected' : '' }}>Pending</option>
										<option value="Active" {{ $event->status == 'Active' ? 'selected' : '' }}>Approved(Active)</option>
										<option value="Rejected" {{ $event->status == 'Rejected' ? 'selected' : '' }}>Rejected(Inactive)</option>
									</select>
									@error('event_status')
									<span class="invalid-feedback d-block" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
								@endif
							</div>
							<!-- /.card-body -->
							<div class="card-footer">
								<input type="hidden" name="email_update_changes">
								<button type="submit" class="btn-update-event btn btn-primary bg-navy">Update</button>
							</div>
						</div>
						<!-- /.card -->
					</div>
					<!--/.col (left) -->
				</div>
			</form>

		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('script')
<script>
	$(document).on('mouseup touchend', function(e) {
		var container = $(".bootstrap-datetimepicker-widget");
		if (!container.is(e.target) && container.has(e.target).length === 0) {
			container.hide();
		}
	});

	var croppie_image = $('#image-preview').croppie({
		viewport: {
			width: 400,
			height: 200,
			type: 'rectangle'
		},
		boundary: {
			width: 450,
			height: 250
		},
		enableExif: true
	});


	function readFile(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function(event) {
				croppie_image.croppie('bind', {
					url: event.target.result
				});
			};

			reader.readAsDataURL(input.files[0]);
		} else {
			swal.fire("Error!", "Sorry - you\'re browser doesn\'t support the FileReader API", "error")

		}
	}




	$(document).ready(function() {



		CKEDITOR.replace('event_description', {
			uploadUrl: "{{ route('ckeditor.upload.image',['_token'=>csrf_token()]) }}",
			filebrowserUploadUrl: "{{ route('ckeditor.upload.image',['_token'=>csrf_token()]) }}",
			entities: false,
			fillEmptyBlocks: true
		});


		// $('[data-mask]').inputmask('yyyy-mm-dd hh:mm:ss', {
		// 	'placeholder': 'yyyy-mm-dd hh:mm:ss'
		// });

		$('[data-mask]').inputmask();

		// $('#starttimepicker').datetimepicker({
		// 	format: 'LT',
		// 	hour: '23',
		// 	minute: '00'
		// });

		// $('#endtimepicker').datetimepicker({
		// 	format: 'LT'
		// });

		// $('#startdatetimepicker').datetimepicker({
		// 	format: 'DD/MM/YYYY'
		// })
		// $('#enddatetimepicker').datetimepicker({
		// 	format: 'DD/MM/YYYY'
		// })

		//Initialize Select2 Elements
		$('.select2bs4').select2({
			theme: 'bootstrap4',
			minimumResultsForSearch: -1,
			placeholder: function() {
				$(this).data('placeholder');
			}
		});

		$('.btn-update-event').click(function() {
			Swal.fire({
				title: 'Update Event?',
				text: 'Are you sure you want update event details?',
				icon: 'warning',
				showCancelButton: true,
				confirmButtonText: 'Yes',
				cancelButtonText: 'No'
			}).then((result) => {
				if (result.value) {
					$('#update_event_form').submit();
				}
			});
			return false;
		});

		document.getElementById('file-upload').addEventListener('change', function(event) {
			var file = event.target.files[0];
			var fileReader = new FileReader();
			if (file.type.match('image')) {
				fileReader.onload = function() {
					var img = document.createElement('img');
					img.src = fileReader.result;
					img.style.width = "100%";
					$('#preview-container').addClass('d-flex').removeClass('d-none');
					document.getElementById('uploaded_image').innerHTML = '';
					document.getElementById('uploaded_image').appendChild(img);
					// document.getElementsByTagName('div')[0].appendChild(img);
				};
				fileReader.readAsDataURL(file);
			} else if (file.type.match('pdf')) {
				// Note: Disable this if enable PDF format for Library
				swal.fire("Error!", "PDF Format is not supported for Library", "error");

				// Note: Enable this if enable PDF format for Library
				// var img = document.createElement('img');
				// img.src = "{{ asset('images/pdf_preview.png') }}";
				// img.style.width = "50px";
				// $('#preview-container').addClass('d-flex').removeClass('d-none');
				// document.getElementById('uploaded_image').innerHTML = '';
				// document.getElementById('uploaded_image').appendChild(img);
			} else {
				fileReader.onload = function() {
					var blob = new Blob([fileReader.result], {
						type: file.type
					});
					var url = URL.createObjectURL(blob);
					var video = document.createElement('video');
					var timeupdate = function() {
						if (snapImage()) {
							video.removeEventListener('timeupdate', timeupdate);
							video.pause();
						}
					};
					video.addEventListener('loadeddata', function() {
						if (snapImage()) {
							video.removeEventListener('timeupdate', timeupdate);
						}
					});
					var snapImage = function() {
						var canvas = document.createElement('canvas');
						canvas.width = video.videoWidth;
						canvas.height = video.videoHeight;
						canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
						var image = canvas.toDataURL();
						var success = image.length > 100000;
						if (success) {
							var img = document.createElement('img');
							img.src = image;
							img.style.width = "100%";
							$('#preview-container').addClass('d-flex').removeClass('d-none');
							document.getElementById('uploaded_image').innerHTML = '';
							document.getElementById('uploaded_image').appendChild(img);
							// document.getElementsByTagName('div')[0].appendChild(img);
							URL.revokeObjectURL(url);
						}
						return success;
					};
					video.addEventListener('timeupdate', timeupdate);
					video.preload = 'metadata';
					video.src = url;
					// Load video in Safari / IE11
					video.muted = true;
					video.playsInline = true;
					video.play();
				};
				fileReader.readAsArrayBuffer(file);
			}


		});

		$('#delete-upload').on('click', function(e) {
			e.preventDefault();
			bootbox.confirm({
				message: "Are you sure want to remove photo?",
				buttons: {
					confirm: {
						label: 'Yes',
						className: 'btn-success'
					},
					cancel: {
						label: 'No',
						className: 'btn-danger'
					}
				},
				callback: function(result) {
					if (result) {
						$('#preview-container').removeClass('d-flex').addClass('d-none');
						$("#img-area").html('');
					}
				}
			});

		})
	});
</script>
@endsection