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
			<form action="{{route('event.update', $event->id)}}" method="POST" enctype="multipart/form-data">
				{{method_field('PUT')}}
				@csrf
				<div class="row">
					<!-- left column -->
					<div class="col-md-10">
						<!-- general form elements -->
						<div class="card card-primary">
							<div class="card-header bg-navy">
								<h3 class="card-title"><i class="fas fa-info-circle"></i> Company Information</h3>
								<div class="card-tools">
									<button type="button" class="btn btn-tool" data-card-widget="collapse"
										data-toggle="tooltip" title="Collapse">
										<i class="fas fa-minus"></i>
									</button>
								</div>
							</div>
							<!-- /.card-header -->
							<div class="card-body">
								<div class="form-group">
									<label>Company Name</label>
									<input type="text" value="{{ !empty($event->company) ? $event->company->name : ''}}"
										class="form-control" disabled>
								</div>
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->
					</div>
					<!--/.col (left) -->
				</div>
				<!-- /.row -->

				<div class="row">
					<!-- left column -->
					<div class="col-md-10">
						<!-- general form elements -->
						<div class="card card-primary">
							<div class="card-header bg-navy">
								<h3 class="card-title"><i class="fas fa-info-circle"></i> Event Information</h3>
								<div class="card-tools">
									<button type="button" class="btn btn-tool" data-card-widget="collapse"
										data-toggle="tooltip" title="Collapse">
										<i class="fas fa-minus"></i>
									</button>
								</div>
							</div>
							<!-- /.card-header -->
							<!-- form start -->
							<div class="card-body">
								<div class="form-group">
									<label for="event_name">Name</label>
									<input type="text" class="form-control  @error('event_name') is-invalid @enderror"
										id="event_name" name="event_name" placeholder="Enter name.."
										value="{{old('event_name', $event->name)}}" required>
									@error('event_name')
									<span class="invalid-feedback d-block" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>

								{{-- Point --}}
								<div class="form-group form-row">
									<div class="col-md-6">
										<label for="point">Registrations Points</label>
										<input min="0" step=0.01 type="number" class="form-control  @error('point') is-invalid @enderror"
											id="joined_point" name="joined_point" placeholder="Enter point.."
											value="{{old('joined_point') ?? $event->joined_point}}">
										@error('joined_point')
										<span class="invalid-feedback d-block" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="col-md-6">
										<label for="point">Attendance Point</label>
										<input min="0" step=0.01 type="number" class="form-control  @error('point') is-invalid @enderror"
											id="attendance_point" name="attendance_point" placeholder="Enter point.."
											value="{{old('attendance_point') ?? $event->attendance_point}}">
										@error('attendance_point')
										<span class="invalid-feedback d-block" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>

								<div class="form-group">
									<label for="event_description">Description & Itinerary</label>
									<textarea class="form-control" name="event_description">
											{!! old('event_description', $event->description) !!}
										</textarea>
									@error('event_description')
									<span class="invalid-feedback d-block" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
								<div class="form-group">
									<label for="event_location">Event Location</label>
									<input type="text"
										class="form-control  @error('event_location') is-invalid @enderror"
										id="event_location" name="event_location" placeholder="Location"
										value="{{old('event_location', $event->location)}}" required>
									@error('event_location')
									<span class="invalid-feedback d-block" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
								<div class="form-group">
									<label for="event_address">Event Address</label>
									<input type="text"
										class="form-control  @error('event_address') is-invalid @enderror"
										id="event_address" name="event_address" placeholder="Address"
										value="{{old('event_address', $event->address)}}" required>
									@error('event_address')
									<span class="invalid-feedback d-block" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
								<div class="form-group">
									<label for="event_email">Email</label>
									<input type="email" class="form-control  @error('event_email') is-invalid @enderror"
										id="event_email" name="event_email" placeholder="Email"
										value="{{old('event_email', $event->email)}}" required>
									@error('event_email')
									<span class="invalid-feedback d-block" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
								<div class="form-group">
									<label for="event_contact">Contact</label>
									<input type="text"
										class="form-control  @error('event_contact') is-invalid @enderror"
										id="event_contact" name="event_contact" placeholder="Contact Number"
										value="{{old('event_contact', $event->contact)}}" required>
									@error('event_contact')
									<span class="invalid-feedback d-block" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
								<!-- Date dd/mm/yyyy -->
								<div class="bootstrap-timepicker">
									<div class="form-group">
										<label>Start Date</label>
										<div class="input-group date" id='startdatetimepicker' data-target-input="nearest">
											<div class="input-group-prepend" data-target="#startdatetimepicker" data-toggle="datetimepicker">
												<span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
											</div>
											<input type="text"
												class="form-control @error('event_date') is-invalid @enderror"
												data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy"
												data-mask name="event_date" data-target="#startdatetimepicker"
												value="{{ Carbon\Carbon::parse($event->date)->format('d/m/Y') }}" required>
										</div>
										@error('event_date')
										<span class="invalid-feedback d-block" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
										<!-- /.input group -->
									</div>
								</div>
								<!-- Start time Picker -->
								<div class="bootstrap-timepicker">
									<div class="form-group">
										<label>Start Time</label>
										<div class="input-group date" id="starttimepicker" data-target-input="nearest">
											<input type="text"
												class="form-control datetimepicker-input @error('start_time') is-invalid @enderror"
												name="start_time" data-target="#starttimepicker"
												value="{{old('start_time',$event->start_time)}}" required />
											<div class="input-group-append" data-target="#starttimepicker"
												data-toggle="datetimepicker">
												<div class="input-group-text"><i class="far fa-clock"></i></div>
											</div>
										</div>
										<!-- /.input group -->
										@error('start_time')
										<span class="invalid-feedback d-block" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<!-- /.form group -->
								</div>
								<!-- End time Picker -->
								<div class="bootstrap-timepicker">
									<div class="form-group">
										<label>End Time</label>
										<div class="input-group date" id="endtimepicker" data-target-input="nearest">
											<input type="text"
												class="form-control datetimepicker-input @error('end_time') is-invalid @enderror"
												name="end_time" data-target="#endtimepicker"
												value="{{old('end_time',$event->end_time)}}" required />
											<div class="input-group-append" data-target="#endtimepicker"
												data-toggle="datetimepicker">
												<div class="input-group-text"><i class="far fa-clock"></i></div>
											</div>
										</div>
										<!-- /.input group -->
										@error('end_time')
										<span class="invalid-feedback d-block" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<!-- /.form group -->
								</div>

								<div class="form-group">
									<label for="customFile">Banner <i class="fa fa-info-circle" aria-hidden="true" data-html="true" data-toggle="tooltip" data-placement="right" title="Supported Formats<br>Image - jpg, jpeg, png"></i></label>
									<div class="d-flex flex-wrap">

										<div class="col-auto">
											<img src="{{asset($event->banner_path)}}"  width='100%' >
										</div>

										{{-- <div class="col-auto my-auto">
											<a id="save-image" href="javascript:void(0)" class="text-navy" data-toggle="modal" data-target="#uploadImage">Change logo</a>
										</div> --}}
									</div>
								</div>

								<div class="form-group">
									<div class="custom-file">
										<input type="file" id="file-upload" name="file"
											class="custom-file-input @error('file') is-invalid @enderror"
											accept=".jpg,.jpeg,.png">
										<label id="filename" class="custom-file-label" for="customFile">Choose file (Max File Size:20 MB)</label>
									</div>
									@error('file')
									<span class="invalid-feedback d-block" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
								<div class="form-group">
									<div class="d-flex flex-wrap">
										<div class="col-md-6 text-left">
											<div class="preview_container" style="display: none">
												<div id="image-preview"></div>
												<div class="text-center">
													<button type="button" class="upload_image_link btn btn-success">Use
														this</button>
												</div>
											</div>
											<div id="uploaded_image">
											</div>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label for="max_capacity">Max Capacity</label>
									<input type="number" class="form-control  @error('max_capacity') is-invalid @enderror"
										id="max_capacity" min="1" max="1000" name="max_capacity" placeholder="Max Capacity"
										value="{{old('max_capacity', $event->max_capacity)}}" required>
									@error('max_capacity')
									<span class="invalid-feedback d-block" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>

								<div class="form-group">
									<label for="external_registration_link">External Registration Link</label>
									<input type="text"
										class="form-control  @error('external_registration_link') is-invalid @enderror"
										id="external_registration_link" name="external_registration_link" placeholder="External Registration Link"
										value="{{old('external_registration_link', $event->external_registration_link)}}">
									@error('external_registration_link')
									<span class="invalid-feedback d-block" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>

								<div class="form-group">
									<label for="allow_feedback">User can fill in feedback ?</label>
									<select name="allow_feedback" class="form-control col-3" required>
										<option value="1" {{ $event->allow_feedback == 1 ? 'selected' : '' }}>Yes</option>
										<option value="0" {{ $event->allow_feedback == 0 ? 'selected' : '' }}>No</option>
									</select>
									@error('allow_feedback')
									<span class="invalid-feedback d-block" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>


								@if($event->created_by)

								<div class="form-group">
									<label for="invitation">Invitation List</label>
									<select name="invitation[]" multiple="multiple" class="form-control col-3 select2" required>
										@foreach($invitation as $list)
										<option value="{{$list->id}}" {{ in_array($list->id,$invitation_list) ? 'selected' : '' }}>{{$list->name}}</option>
										@endforeach
									</select>
									@error('invitation')
									<span class="invalid-feedback d-block" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>

								@endif

								<div class="form-group">
									<label for="event_status">Status</label>
									<select name="event_status" class="form-control col-3" required>
										<option value="Approved" {{ $event->event_status == 'Approved' ? 'selected' : '' }}>Approved</option>
										<option value="Cancelled" {{ ($event->event_status == 'Rejected' || $event->event_status == 'Cancelled') ? 'selected' : '' }}>Cancelled</option>
										<option value="Postponed" {{ $event->event_status == 'Postponed' ? 'selected' : '' }}>Postponed</option>
										<option value="Pending" {{ $event->event_status == 'Pending' ? 'selected' : '' }}>Pending</option>
									</select>
									@error('event_status')
									<span class="invalid-feedback d-block" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>

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
	$(document).on('mouseup touchend', function (e) {
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

        reader.onload = function (event) {
          croppie_image.croppie('bind', {
            url: event.target.result
          });
        };

        reader.readAsDataURL(input.files[0]);
      } else {
		swal.fire("Error!", "Sorry - you\'re browser doesn\'t support the FileReader API", "error")

      }
    }




$(document).ready(function(){



	CKEDITOR.replace( 'event_description', {
		uploadUrl : "{{ route('ckeditor.upload.image',['_token'=>csrf_token()]) }}",
		filebrowserUploadUrl : "{{ route('ckeditor.upload.image',['_token'=>csrf_token()]) }}",
		entities : false,
		fillEmptyBlocks : true
	});


    $('[data-mask]').inputmask('dd/mm/yyyy', {'placeholder': 'dd/mm/yyyy'});

    $('#starttimepicker').datetimepicker({
        format: 'LT',
        hour : '23',
        minute :'00'
    });

    $('#endtimepicker').datetimepicker({
      format: 'LT'
    });

	$('#startdatetimepicker').datetimepicker({
		format: 'DD/MM/YYYY'
    })
	$('#enddatetimepicker').datetimepicker({
      format: 'DD/MM/YYYY'
    })

	//Initialize Select2 Elements
	$('.select2bs4').select2({
		theme: 'bootstrap4',
		minimumResultsForSearch: -1,
		placeholder: function(){
			$(this).data('placeholder');
		}
    });

	$('.btn-update-event').click(function () {
		Swal.fire({
			title: 'Remind participants?',
			text: 'Do you want email to update participants as well?',
			icon: 'warning',
			showCancelButton: true,
			confirmButtonText: 'Yes, email it!',
			cancelButtonText: 'No, just save it!'
		}).then((result) => {
			if (result.value) {
				$("input[name='email_update_changes']").val(true);
			}
			$('form').submit();
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
			} else if(file.type.match('pdf')) {
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
				var blob = new Blob([fileReader.result], {type: file.type});
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

		$('#delete-upload').on('click', function(e){
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
				callback: function (result) {
					if(result){
						$('#preview-container').removeClass('d-flex').addClass('d-none');
						$("#img-area").html('');
					}
				}
			});

		})
});
</script>
@endsection