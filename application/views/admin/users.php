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
            Users
            <!--<small>advanced tables</small>-->
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Users</a></li>
            <li class="active">User List</li>
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
                        <h3 class="box-title">Registered Users List</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                if (isset($users) && $users != '') {
                                    foreach ($users as $user) {
                                        ?>
                                        <tr>
                                            <td><?= ++$i; ?></td>
                                            <td><?= $user->name ?></td>
                                            <td><?= $user->email ?></td>
                                           
                                            <td><a href="<?= base_url() ?>index.php/admin/editUser/<?= $user->id ?>">Edit</a> | 
                                                <a href="javascript:void(0);" onclick="deleteUser(<?php echo $user->id; ?>)">Delete</a></td>
                                        </tr>
                                    <?php
                                    }
                                } else {
                                    ?>
                                        <tr>
                                            <td colspan="4">No Data Available</td>
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
