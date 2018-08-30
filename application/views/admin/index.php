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
            Tours
            <!--<small>advanced tables</small>-->
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tours</a></li>
            <li class="active">Tour List</li>
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
                        <h3 class="box-title">Tours With Features</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>name</th>
                                    <th>type</th>
                                    <th>price</th>
                                    <th>Total Days</th>
                                    <th>Destination</th>
                                    <th>Start Date </th>
                                    <th>End Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                if (isset($tours) && $tours != '') {
                                    foreach ($tours as $tour) {
                                        ?>
                                        <tr>
                                            <td><?= ++$i; ?></td>
                                            <td><?= $tour->name ?></td>
                                            <td><?= $tour->type ?></td>
                                            <td><?= $tour->price ?></td>
                                            <?php
                                            $time = new DateTime($tour->start_date);
//                                        $newformat = date('Y-m-d',$time);
                                            $time2 = new DateTime($tour->end_date);
//                                        $newformat2 = date('Y-m-d',$time2);
                                            ?>
                                            <?php
                                            $days = date_diff($time, $time2);
//                                        echo $days;
                                            ?>
                                            <td><?php echo $days->format("%a"); ?></td>
                                            <td><?php
                                                $state = $this->State->getState($tour->destination);
                                                echo $state->name;
                                                ?></td>
                                            <?php
                                            $start_date = date('d-m-Y', strtotime($tour->start_date));
                                            $end_date = date('d-m-Y', strtotime($tour->end_date));
                                            ?>
                                            <td><?= $start_date ?></td>
                                            <td><?= $end_date ?></td>
                                            <td><a href="<?= base_url() ?>index.php/admin/editTour/<?= $tour->id ?>">Edit</a> | 
                                                <a href="javascript:void(0);" onclick="deletetour(<?php echo $tour->id; ?>)">Delete</a></td>
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
