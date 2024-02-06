<?php include('header.php')?>
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add New Project</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            New Project
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <form role="form" name="project_form" action="" target="" method="post">
							 <div class="col-lg-6">
                               <div class="form-group">
                             	<input type="text" placeholder="Enter Project Code" class="form-control" name="proj_code" required/>
                              </div>
                             </div>
                             <div class="col-lg-6">
                               <div class="form-group">
                             	<input type="text" placeholder="Enter Project Name" class="form-control" name="proj_name" required/>
                              </div>
                             </div>
                            <div class="col-lg-6">
                               <div class="form-group">
                             	<input type="text" placeholder="Enter Project client name" class="form-control" name="proj_client" required/>
                              </div>
                             </div>
                             <div class="col-lg-6">
                               <div class="form-group">
                             	<input type="text" placeholder="Enter Project type" class="form-control" name="proj_type" required/>
                              </div>
                             </div>
                             <div class="col-lg-6">
                               <div class="form-group">
                             	<input type="text" placeholder="Enter Project expected time" class="form-control" name="proj_exp_time"required />
                              </div>
                             </div>
                             <div class="col-lg-6">
                               <div class="form-group">
                               <select name="status" class="form-control">
                               <option value="1">Open</option>
                               <option value="0">Close</option>
                               
                               </select>
                               
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



<?php 
if(isset($_POST['submit']))
{
	if(!$q = mysqli_query($conn,"INSERT INTO `project`(`code`, `name`, `client`, `type`, `exp_time`, `status`) VALUES ('".$_POST['proj_code']."','".$_POST['proj_name']."','".$_POST['proj_client']."','".$_POST['proj_type']."','".$_POST['proj_exp_time']."','".$_POST['status']."')"))
	{
		echo mysqli_error($conn);
	}
	
}


?>












<?php include("footer.php")?>