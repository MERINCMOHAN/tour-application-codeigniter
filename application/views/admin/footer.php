<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
</footer>

<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<!--<script src="<?= base_url() ?>assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js" type="text/javascript"></script>-->
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url() ?>assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- DataTables -->
<script src="<?= base_url() ?>assets/admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- SlimScroll -->
<script src="<?= base_url() ?>assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url() ?>assets/admin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>assets/admin/dist/js/demo.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?= base_url() ?>assets/admin/plugins/iCheck/icheck.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url() ?>assets/admin/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?= base_url() ?>assets/admin/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?= base_url() ?>assets/admin/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?= base_url() ?>assets/admin/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="<?= base_url() ?>assets/admin/bower_components/moment/min/moment.min.js"></script>
<script src="<?= base_url() ?>assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?= base_url() ?>assets/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="<?= base_url() ?>assets/admin/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?= base_url() ?>assets/admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- page script -->
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    });

//    Dropzone.autoDiscover = false;
//
//    var myDropzone = new Dropzone('#my_dropzone', {
//            paramName: "file",
//            url: '/pretty/url/upload-photos',
//    });
</script>
<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', {'placeholder': 'dd/mm/yyyy'})
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', {'placeholder': 'mm/dd/yyyy'})
        //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'})
        //Date range as a button
        $('#daterange-btn').daterangepicker(
                {
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function (start, end) {
                    $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
        )

        //Date picker
        var nowDate = new Date();
        var nextDate = new Date();
        var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);
        var nextDay = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate() + 1, 0, 0, 0, 0);
        $('#datepicker').datepicker({
            format: 'dd-mm-yyyy',
            startDate: today,
            autoclose: true
        });
        $("#datepicker").on("change", function () {
            var selected = $(this).val();
            var date = $(this).datepicker('getDate', '+1d');
            //alert(date);
            var nextday = new Date(date.getFullYear(), date.getMonth(), date.getDate() + 1, 0, 0, 0, 0);
            //alert(nextday);
            //Date picker
        });

        $("#datepicker1").on("change", function () {
            var selected = $(this).val();
            var date = $(this).datepicker('getDate', '+1d');
            var startdate = $('#datepicker').datepicker('getDate', '+1d');
            if(startdate <= date){
                alert('sucess');
            }
            
            if(startdate > date ){
                alert('fail');
            }
        });

        $('#datepicker1').datepicker({
            format: 'dd-mm-yyyy',
            startDate: nextDay,
            autoclose: true
        });
//       

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        })
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
        })
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        })

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        //Timepicker
        $('.timepicker').timepicker({
            showInputs: false
        })
    }
    )
</script>
<script type="text/javascript">
    $(document).ready(function () {


        $("#frmaddtour").validate({
        rules: {
        name: {
        required: true,
//                    lettersonly: true
        },
                price: {
                required: true,
                        number: true
                },
                type: {
                required: true,
                },
                start_date: "required",
                end_date: "required",
                departure: "required",
                destination: "required",
                tour_picture: "required",
                'features[]': {
                required: true
                },
                'routename[]': {
                required: true
                },
        },
                messages: {
                name: {
                required: "Please enter your name",
//                    lettersonly: "Please enter valid characters"
                },
                        price: {
                        required: "Please enter price",
                                number: "Please enter a valid number"
                        },
                        type: {
                        required: "Please select type ",
                        },
                        start_date: "Please enter start date",
                        end_date: "Please enter end date",
                        departure: "Please select departure state",
                        destination: "Please select destination",
                        tour_picture: "Please Select Image For Tour",
                        'features[]': {
                        required: 'Please Check at least 1 feature'
                        },
                        'routename[]': {
                        required: 'Please enter route name'
                        }

                },
                errorPlacement: function (error, element) {
                error.insertAfter(element);
                },
                submitHandler: function (form) {
                var tour_image = $('#tour_picture').val();
                        var editFlag = $('isEdit').val();
                        $("#datepicker1").on("change", function () {
                var selected = $(this).val();
                        var date = $(this).datepicker('getDate', '+1d');
                        var startdate = $('#datepicker').datepicker('getDate', '+1d');
                        
                });
                        if (editFlag == 'true' && tour_image == '') {
                //alert('Select Tour Image');
                } else {

                }
                form.submit();
                        console.log(tour_image);
                }
        });
        $("#frmedittour").validate({
            rules: {
                name: {
                    required: true,
//                    lettersonly: true
                },
                price: {
                    required: true,
                    number: true
                },
                type: {
                    required: true,
                },
                start_date: "required",
                end_date: "required",
                departure: "required",
                destination: "required",
//                tour_picture: "required",
                'features[]': {
                    required: true
                },
                routename: {
                    required: true
                },

            },
            messages: {
                name: {
                    required: "Please enter your name",
//                    lettersonly: "Please enter valid characters"
                },
                price: {
                    required: "Please enter price",
                    number: "Please enter a valid number"
                },
                type: {
                    required: "Please select type ",
                },
                start_date: "Please enter start date",
                end_date: "Please enter end date",
                departure: "Please select departure state",
                destination: "Please select destination",
//                tour_picture: "Please Select Image For Tour",
                'features[]': {
                    required: 'Please Check at least 1 feature'
                }

            },
            errorPlacement: function (error, element) {
                error.insertAfter(element);
            },
            submitHandler: function (form) {
                var tour_image = $('#tour_picture').val();
                var editFlag = $('isEdit').val();
                if (editFlag == 'true' && tour_image == '') {
                    //alert('Select Tour Image');
                } else {

                }
                form.submit();
                console.log(tour_image);


            }
        });
        jQuery.validator.addMethod("lettersonly", function (value, element) {
            return this.optional(element) || /^[a-z]+$/i.test(value);
        }, "Letters only please");
        $("#frmaddfeature").validate({
            rules: {
                name: {
                    required: true,
                    lettersonly: true
                }

            },
            messages: {
                name: {
                    required: "Please enter name",
                }
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element);
            },
            submitHandler: function (form) {

                form.submit();

            }
        });


    });
    $("#tour_picture").change(function () {
        readImageData(this);//Call image read and render function
    });

    $("#pictures").change(function () {
        //alert(JSON.stringify(this));
        console.log(JSON.stringify(this.files));
        console.log(JSON.stringify(this.files[0]));
        console.log('Length : ' + this.files.length);
        var div = document.getElementById('preview_box');

        for (var i = 0; i < this.files.length; i++)  //for multiple files
        {
            var f = this.files[i];
            var name = this.files[i].name;
            console.log(name);
            var reader = new FileReader();
            reader.onload = function (e) {
                // get file content  
                var text = e.target.result;
                var img = document.createElement("img");
                img.src = text;
                img.height = 120;
                img.width = 120;
                div.appendChild(img);

            }
            reader.readAsDataURL(this.files[i]);
        }
        //readImageData(this);//Call image read and render function
    });

    function readImageData(imgData) {
        if (imgData.files && imgData.files[0]) {
            var readerObj = new FileReader();

            readerObj.onload = function (element) {
                $('#preview_img').attr('src', element.target.result);
            }

            readerObj.readAsDataURL(imgData.files[0]);
        }
    }

    function deletetour(tour_id) {
        var deleteStatus = confirm("Are You Sure You Want to Delete these Tour Recoard?!");
        if (deleteStatus) {
            location.href = '<?= base_url() ?>index.php/admin/deleteTour/' + tour_id;
        }
    }

    function deleteUser(user_id) {
        var deleteStatus = confirm("Are You Sure You Want to Delete these Tour Recoard?!");
        if (deleteStatus) {
            location.href = '<?= base_url() ?>index.php/admin/deleteUser/' + user_id;
        }
    }

    function deleteFeature(feature_id) {
        var deleteStatus = confirm("Are You Sure You Want to Delete these Tour Recoard?!");
        if (deleteStatus) {
            location.href = '<?= base_url() ?>index.php/admin/deleteFeature/' + feature_id;
        }
    }
</script>
<script>
    $(document).ready(function () {
        var i = 1;
        var editi = $('#removeid').val();
        $('#add').click(function () {
            i++;
            $('#dynamic_field').append('<tr id="row' + i + '"><td><input type="text" name="routename[]" placeholder="Enter Route" class="form-control name_list" /></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function () {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });

        $('#eadd').click(function () {
            editi++;
            $('#dynamic_field').append('<tr id="row' + editi + '"><td><input type="text" name="routename[]" placeholder="Enter Route" class="form-control name_list" /></td><td><button type="button" name="remove" id="' + editi + '" class="btn btn-danger btn_remove">X</button></td></tr>');
        });

        $(document).on('click', '.ebtn_remove', function () {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
            $('#tr' + button_id + '').remove();
        });


    });
</script>
</body>
</html>

