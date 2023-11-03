@extends('admin.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Create Event</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
						<li class="breadcrumb-item active">Create Event</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<form action="{{route('event.store')}}" method="POST" enctype="multipart/form-data">
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
									<label for="event_name">Title</label>
									<input type="text" class="form-control  @error('event_name') is-invalid @enderror" id="event_name" name="event_name" placeholder="Enter name.." value="{{old('event_name')}}">
									@error('event_name')
									<span class="invalid-feedback d-block" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
								{{-- Point --}}

								<div class="form-group">
									<label for="event_description">Content</label>
									{{-- <textarea name="event_description" id="event_description" class="form-control @error('event_description') is-invalid @enderror" cols="100" rows="15" placeholder="Write message.."></textarea> --}}
									<textarea class="form-control" name="event_description">{{ old('event_description') }}</textarea>
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


								{{-- <div class="form-group">
									<input type="hidden" name="banner_link">
									<label for="customFile">Event Banner</label>
									<div class="custom-file">
										<input type="file" id="file-upload"
											class="custom-file-input @error('banner_link') is-invalid @enderror"
											name="event_banner" id="customFile" required>
										<label id="filename" class="custom-file-label" for="customFile">Choose file (Max
											File Size:5 MB)</label>
									</div>
									<small><b>NOTE: <b><i>Recommend Size 140 x 128 (px)</i></small>
									@error('banner_link')
									<span class="invalid-feedback d-block" role="alert">
										<strong>{{ $message }}</strong>
								</span>
								@enderror
								<div class="preview_container" style="display: none">
									<div id="image-preview"></div>
									<button type="button" class="upload_image_link btn btn-success">Confirm</button>
								</div>
								<div id="uploaded_image" style="display:none">
									<img id="updated_image" src="{{asset('crop_image/image_35720200225085156.jpeg')}}" alt="" width="600px">
								</div>
							</div> --}}

							<div class="form-group">
								<label for="customFile">Event Main Banner <i class="fa fa-info-circle" aria-hidden="true" data-html="true" data-toggle="tooltip" data-placement="right" title="Supported Formats<br>Image - jpg, jpeg, gif, png, bmp<br>Video - mp4, webm, ogg, mov"></i></label>
								<div class="custom-file">
									<input type="file" id="file-upload" name="main_banner" class="custom-file-input @error('main_banner') is-invalid @enderror" accept=".jpg,.jpeg,.png">
									<label id="filename" class="custom-file-label" for="customFile">Choose file (Max File Size:5 MB)</label>
								</div>
								<small><b>NOTE: <b><i>Recommend Size 1200 x 600 (px)</i></small>
								@error('file')
								<span class="invalid-feedback d-block" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>

							<div class="form-group">
								<div><label>Details Banner</label></div>
								<div class="custom-control custom-radio custom-control-inline details-banner-radio-div">
									<input type="radio" id="detailsRadioEnable" name="customRadioInline" class="details-banner-radio custom-control-input" value="enable" checked>
									<label class="custom-control-label" for="detailsRadioEnable">Enable</label>
								</div>
								<div class="custom-control custom-radio custom-control-inline details-banner-radio-div">
									<input type="radio" id="detailsRadioDisable" name="customRadioInline" class="details-banner-radio custom-control-input" value="disable">
									<label class="custom-control-label" for="detailsRadioDisable">Disable</label>
								</div>
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
											{{-- <img id="updated_image" src="" alt="" width="160px"> --}}
										</div>
									</div>
								</div>
							</div>


							<div class="form-group event-details-banner-section">
								<label for="customFile">Event Details Banner <i class="fa fa-info-circle" aria-hidden="true" data-html="true" data-toggle="tooltip" data-placement="right" title="Supported Formats<br>Image - jpg, jpeg, gif, png, bmp<br>Video - mp4, webm, ogg, mov"></i></label>
								<div class="custom-file">
									<input type="file" id="file-upload-two" name="details_banner" class="custom-file-input @error('details_banner') is-invalid @enderror" accept=".jpg,.jpeg,.png">
									<label id="filename" class="custom-file-label" for="customFile">Choose file (Max File Size:5 MB)</label>
								</div>
								<small><b>NOTE: <b><i>Recommend Size 1200 x 600 (px)</i></small>
								@error('file')
								<span class="invalid-feedback d-block" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>

							<div class="form-group">
								<div class="d-flex flex-wrap">
									<div class="col-md-6 text-left">
										<div class="preview_container_two" style="display: none">
											<div id="image-preview"></div>
											<div class="text-center">
												<button type="button" class="upload_image_link btn btn-success">Use
													this</button>
											</div>
										</div>
										<div id="uploaded_image_two">
											{{-- <img id="updated_image" src="" alt="" width="160px"> --}}
										</div>
									</div>
								</div>
							</div>
							<!-- 
								<div class="form-group">
									<label for="event_date">Max Capacity</label>
									<input  min="1" max="1000" type="text" class="form-control  @error('max_capacity') is-invalid @enderror"
										id="max_capacity" name="max_capacity" placeholder="Max Capacity" value="{{old('max_capacity')}}" required>
									@error('max_capacity')
									<span class="invalid-feedback d-block" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
								<div class="form-group">
									<label for="event_date">External Registration Link</label>
									<input type="text" class="form-control  @error('external_registration_link') is-invalid @enderror"
										id="external_registration_link" name="external_registration_link" placeholder="External Registration Link" value="{{old('external_registration_link')}}">
									@error('external_registration_link')
									<span class="invalid-feedback d-block" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div> -->
						</div>
						<!-- /.card-body -->
						<div class="card-footer">
							<button type="submit" class="btn btn-primary bg-navy">Create</button>
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

	$(document).ready(function() {

		CKEDITOR.replace('event_description', {
			uploadUrl: "{{ route('ckeditor.upload.image',['_token'=>csrf_token()]) }}",
			filebrowserUploadUrl: "{{ route('ckeditor.upload.image',['_token'=>csrf_token()]) }}",
			entities: false,
			fillEmptyBlocks: true
		});


		//Money Euro
		$('[data-mask]').inputmask()


		$('.select2bs4').select2({
			theme: 'bootstrap4',
			minimumResultsForSearch: -1,
			placeholder: function() {
				$(this).data('placeholder');
			}
		})

		document.getElementById('file-upload').addEventListener('change', handleDisplayImage);
		document.getElementById('file-upload-two').addEventListener('change', handleDisplayImage);

		$(".details-banner-radio").change(function(event) {
			console.log(event.target.value);

			$(".event-details-banner-section").removeClass("d-none");

			if (event.target.value == 'disable') {
				$(".event-details-banner-section").addClass("d-none");
			}
		});


		function handleDisplayImage(event) {
			var file = event.target.files[0];
			let previewContainer = "#preview-container"
			let uploadablePreview = "uploaded_image"


			if (event.target.id == 'file-upload-two') {
				previewContainer = "#preview-container-two"
				uploadablePreview = "uploaded_image_two"
			}

			var fileReader = new FileReader();
			if (file.type.match('image')) {
				fileReader.onload = function() {
					var img = document.createElement('img');
					img.src = fileReader.result;
					img.style.width = "100%";
					$(previewContainer).addClass('d-flex').removeClass('d-none');
					document.getElementById(uploadablePreview).innerHTML = '';
					document.getElementById(uploadablePreview).appendChild(img);
					// document.getElementsByTagName('div')[0].appendChild(img);
				};
				fileReader.readAsDataURL(file);
				// } else if(file.type.match('pdf')) {
				// Note: Disable this if enable PDF format for Library
				// swal.fire("Error!", "PDF Format is not supported for Library", "error");

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
		}

	});
</script>
@endsection