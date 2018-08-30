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
            Features
            <!--<small>advanced tables</small>-->
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Features</a></li>
            <li class="active">Feature List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <!-- /.box -->
                <?php if ($this->session->flashdata('Success')) { ?>
                   <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                <?php echo $this->session->flashdata('Success'); ?>
              </div>
                <?php } ?>
                <?php if ($this->session->flashdata('Error')) { ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-ban"></i> Error !</h4>
                        <?php echo $this->session->flashdata('Error'); ?>
                    </div>
                <?php } ?>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Features</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                if (isset($features) && $features != '') {
                                    foreach ($features as $feature) {
                                        ?>
                                        <tr>
                                            <td><?= ++$i; ?></td>
                                            <td><?= $feature->name ?></td>
                                            <td><a href="<?= base_url() ?>index.php/admin/editFeature/<?= $feature->id ?>">Edit</a> | 
                                                <a href="javascript:void(0);" onclick="deleteFeature(<?php echo $feature->id; ?>)">Delete</a></td>
                                        </tr>
                                    <?php
                                    }
                                } else {
                                    ?>
                                        <tr>
                                            <td colspan="9">No Data Available</td>
                                        </tr>
                                    <?php }
                                ?>

                                </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
