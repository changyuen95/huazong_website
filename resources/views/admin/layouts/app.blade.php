<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="icon" href="{{ asset('images/icon/panel-logo.png') }}" sizes="32x32" />
  <title>{{ config('main.web_name')}}</title>

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

  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- Sweet Alert2 -->
  <link rel="stylesheet" href="{{asset('admin/plugins/sweetalert2/sweetalert2.css')}}">
  <!-- Bootbox -->
  <script src="{{asset('plugins/bootbox/dist/bootbox.min.js')}}"></script>
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

  <!-- Clipboard -->
  <script src="/js/dist/clipboard.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <!-- Croppie -->
  <link rel="stylesheet" href="{{asset('admin/plugins/croppie/croppie.css')}}">
  @yield('style')
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg==" crossorigin="anonymous" />

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    @include('admin.layouts.topbar')
    @include('admin.layouts.sidenav')

    @yield('content')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('plugins/bootbox/dist/bootbox.min.js')}}"></script>


  <script>
    function outFunc() {
      var tooltip = document.getElementById("myTooltip");
      tooltip.innerHTML = "Copy to clipboard";
    }

    function copyLink(id) {
      var text = $("#" + id).data('link');
      var $temp = $("<input>");
      $("body").append($temp);
      $temp.val(text).select();
      document.execCommand("copy");
      $temp.remove();

      var tooltip = document.getElementById("myTooltip");
      tooltip.innerHTML = "Copied: " + text;
    }
  </script>
  <!-- Bootstrap -->
  <script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- jQuery library -->
  {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}

  <!-- Latest compiled JavaScript -->
  {{-- <script src="{{asset('admin/js/bootstrap.3.4.1.js')}}"></script> --}}

  <!-- overlayScrollbars -->
  <script src="{{asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('admin/js/adminlte.js')}}"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="{{asset('admin/js/demo.js')}}"></script>

  <script src="{{asset('admin/js/tagsinput.js')}}"></script>


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


  @if(session()->has('success'))
  <script>
    $(document).ready(function() {
      swal.fire("Success!", "{{session()->get('success')}}", "success")
    });
  </script>
  @endif

  @if(session()->has('warning'))
  <script>
    $(document).ready(function() {
      swal.fire("Warning!", "{{session()->get('warning')}}", "info")
    });
  </script>
  @endif


  @if(session()->has('fail'))
  <script>
    $(document).ready(function() {
      swal.fire("Error!", "{{session()->get('fail')}}", "error")
    });
  </script>
  @endif

  <script>
    $(function() {
      $('.select2').select2();
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

  <script type="text/javascript">
    var Clipboard = new ClipboardJS('.cp-btn');
    console.info('Text:');

    Clipboard.on('success', function(e) {
      bootbox.alert("Copied!");


      e.clearSelection();
    });

    Clipboard.on('error', function(e) {
      console.error('Action:', e.action);
      console.error('Trigger:', e.trigger);
    });
  </script>
</body>

</html>