<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Tour
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tour</a></li>
            <li class="active">Edit Tour</li>
        </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
        <?php // print_r($tour); ?>
        <br/><br/><br/>
        <?php if ($this->session->flashdata('Error')) { ?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Error !</h4>
                <?php echo $this->session->flashdata('Error'); ?>
            </div>
        <?php } ?>
        <form method="post" action="<?= base_url() ?>index.php/admin/editTour/" enctype="multipart/form-data" id="frmedittour">
           
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Tour</h3>

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
                                <input type="hidden" value="<?= $tour->image ?>" name="tourImage" />
                                <input type="hidden" name="id" value="<?php echo $tour->id; ?>" />
                                <input type="text" class="form-control" name="name" value="<?php echo $tour->name; ?>" />
                            </div>
                            <div class="form-group">
                                <label>Start Date</label>
                                <?php $start_date = date('d-m-Y', strtotime($tour->start_date)); ?>
                                <input type="text" class="form-control" value="<?php echo $start_date; ?>" name="start_date" id="datepicker" />
                            </div>
                            <div class="form-group">
                                <label>Features</label>
                                <select class="form-control select2" name="features[]" multiple="multiple" data-placeholder="Select a Features"
                                        style="width: 100%;">
                                            <?php $efeatures = explode(',', $tour->features); ?>
                                            <?php foreach ($features as $feature) { ?>
                                                <?php foreach ($efeatures as $efeature) { ?>
                                            <option value="<?= $feature->id ?>" <?php if ($efeature == $feature->id) { ?>selected=""<?php } ?>><?= $feature->name ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Departure From state</label>
                                <select class="form-control select2" name="departure" style="width: 100%;">
                                    <?php foreach ($states as $state) { ?>
                                        <option value="<?= $state->id ?>" <?php if ($tour->departure == $state->id) { ?>selected=""<?php } ?>><?= $state->name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Destination </label>
                                <select class="form-control select2" name="destination" style="width: 100%;">
                                    <?php foreach ($states as $state) { ?>
                                        <option value="<?= $state->id ?>" <?php if ($tour->destination == $state->id) { ?>selected=""<?php } ?>><?= $state->name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <!--Route-->
                            <div class="form-group">
                                <label>Route </label>
                                
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dynamic_field">
                                            <?php
                                            if (isset($tour) && $tour->route != '') {
                                                $eroutes = explode('+', $tour->route);
                                                $i = 0;
                                                $total_routes = count($eroutes);
                                                ?>
                                                <input type="hidden" value="<?php echo $total_routes; ?>" id="removeid" />    
                                                <?php
                                                foreach ($eroutes as $eroute) {
                                                    $i++;
                                                    ?>

                                                    <tr id="tr<?php echo $i; ?>">
                                                        <td><input type="text" id="row<?php echo $i; ?>" name="routename[]" value="<?php echo $eroute; ?>" placeholder="Enter Route" class="form-control name_list" /></td>
                                                        <td><button type="button" name="remove" id="<?php echo $i; ?>" class="btn btn-danger ebtn_remove">X</button></td>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                            ?>
                                            <tr>
                                                <td><button type="button" name="add" id="eadd" class="btn btn-success">Add More</button></td>

                                            </tr>
                                        </table>
                                        <!--<input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />-->
                                    </div>
                            </div>
                            <!--End Route-->
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
                                <?php $end_date = date('d-m-Y', strtotime($tour->end_date)); ?>
                                <input type="text" class="form-control" value="<?php echo $end_date; ?>" name="end_date" id="datepicker1" />
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">


                            </div>

                            <div class="form-group">
                                <label>Price </label>
                                <input type="number" class="form-control" value="<?php echo $tour->price; ?>" name="price" />
                            </div>
                            <div class="form-group">
                                <label>Departure From City </label>
                                <select class="form-control select2" name="departurecity" style="width: 100%;">
                                    <?php foreach ($states as $state) { ?>
                                        <option value="<?= $state->id ?>" <?php if ($tour->departure == $state->id) { ?>selected=""<?php } ?>><?= $state->name ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="tour_picture">Tour Picture :</label>
                                <input type="file" name="tour_picture" id="tour_picture" tabindex="2" >
                                <input type="hidden" id="isEdit" value="true"/>
                                <div class="preview_box">
                                    <img id="preview_img" src="<?php
                                    if (isset($tour) && $tour->image != '') {
                                        echo base_url() . "images/tours/" . $tour->image;
                                    }
                                    ?>"/>
                                </div>	
                            </div>

                            <!-- /.form-group -->
                        </div>
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
                        <input type="submit"  class="btn btn-default" value="submit" />
                        <!--<button type="submit" class="btn btn-default">Submit</button>-->
                        <button type="reset" class="btn btn-danger pull-right">Reset</button>
                    </div>
                </div>
            </div>
            <!-- /.box -->


            <!-- /.row -->
        </form>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
