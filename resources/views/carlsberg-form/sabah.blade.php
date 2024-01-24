@extends('layouts.app')

@section('title', '马来西亚中华大会堂总会 - 大马华总')

@section('content')

    @include('carlsberg-form.include.carlsbergForm')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script>
        function nextStep(currentStep) {
            var nextStep = currentStep + 1;
            $('#step-' + currentStep).hide();
            $('#step-' + nextStep).show();
            
        }

        function prevStep(currentStep) {
            var prevStep = currentStep - 1;
            $('#step-' + currentStep).hide();
            $('#step-' + prevStep).show();
        }

        $('.custom-file-input').on('change',function(){console.log('here')
            //get the file name
            var fileName = $(this).val();
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        })
    </script>
    @include('layouts.footer')

@endsection
