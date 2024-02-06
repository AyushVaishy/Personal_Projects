<?php include('header.php')?>

<?php 
if(isset($_POST['submit']))
{
	if(!$q = mysqli_query($conn,"UPDATE `project` SET `code`='".$_POST['proj_code']."',`name`='".$_POST['proj_name']."',`client`='".$_POST['proj_client']."',`type`='".$_POST['proj_type']."',`exp_time`='".$_POST['proj_exp_time']."',`tot_time`='".$_POST['proj_tot_time']."',`status`='".$_POST['status']."',`compl_per`='".$_POST['compl_per']."' WHERE id= '".$_GET['id']."'"))
	{
		echo mysqli_error($conn);
	}	
}
?>

<?php 
if(isset($_GET['id']))
{
	$data = mysqli_query($conn,"select * from project where id = '".$_GET['id']."'");
	$row = mysqli_fetch_array($data);
	$k='';
}
else
{
	$k = '<h1> YOU ARE NOT ABLE TO UPDATE</h1>';
}
?>


 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Project Edit</h1>
                  <?php if($k){?> <h1 class="page-header"><?php echo $k;?></h1><?php } ?>
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Project Detail <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $row['compl_per']?>%">
                                            <span class="sr-only"><?php echo $row['compl_per']?>% Complete (danger)</span>
                                        </div>
                                    </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <form role="form" name="project_form" action="" target="" method="post">
							 <div class="col-lg-6">
                               <div class="form-group">
                             	<input type="text" placeholder="Enter Project Code" value="<?php echo $row['code']?>" class="form-control" name="proj_code" required/>
                              </div>
                             </div>
                             <div class="col-lg-6">
                               <div class="form-group">
                             	<input type="text" placeholder="Enter Project Name" value="<?php echo $row['name']?>" class="form-control" name="proj_name" required/>
                              </div>
                             </div>
                            <div class="col-lg-6">
                               <div class="form-group">
                             	<input type="text" placeholder="Enter Project client name" value="<?php echo $row['client']?>" class="form-control" name="proj_client" required/>
                              </div>
                             </div>
                             <div class="col-lg-6">
                               <div class="form-group">
                             	<input type="text" placeholder="Enter Project type" value="<?php echo $row['type']?>" class="form-control" name="proj_type" required/>
                              </div>
                             </div>
                             <div class="col-lg-6">
                               <div class="form-group">
                             	<input type="text" placeholder="Enter Project expected time" value="<?php echo $row['exp_time']?>" class="form-control" name="proj_exp_time"required />
                              </div>
                             </div>
                              <div class="col-lg-6">
                               <div class="form-group">
                             	<input type="text" placeholder="Enter Project Total time" value="<?php echo $row['tot_time']?>" class="form-control" name="proj_tot_time"required />
                              </div>
                             </div>
                             <div class="col-lg-6">
                               <div class="form-group">
                               <select name="status" class="form-control">
                               <?php if($row['status']==1){ ?>
                               <option value="1">Open</option>
                               <option value="0">Close</option>
                              <?php }else
							  {?><option value="0">Close</option>
                              <option value="1">Open</option>
                              
                              <?php }?>
                               </select>
                             </div>
                             </div>
                                  <div class="col-lg-6">
                               <div class="form-group">
                               <input type="text" name="compl_per" value="<?php echo $row['compl_per']?>" class="form-control"/>
                               </div>
                             </div>
                             </div>
                             <div class="row">
                             <div class="col-lg-6">
                               <div class="form-group">
                               <input type="submit" value="Submit" name="submit" class="btn btn-primary btn-lg btn-block" required />
                              </div>
                             </div>
                            </form>
                             </div>
                            <!-- /.row (nested) -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
<?php include("footer.php")?>