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
        <form method="post" action="<?= base_url() ?>index.php/admin/addTour/" enctype="multipart/form-data" id="frmaddtour">
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
                    
                    <!-- /.row -->

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
        </form>
        <!-- /.box -->


        <!-- /.row -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
