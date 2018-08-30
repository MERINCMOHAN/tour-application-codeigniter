<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit User
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Users</a></li>
            <li class="active">Edit User</li>
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
        <form method="post" action="<?= base_url() ?>index.php/admin/editUser/" id="frmeditUser">
            <!-- SELECT2 EXAMPLE -->
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit User</h3>

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
                                <input type="hidden" value="<?php echo "$user->id" ?>" name="id" />
                                <input type="text" class="form-control" value="<?php echo "$user->name" ?>" name="name" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" value="<?php echo "$user->email" ?>" name="email" />
                            </div>
                        </div>
                       
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                   
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