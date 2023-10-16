<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    {{-- Base Meta Tags --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Custom Meta Tags --}}
    @yield('meta_tags')

    {{-- Title --}}
    <title>
        @yield('title_prefix', config('adminlte.title_prefix', ''))
        @yield('title', config('adminlte.title', 'AdminLTE 3'))
        @yield('title_postfix', config('adminlte.title_postfix', ''))
    </title>

 <!-- Font Awesome Icons -->
 <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/customize.css'.'?v='.time())}}">
  <!-- DataTables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">

    {{-- Custom stylesheets (pre AdminLTE) --}}
    @yield('adminlte_css_pre')

    {{-- Base Stylesheets --}}
    @if(!config('adminlte.enabled_laravel_mix'))
        <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/css/adminlte.min.css')}}">

        @if(config('adminlte.google_fonts.allowed', true))
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        @endif
    @else
        <link rel="stylesheet" href="{{ mix(config('adminlte.laravel_mix_css_path', 'css/app.css')) }}">
    @endif

    {{-- Extra Configured Plugins Stylesheets --}}
    @include('admin.plugins', ['type' => 'css'])

    {{-- Livewire Styles --}}
    @if(config('adminlte.livewire'))
        @if(intval(app()->version()) >= 7)
            @livewireStyles
        @else
            <livewire:styles />
        @endif
    @endif
    @inject('layoutHelper', 'JeroenNoten\LaravelAdminLte\Helpers\LayoutHelper')

    {{-- Custom Stylesheets (post AdminLTE) --}}
    @yield('adminlte_css')

    {{-- Favicon --}}
    @if(config('adminlte.use_ico_only'))
        <link rel="shortcut icon" href="{{ asset('favicons/favicon.ico') }}" />
    @elseif(config('adminlte.use_full_favicon'))
        <link rel="shortcut icon" href="{{ asset('favicons/favicon.ico') }}" />
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicons/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicons/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicons/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicons/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicons/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicons/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicons/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicons/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicons/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('favicons/android-icon-192x192.png') }}">
        <link rel="manifest" crossorigin="use-credentials" href="{{ asset('favicons/manifest.json') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset('favicon/ms-icon-144x144.png') }}">
    @endif
<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet"
    href="{{asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- Sweet Alert2 -->
  <link rel="stylesheet" href="{{asset('admin/plugins/sweetalert2/sweetalert2.css')}}">
  <!-- Bootbox -->
  <script src="{{asset('admin/plugins/bootbox/dist/bootbox.min.js')}}"></script>
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <!-- Croppie -->
  <link rel="stylesheet" href="{{asset('admin/plugins/croppie/croppie.css')}}">
  @yield('style')
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg==" crossorigin="anonymous" />


    
</head>

<body class="@yield('classes_body')" @yield('body_data')>

 <div class="wrapper">

      
        {{-- Top Navbar --}}
        @if($layoutHelper->isLayoutTopnavEnabled())
            @include('admin.partials.navbar.navbar-layout-topnav')
        @else
            @include('admin.partials.navbar.navbar')
        @endif

        {{-- Left Main Sidebar --}}
        @if(!$layoutHelper->isLayoutTopnavEnabled())
            @include('admin.partials.sidebar.left-sidebar')
        @endif

  
            @include('admin.partials.cwrapper.cwrapper-default')
       
        
    </div>

    {{-- Footer --}}
        @hasSection('footer')
            @include('admin.partials.footer.footer')
        @endif

    {{-- Base Scripts --}}
    @if(!config('adminlte.enabled_laravel_mix'))
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{asset('admin/plugins/bootbox/dist/bootbox.min.js')}}"></script>

        <!-- Bootstrap -->
        <script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>    

         <!-- overlayScrollbars -->
        <script src="{{asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('admin/js/adminlte.js')}}"></script>

        <!-- OPTIONAL SCRIPTS -->
        <script src="{{asset('admin/js/demo.js')}}"></script>

        <script src="{{asset('admin/js/tagsinput.js')}}"></script>

    @else
        <script src="{{ mix(config('adminlte.laravel_mix_js_path', 'js/app.js')) }}"></script>
    @endif


  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="{{asset('admin/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
  <script src="{{asset('admin/plugins/raphael/raphael.min.js')}}"></script>
  <script src="{{asset('admin/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
  <script src="{{asset('admin/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>

  <!-- PAGE SCRIPTS -->
  {{-- <script src="{{asset('admin/js/pages/dashboard2.js')}}"></script> --}}
  <!-- InputMask -->
  <script src="{{asset('admin/plugins/moment/moment.min.js')}}"></script>
  <script src="{{asset('admin/plugins/inputmask/min/jquery.inputmask.bundle.min.js')}}"></script>

  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>


    <!-- DataTables -->
  <script src="{{asset('admin/plugins/datatables/jquery.dataTables.js')}}"></script>
  <script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

  <!-- Sweet Alert2 -->
  <script src="{{asset('admin/plugins/sweetalert2/sweetalert2.js')}}"></script>

  <!-- Select2 -->
  <script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>

  <!-- jsQR -->
  <script src="{{asset('admin/plugins/jsQR/jsQR.js')}}"></script>

  <!-- CK Editor -->
  <script src="//cdn.ckeditor.com/4.11.1/full/ckeditor.js"></script>

  <!-- Croppie -->
  <script src="{{asset('admin/plugins/croppie/croppie.js')}}"></script>


    {{-- Extra Configured Plugins Scripts --}}
    @include('admin.plugins', ['type' => 'js'])

    {{-- Livewire Script --}}
    @if(config('adminlte.livewire'))
        @if(intval(app()->version()) >= 7)
            @livewireScripts
        @else
            <livewire:scripts />
        @endif
    @endif

    {{-- Custom Scripts --}}
    @yield('adminlte_js')

    @if(session()->has('success'))
  <script>
    $(document).ready(function(){
        swal.fire("Success!", "{{session()->get('success')}}", "success")
    });
  </script>
  @endif

  @if(session()->has('warning'))
  <script>
    $(document).ready(function(){
        swal.fire("Warning!", "{{session()->get('warning')}}", "info")
    });
  </script>
  @endif


  @if(session()->has('fail'))
  <script>
    $(document).ready(function(){
        swal.fire("Error!", "{{session()->get('fail')}}", "error")
    });
  </script>
  @endif

  <script>
    $(function () {
      $('.select2').select2();
      $('.datetimepicker').datepicker({
            format: 'yyyy-mm-dd hh:mm:a',
            orientation: "bottom",
          });

        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            orientation: "bottom",
          });

        $('.timepicker').datetimepicker({
            format: 'hh:mm:a'
        });

        $('.datepicker2').datepicker({
            format: 'yyyy-mm-dd',
            orientation: "bottom",
          });

        $('.timepicker2').datetimepicker({
            format: 'hh:mm:a'
        });

    });
  </script>

  @yield('script')



</body>

</html>
