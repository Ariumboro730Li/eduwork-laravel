@extends('admin.layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah Peminjaman Buku</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('peminjaman.store') }}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Peminjaman</label>
                            <select class="form-control">
                                <option value="">--</option>
                                @foreach ($members as $member)
                                    <option value="{{ $member->id }}">{{ $member->name }}</option>
                                @endforeach
                            </select>
                            @error('member_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Date -->
                        <div class="row">
                            <div class="col-2">
                                <label>Tanggal Pinjam</label>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Dari Tanggal:</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                            data-target="#reservationdate2" />
                                        <div class="input-group-append" data-target="#reservationdate"
                                            data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @error('date_start')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-1 text-center">
                                <span><b>s/d</b></span>
                            </div>

                            <div class="form-group">
                                <label>Sampai Tanggal:</label>
                                <div class="input-group date" id="reservationdate2" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input"
                                        data-target="#reservationdate2" />
                                    <div class="input-group-append" data-target="#reservationdate2"
                                        data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                                @error('date_end')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Buku</label>
                            <select class="select2" multiple="multiple" data-placeholder="Masukan Buku" style="width: 100%;"
                                name="book_id[]">
                                @foreach ($books as $book)
                                    <option value="{{ $book->id }}">{{ $book->title }}</option>
                                @endforeach
                            </select>
                            @error('book_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button a href="{{ url('peminjaman . index') }}" class="btn btn-secondary">Batal</button>
                        </div>
                    </form>
                @endsection
                @push('custom-scripts')
                    <!-- Select2 -->
                    <script src="{{ asset('assets/admin-lte/vendor/plugins/select2/js/select2.full.min.js') }}"></script>
                    <!-- Bootstrap4 Duallistbox -->
                    <script
                        src="{{ asset('assets/admin-lte/vendor/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}">
                    </script>
                    <!-- InputMask -->
                    <script src="{{ asset('assets/admin-lte/vendor/plugins/moment/moment.min.js') }}"></script>
                    <script src="{{ asset('assets/admin-lte/vendor/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
                    <!-- date-range-picker -->
                    <script src="{{ asset('assets/admin-lte/vendor/plugins/daterangepicker/daterangepicker.js') }}"></script>
                    <!-- bootstrap color picker -->
                    <script src="{{ asset('assets/admin-lte/vendor/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}">
                    </script>
                    <!-- Tempusdominus Bootstrap 4 -->
                    <script
                        src="{{ asset('assets/admin-lte/vendor/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}">
                    </script>
                    <!-- Bootstrap Switch -->
                    <script src="{{ asset('assets/admin-lte/vendor/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
                    <!-- BS-Stepper -->
                    <script src="{{ asset('assets/admin-lte/vendor/plugins/bs-stepper/js/bs-stepper.min.js') }}"></script>
                    <!-- dropzonejs -->
                    <script src="{{ asset('assets/admin-lte/vendor/plugins/dropzone/min/dropzone.min.js') }}"></script>
                    <script>
                        $(function() {
                            //Initialize Select2 Elements
                            $('.select2').select2()

                            //Initialize Select2 Elements
                            $('.select2bs4').select2({
                                theme: 'bootstrap4'
                            })

                            //Datemask dd/mm/yyyy
                            $('#datemask').inputmask('dd/mm/yyyy', {
                                'placeholder': 'dd/mm/yyyy'
                            })
                            //Datemask2 mm/dd/yyyy
                            $('#datemask2').inputmask('mm/dd/yyyy', {
                                'placeholder': 'mm/dd/yyyy'
                            })
                            //Money Euro
                            $('[data-mask]').inputmask()

                            //Date picker start
                            $('#reservationdate').datetimepicker({
                                format: 'L'
                            });
                            //Date picker end
                            $('#reservationdate2').datetimepicker({
                                format: 'L'
                            });

                            //Date and time picker
                            $('#reservationdatetime').datetimepicker({
                                icons: {
                                    time: 'far fa-clock'
                                }
                            });

                            //Date range picker
                            $('#reservation').daterangepicker()
                            //Date range picker with time picker
                            $('#reservationtime').daterangepicker({
                                timePicker: true,
                                timePickerIncrement: 30,
                                locale: {
                                    format: 'MM/DD/YYYY hh:mm A'
                                }
                            })
                            //Date range as a button
                            $('#daterange-btn').daterangepicker({
                                    ranges: {
                                        'Today': [moment(), moment()],
                                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                                            'month').endOf('month')]
                                    },
                                    startDate: moment().subtract(29, 'days'),
                                    endDate: moment()
                                },
                                function(start, end) {
                                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                                        'MMMM D, YYYY'))
                                }
                            )

                            //Timepicker
                            $('#timepicker').datetimepicker({
                                format: 'LT'
                            })

                            //Bootstrap Duallistbox
                            $('.duallistbox').bootstrapDualListbox()

                            //Colorpicker
                            $('.my-colorpicker1').colorpicker()
                            //color picker with addon
                            $('.my-colorpicker2').colorpicker()

                            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
                            })

                            $("input[data-bootstrap-switch]").each(function() {
                                $(this).bootstrapSwitch('state', $(this).prop('checked'));
                            })

                        })
                        // BS-Stepper Init
                        document.addEventListener('DOMContentLoaded', function() {
                            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
                        })

                        // DropzoneJS Demo Code Start
                        Dropzone.autoDiscover = false

                        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
                        var previewNode = document.querySelector("#template")
                        previewNode.id = ""
                        var previewTemplate = previewNode.parentNode.innerHTML
                        previewNode.parentNode.removeChild(previewNode)

                        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
                            url: "/target-url", // Set the url
                            thumbnailWidth: 80,
                            thumbnailHeight: 80,
                            parallelUploads: 20,
                            previewTemplate: previewTemplate,
                            autoQueue: false, // Make sure the files aren't queued until manually added
                            previewsContainer: "#previews", // Define the container to display the previews
                            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
                        })

                        myDropzone.on("addedfile", function(file) {
                            // Hookup the start button
                            file.previewElement.querySelector(".start").onclick = function() {
                                myDropzone.enqueueFile(file)
                            }
                        })

                        // Update the total progress bar
                        myDropzone.on("totaluploadprogress", function(progress) {
                            document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
                        })

                        myDropzone.on("sending", function(file) {
                            // Show the total progress bar when upload starts
                            document.querySelector("#total-progress").style.opacity = "1"
                            // And disable the start button
                            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
                        })

                        // Hide the total progress bar when nothing's uploading anymore
                        myDropzone.on("queuecomplete", function(progress) {
                            document.querySelector("#total-progress").style.opacity = "0"
                        })

                        // Setup the buttons for all transfers
                        // The "add files" button doesn't need to be setup because the config
                        // `clickable` has already been specified.
                        document.querySelector("#actions .start").onclick = function() {
                            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
                        }
                        document.querySelector("#actions .cancel").onclick = function() {
                            myDropzone.removeAllFiles(true)
                        }
                        // DropzoneJS Demo Code End
                    </script>
                @endpush
