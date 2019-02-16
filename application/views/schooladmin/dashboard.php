
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Welcome to Admin Panel
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">
    	<?php if($this->session->flashdata('school_created')){?>
    	<div class="callout callout-success" id="divSuccess">
      	<h4>Status</h4>
      	<?php echo $this->session->flashdata('school_created'); unset($_SESSION['school_created']);?>
    	</div>

    	<?php }if($this->session->flashdata('validationErr')){ ?>
    	<div class="callout callout-danger" id="divFailed">
      	<h4>Status</h4>
      	<?php echo $this->session->flashdata('validationErr'); ?>
    	</div>

    	<?php }if($this->session->flashdata('school_exists')){?>
      <div class="callout callout-danger" id="divFailed">
        <h4>Status</h4>
        <?php echo $this->session->flashdata('school_exists'); ?>
      </div>

      <?php }if($this->session->flashdata('edit_success')){?>
      <div class="callout callout-success" id="divSuccess">
        <h4>Status</h4>
        <?php echo $this->session->flashdata('edit_success'); ?>
      </div>

      <?php }if($this->session->flashdata('edit_failed')){?>
      <div class="callout callout-success" id="divFailed">
        <h4>Status</h4>
        <?php echo $this->session->flashdata('edit_failed'); ?>
      </div>
      <?php }if($this->session->flashdata('del_success')){ ?>
      <div class="callout callout-success" id="divSuccess">
        <h4>Status</h4>
        <?php echo $this->session->flashdata('del_success'); ?>
      </div>
      <?php }if($this->session->flashdata('del_failed')){ ?>
      <div class="callout callout-danger" id="divFailed">
        <h4>Status</h4>
        <?php echo $this->session->flashdata('del_failed'); ?>
      </div>
      <?php }?>
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">List of School Admins</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
           <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Sl No</th>
                  <th>Admin Name</th>
                  <th>Email</th>
                  <th>Contact No</th>
                  <th>Address</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  if(isset($schoolAdmin_details) && count($schoolAdmin_details)>0)
                  {
                    $i = 1;
                    foreach ($schoolAdmin_details as $ikey => $ivalue)
                    {
                ?>
                <tr>
                  <td><?php echo $i?></td>
                  <td><?php echo $ivalue['schoolAdmin_name']?></td>
                  <td><?php echo $ivalue['email_id']?></td>
                  <td><?php echo $ivalue['contact_no']?></td>
                  <td><?php echo $ivalue['schoolAdmin_address']?></td>
                  <td><a href="<?php echo base_url('SchoolAdminCon/edit_schoolAdmin/'.$ivalue['schoolAdmin_id']);?>"><i class="fa fa-edit"></i></a>  <a href="<?php echo base_url('SchoolAdminCon/del_schoolAdmin/'.$ivalue['schoolAdmin_id']);?>" onClick="DelConfirm()"><i class="fa fa-remove pull-right"></i></a></td>
                </tr>
                <?php
                    $i+=1;
                  }
                }else{
                ?>
                <tr>
                  <td colspan="6" align="center"><p>No School admin found..!!</p></td>
                </tr>
              <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Sl No</th>
                  <th>Admin Name</th>
                  <th>Email</th>
                  <th>Contact No</th>
                  <th>Address</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
        </div>
        <!-- /.box-body -->
        

  