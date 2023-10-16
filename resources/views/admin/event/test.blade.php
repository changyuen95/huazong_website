{{-- @extends('admin.layouts.master') --}}

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Upload here</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						{{-- <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li> --}}
						{{-- <li class="breadcrumb-item active">Create Event</li> --}}
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

				<!-- /.row -->

				<div class="row">
					<!-- left column -->
					<div class="col-md-10">
						<!-- general form elements -->
						<div class="card card-primary">

							<!-- /.card-header -->
							<!-- form start -->
							<div class="card-body">

								<div class="form-group">
									<input type="hidden" name="banner_link">
									<label for="customFile">Crop Image</label>
									<div class="custom-file">
										<input type="file" id="file-upload"
											class="custom-file-input @error('banner_link') is-invalid @enderror"
											name="event_banner" id="customFile" required>
										<label id="filename" class="custom-file-label" for="customFile">Choose file (Max
											File Size:5 MB)</label>
									</div>
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
										<img id="updated_image"
											src="{{asset('crop_image/image_35720200225085156.jpeg')}}" alt=""
											width="600px">
									</div>
								</div>
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
	$(document).on('mouseup touchend', function (e) {
  	var container = $(".bootstrap-datetimepicker-widget");
  	if (!container.is(e.target) && container.has(e.target).length === 0) {
    	container.hide();
  	}
});

$(document).ready(function(){
	var croppie_image = $('#image-preview').croppie({
        viewport: {
          width: 400,
          height: 200,
          type: 'rectangle'
        },
        boundary: {
          width: 500,
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

	$(document).on('click', '.upload_image_link', function (event) {
        event.preventDefault();

        croppie_image.croppie('result', {
            type: 'base64', size: {width:1200, height:600}, format: 'png',
        }).then(function (base64) {

            jQuery.ajax({
                url: "{{route('test.upload.crop')}}",
                type: 'post',
                data: { _token: "{{ csrf_token() }}",
				image_base64: base64
				},
                success: function (response) {
                    if(response.success == true){
						$('.preview_container').hide();
						$('input[name="banner_link"]').val(response.name);
						$('#uploaded_image').show();
						$('#updated_image').attr('src', response.data );
                    }else{
                    }
                }
            });

        });

    });

    croppie_image.croppie('result', 'base64');

	$('#file-upload').change(function() {
		if(ValidateSingleInput(this)){
			$('.preview_container').show();
			readFile(this);
			var file = $('#file-upload')[0].files[0].name;
			$(this).next('label').text(file);
		}else{
			swal.fire("Error!", "Invalid Image Type", "error")
		}
	});

	var _validFileExtensions = [".jpg", ".jpeg", ".png"];
    function ValidateSingleInput(oInput) {
        if (oInput.type == "file") {
            var sFileName = oInput.value;
            if (sFileName.length > 0) {
                var blnValid = false;
                for (var j = 0; j < _validFileExtensions.length; j++) {
                    var sCurExtension = _validFileExtensions[j];
                    if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                        blnValid = true;
                        break;
                    }
                }
                if (!blnValid) {
                    return false;
                }
            }
        }
        return true;
    }

	CKEDITOR.replace( 'event_description', {
		uploadUrl : "{{ route('ckeditor.upload.image',['_token'=>csrf_token()]) }}",
		filebrowserUploadUrl : "{{ route('ckeditor.upload.image',['_token'=>csrf_token()]) }}",
		entities : false,
		fillEmptyBlocks : true
	});

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Timepicker
    $('#starttimepicker').datetimepicker({
      format: 'LT'
    })

    $('#endtimepicker').datetimepicker({
      format: 'LT'
    })

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
    })
});
</script>
@endsection