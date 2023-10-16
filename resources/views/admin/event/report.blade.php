@extends('admin.layouts.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>All Events</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Events Report</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-navy">
                            <h3 class="card-title"><i class="fas fa-dumbbell"></i> Events Report</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                    data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->

                        <!----- Generate Excel ----->
                        <div class="form-group col-md-2" style="margin-top: 20px;">
                            <form method="POST" action="{{ route('event.excel-report') }}">
                                @csrf

                                <input type="hidden" value="" name="search" id="getSearchValue">
								<input type="hidden" value="" name="start_date" id="getStartDate">
								<input type="hidden" value="" name="end_date" id="getEndDate">

                                <div class="form-group ml-2">
                                    <button type="submit" class="btn btn-success text-nowrap">
                                        <i class="fa fa-file-excel"></i>

                                        Generate Excel
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!----- Generate Excel end ----->

                        <div class="card-body">
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
                                            <p>*<b>Note:</b> QR Attendance Checkin is allowed from event's start datetime
                                                till 30 minutes after the event.</p>
                                            <img id="bigger-image"
                                                src="{{ asset('images/sample/no_image_available.jpeg') }}" width="100%"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="bootstrap-timepicker">
                                            <div class="form-group">
                                                <label>Start Date</label>
                                                <div class="input-group date" id='startdatetimepicker'
                                                    data-target-input="nearest">
                                                    {{-- <div class="input-group-prepend" data-target="#startdatetimepicker" data-toggle="datetimepicker">
													<span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
												</div> --}}
                                                    <input type="date" class="form-control"
                                                        data-inputmask-alias="datetime"
                                                        data-inputmask-inputformat="dd/mm/yyyy" data-mask name="start_date"
                                                        id="start_date" data-target="#startdatetimepicker"
                                                        value="{{ old('start_date') }}" required>
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="bootstrap-timepicker">
                                            <div class="form-group">
                                                <label>End Date</label>
                                                <div class="input-group date" id='enddatetimepicker'
                                                    data-target-input="nearest">
                                                    {{-- <div class="input-group-prepend" data-target="#enddatetimepicker"
												data-toggle="datetimepicker">
													<span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
												</div> --}}
                                                    <input type="date" class="form-control "
                                                        data-inputmask-alias="datetime"
                                                        data-inputmask-inputformat="dd/mm/yyyy" data-mask name="end_date"
                                                        id="end_date" data-target="#enddatetimepicker"
                                                        value="{{ old('end_date') }}" required>
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <button class="btn btn-sm btn-primary btn-action" id="filterdate"
                                            style="margin-top:35px">Filter</button>
                                    </div>
                                </div>
                                <table id="example" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Event Name</th>
                                            <th>Company Name</th>
                                            <th>Event Date</th>
                                            <th>Event Start Time</th>
                                            <th>Event End Time</th>
                                            <th>Registration Points</th>
                                            <th>Attendance Points</th>
                                            <th>Total Registered</th>
                                            <th>Total Attended</th>
                                            <th>Organized By</th>
                                            <th>Event feedback</th>


                                        </tr>
                                    </thead>
                                    {{-- <tbody>
									@foreach ($events as $event)
									<tr>
										<td>{{$loop->iteration}}</td>
										<td>{{!empty($event->name) ? $event->name : '-'}}</td>
										<td>{{!empty($event->date) ? $event->date : '-'}}</td>
										<td>{{ $event->start_time ?? '-' }}</td>
										<td>{{ $event->end_time ?? '-' }}</td>
										<td>{{ $event->joined_point ?? 0 }}</td>
										<td>{{ $event->attendance_point ?? 0 }}</td> --}}
                                    {{-- <td><a
											href="{{route('user.page',$event->slug)}}">{{$event->users()->count()}}</a>
										</td> --}}
                                    {{-- <td>{{ $event->users()->count() }} </td>
										<td>{{ $event->AttendedUsers->count() }} </td> --}}
                                    {{-- <td><a
											href="{{route('user.page',$event->slug)}}">{{$event->users()->count()}}</a>
										</td> --}}
                                    {{-- <td>{{!empty($event->host->name) ? $event->host->name : '-' }}</td>
										<td>
											<a class="btn btn-primary" href="{{route('event.feedback', $event->id)}}"><i
													class="fa fa-search" aria-hidden="true"></i></a>
										</td>
									</tr>
									@endforeach
								</tbody> --}}
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Event Name</th>
                                            <th>Company Name</th>
                                            <th>Event Date</th>
                                            <th>Event Start Time</th>
                                            <th>Event End Time</th>
                                            <th>Registration Points</th>
                                            <th>Attendance Points</th>
                                            <th>Total Registered</th>
                                            <th>Total Attended</th>
                                            <th>Organized By</th>
                                            <th>Event feedback</th>

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
    <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script>
        // console.log('oii');
        $(document).ready(function() {
            //   $('#example').DataTable({
            // 	'stateSave': true,
            //     "paging": true,
            //     "lengthChange": false,
            //     "searching": true,
            //     "ordering": true,
            //     "info": true,
            //     "autoWidth": false,
            //     // "pageLength": 5,
            //     "columnDefs": [{
            //         orderable: false,
            //         targets: [3,4]
            //     }],
            // 	dom: 'Bfrtip',
            // 	buttons: [
            // 		'copy', 'csv', 'excel', 'pdf','print'
            // 	]
            //   });
            var table = $('#example').DataTable({
                // stateSave: true,
                // responsive : true,
                // paging : true,
                // lengthChange : false,
                // searching : true,
                // ordering : true,
                // info : true,
                // autoWidth : false,
                // searching: true;
                processing: true,
                serverSide: true,
                pageLength: 10,
                stateSave: true,
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                ajax: ({
                    url: "{{ route('event.report.datatable') }}",
                    data: function(d) {
                        console.log(d);
                        $('#search').val(d.search.value);
                        d['start_date'] = $('#start_date').val() ?? null;
                        d['end_date'] = $('#end_date').val() ?? null;

                    },

                }),
                columns: [{
                        data: 'DT_RowIndex',
                        searchable: true,
                        orderable: false
                    },
                    {
                        data: 'name',
                        searchable: true,
                        orderable: false
                    },
                    {
                        data: 'company.name',
                        searchable: true,
                        orderable: false
                    },
                    {
                        data: 'date',
                        searchable: true,
                        orderable: false
                    },
                    {
                        data: 'start_time',
                        searchable: true,
                        orderable: false
                    },
                    {
                        data: 'end_time',
                        searchable: true,
                        orderable: false
                    },
                    {
                        data: 'joined_point',
                        searchable: true,
                        orderable: false
                    },
                    {
                        data: 'attendance_point',
                        searchable: true,
                        orderable: false
                    },
                    {
                        data: 'totaljoined',
                        searchable: true,
                        orderable: false
                    },
                    {
                        data: 'totalattended',
                        searchable: true,
                        orderable: false
                    },
                    {
                        data: 'organizedBy',
                        searchable: true,
                        orderable: false
                    },
                    {
                        data: 'action'
                    },
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
                let url = "{{ route('event.destroy', ['event' => 'placeholder']) }}";
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
        });

        $('#search').on("click", function(e) {
            $('#table').DataTable().ajax.reload();
            e.preventDefault();
        });

        $('#example').on('preXhr.dt', function(e, settings, data) {
            data.start_date = $('#start_date').val();
            data.end_date = $('#end_date').val();
        });

        $('#filterdate').on('click', function() {
            $('#example').DataTable().ajax.reload();
            return false;
        });

		/***** Start & End Date Input *****/
        $('#startdatetimepicker').datetimepicker({
            format: 'DD/MM/YYYY'
        })

        $('#enddatetimepicker').datetimepicker({
            format: 'DD/MM/YYYY'
        })

		$('#startdatetimepicker').change(function () {
			var value = $(this).find("input").val();

			$('#getStartDate').val(value);
		});

		$('#enddatetimepicker').change(function () {
			var value = $(this).find("input").val();

			$('#getEndDate').val(value);
		});

        /***** Get DataTable Search Value *****/
        $(document).ready(function() {
            var value = $('#example .dataTables_filter input').val();
            var getSearchValue = $('#getSearchValue');

            getSearchValue.val(dataTable.search());

            dataTable.on('search.dt', function() {
                var value = $('.dataTables_filter input').val();

                getSearchValue.val(value);
            });
        });
    </script>
@endsection
