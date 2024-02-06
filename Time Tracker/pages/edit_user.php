<?php include("header.php")?>
<?php
$id=$_GET['id'];
if(isset($_POST['submit']))
{$qry = "UPDATE `user` SET `emp_code`='".$_POST['emp_code']."',`name`='".$_POST['emp_name']."',`mail_id`='".$_POST['emp_mail_id']."',`desig`='".$_POST['desig']."',`username`='".$_POST['emp_username']."',`pass`='".$_POST['emp_pass']."' WHERE id='".$id."'";
if(mysqli_query($conn,$qry))
{
	
}
else{echo mysqli_error($conn);}
}
?>
<?php 
if(isset($_GET['id']))
{
	
	$data = mysqli_query($conn,"select * from user where id = '".$_GET['id']."'");
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
                    <h1 class="page-header">Edit User</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            User Form<?php echo $k;?>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                               <form role="form" name="add_new" action="" target="" method="post">
                               <div class="col-lg-6">
                               <div class="form-group">                            
                              <input type="text" class="form-control" placeholder="Enter Emp Code"name="emp_code" value="<?php echo $row['emp_code']?>" required />
                              </div>
                              </div>
                              <div class="col-lg-6">
                               <div class="form-group">
                              <input type="text" class="form-control" placeholder="Enter Emp Name"name="emp_name" value="<?php echo $row['name']?>" required/>
                                </div>
                                </div>
                                 <div class="col-lg-6">
                               <div class="form-group">
                             	<select name="desig" class="form-control" required>
                               		 <option value="<?php echo $row['desig'];?>"><?php echo $row['desig'];?></option>  
                                     <option value="">Designation </option>
                               	 	 <option value="manager">Manager</option>                                
                                </select>
                                </div>
                                </div>
                                 <div class="col-lg-6">
                               <div class="form-group">
                              <input type="email" class="form-control" value="<?php echo $row['mail_id']?>" placeholder="Enter Emp Email-id"name="emp_mail_id" required />
                                </div>
                                </div>
                                 <div class="col-lg-6">
                               <div class="form-group">
                              <input type="text" class="form-control" placeholder="Enter Emp Username" value="<?php echo $row['username']?>" name="emp_username"  required/>
                                </div>
                                </div>
                                 <div class="col-lg-6">
                               <div class="form-group">
                              <input type="password" value="<?php echo $row['pass']?>" class="form-control" placeholder="Enter Emp Pass"name="emp_pass" required />
                                </div>
                                </div> 
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
