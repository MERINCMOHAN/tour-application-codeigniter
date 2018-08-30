<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!-- Content Wrapper. Contains page content -->
<style>
    #outer {margin: 0 auto;width: 50%;border-top: #333 2px solid;background-color: #FFFFFF;}
    .product-item input[type="text"] {padding: 5px;border:#ccc 1px solid;border-radius:4px;margin: 0px 10px;}
    .product-item input[type="checkbox"] {margin: 10px;}
    .float-clear{clear:both;}
    .float-left{float:left;}

</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Tour
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tour</a></li>
            <li class="active">Add Tour</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <br/><br/><br/>
        <?php if ($this->session->flashdata('Error')) { ?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Error !</h4>
                <?php echo $this->session->flashdata('Error'); ?>
            </div>
        <?php } ?>

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Add Tour</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
                <form method="post"  action="<?= base_url() ?>index.php/admin/addTour/" enctype="multipart/form-data" id="frmaddtour">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" />
                            </div>
                            <div class="form-group">
                                <label>Start Date</label>
                                <input type="text" class="form-control" name="start_date" id="datepicker" />
                            </div>
                            <div class="form-group">
                                <label>Features</label>
                                <select class="form-control select2" name="features[]" multiple="multiple" data-placeholder="Select a Features"
                                        style="width: 100%;">
                                            <?php foreach ($features as $feature) { ?>
                                        <option value="<?= $feature->id ?>"><?= $feature->name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Departure From state</label>
                                <select class="form-control select2" name="departure" style="width: 100%;">
                                    <?php foreach ($states as $state) { ?>
                                        <option value="<?= $state->id ?>"><?= $state->name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Destination </label>
                                <select class="form-control select2" name="destination" style="width: 100%;">
                                    <?php foreach ($states as $state) { ?>
                                        <option value="<?= $state->id ?>"><?= $state->name ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Route </label>

                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field">
                                        <tr>
                                            <td><input type="text" name="routename[]" placeholder="Enter Route" class="form-control name_list" /></td>
                                            <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                                        </tr>
                                    </table>
                                    <!--<input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />-->
                                </div>

                            </div>

                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Type</label>
                                <select class="form-control select2" name="type" style="width: 100%;">
                                    <option value="Family Trip">Family Trip</option>
                                    <option value="Honeymoon">Honeymoon</option>
                                    <option value="Cruise">Cruise</option>
                                    <option value="Wildlife">Wildlife</option>
                                    <option value="Hill Stations">Hill Stations</option>
                                    <option value="Weekend Getawyas">Weekend Getawyas</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>End Date</label>
                                <input type="text" class="form-control" name="end_date" id="datepicker1" />
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">


                            </div>

                            <div class="form-group">
                                <label>Price </label>
                                <input type="number" class="form-control" name="price" />
                            </div>
                            <!--                            <div class="form-group">
                                                            <label>Departure From City </label>
                                                            <select class="form-control select2" name="departurecity" style="width: 100%;">
                            <?php foreach ($states as $state) { ?>
                                                                                                        <option value="<?= $state->id ?>"><?= $state->name ?></option>
                            <?php } ?>
                                                            </select>
                                                        </div>-->

                            <div class="form-group">
                                <label for="tour_picture">Tour Picture :</label>
                                <input type="file" name="tour_picture" id="tour_picture" tabindex="2" >
                                <input type="hidden" id="isEdit" value="false"/>
                                <br/>
                                <div class="preview_box">
                                    <img id="preview_img" src="" />
                                </div>	
                                <!--<input name="images[]" id="mulimages" type="file" style="display: none;" multiple />-->
                            </div>

                            <!-- /.form-group -->
                        </div>

                        <!--                        <div class="col-md-12">
                                                    <input name="pictures[]" id="pictures" type="file" multiple />
                                                    <div class="preview_box" id="preview_box">
                                                    </div>
                                                </div>-->

                        <!--                        <div class="col-md-12 fallback">
                                                    <input name="file[]" type="file" multiple />
                                                </div>-->

                        <!-- /.col -->
                    </div>
                </form>
                <!-- /.row -->
                <form action="<?= base_url() ?>index.php/admin/imageUploadPost/" enctype="multipart/form-data" class="dropzone" id="image-upload" method="POST">
                    <div class="row">
                        <div class="col-md-12 fallback">
                            <input name="file[]" type="file" multiple />
                        </div>
                    </div>
                </form>
            </div>

            <!-- /.box-body -->
            <div class="box-footer"><?php if ($this->session->flashdata('Success')) { ?>
                    <h4 id="message"><label><?php echo $this->session->flashdata('Success'); ?></label></h4>
                    <hr>
                <?php } ?>
                <?php if ($this->session->flashdata('Error')) { ?>
                    <h4 id="message" style="color: red;"><label><?php echo $this->session->flashdata('Error'); ?></label></h4>
                    <hr>
                <?php } ?>
                <div class="form-group pull-right">
                    <input type="submit" id="btnaddtour"  class="btn btn-default" value="submit" />
                    <!--<button type="submit" class="btn btn-default">Submit</button>-->
                    <button type="reset" class="btn btn-danger pull-right">Reset</button>
                </div>
            </div>
        </div>
        <!-- /.box -->


        <!-- /.row -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script type="text/javascript">

    $('#btnaddtour').click(function () {
        $('#frmaddtour').submit();
    });

    Dropzone.options.frmaddtour = {
        autoProcessQueue: false,
        uploadMultiple: true,
        parallelUploads: 100,

        init: function () {

            var myDropzone = this;
            // alert();
            // Update selector to match your button
            $("#btnaddtour").click(function (e) {
                // alert('button click');
                
                e.preventDefault();
                myDropzone.processQueue();
            });

            this.on('sending', function (file, xhr, formData) {
                // Append all form inputs to the formData Dropzone will POST
                //alert('sendinf event');
                //formData.append("file", file); 
                console.log('Sending Data File : ' + file);
                console.log('Sending Data FormData: ' + JSON.stringify(formData));
                var data = $('#frmaddtour').serializeArray();
                $.each(data, function (key, el) {
                    formData.append(el.name, el.value);
                    console.log('name : ' + el.name + 'value : ' + el.value);

                });


            });

            this.on("addedfile", function (file) {
                console.log('add file event' + file.name);
                file.previewElement.addEventListener("click", function () {
                    myDropzone.removeFile(file);
                });
            });

            this.on("sendingmultiple", function (file, xhr, formData) {
                console.log('sending mulitple + form Data : ' + JSON.stringify(formData));
                 $('#frmaddtour').submit();
                $.each(file, function (key, val) {
                    console.log(key);

                    console.log('Key :' + key + 'Value : ' + val);
                    var fileres = val;
                    console.log("File Name :" + val.name);
                   
                    $.ajax({
                        url: '<?= base_url() ?>index.php/admin/insertImage/',
                        type: 'post',
                        data: {name: val.name},
                        xhrFields: {
                            withCredentials: false
                        },
                        success: function (response) {
//                    alert();
                            
                        },
                        error: function (jqXHR, status, message) {
                            alert('A jQuery error has occurred. Status: ' + status + ' & Message: ' + message + 'XHR : ' + jqXHR.status + 'text status :' + jqXHR.statusText);
                            console.log(jqXHR);
                        }
                    });

                    $.each(fileres, function (key, v) {

                        console.log('Keys :' + key + 'Values : ' + v);

                    });
//                            
                });

                var data = $('#frmaddtour').serializeArray();
                $.each(data, function (key, el) {
                    formData.append(el.name, el.value);
                    console.log('name : ' + el.name + 'value : ' + el.value);
                });
                $('#frmaddtour').submit();
            });

            this.on("successmultiple", function (files, response) {
//                        // Gets triggered when the files have successfully been sent.
//                        // Redirect user or notify of success.
                console.log("Sucess Multiple :");
                console.log(JSON.stringify(files));
                console.log('Response' + JSON.stringify(response));
//                        $.each(JSON.parse(response), function (key, val) {
//                              console.log(key);
//                            
//                                
//                                var fileres = JSON.parse(response);
//                                console.log(response);
//                                
//                                console.log('Response :' + response);
//                                
//                               
//                                $.each(fileres, function (key, val) {
//                                    console.log('Keys :' + key + 'Values : ' + val.file_name);
//
//                                });
//                            
//                        });
                console.log('File :' + JSON.stringify(files));

                // return response;
            });
        }
    }

</script>