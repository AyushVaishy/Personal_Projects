<?php include("header.php")?>
     <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add New User</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            New User Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                               <form role="form" name="add_new" action="" target="" method="post">
                               <div class="col-lg-6">
                               <div class="form-group">                            
                              <input type="text" class="form-control" placeholder="Enter Emp Code"name="emp_code" required />
                              </div>
                              </div>
                              <div class="col-lg-6">
                               <div class="form-group">
                              <input type="text" class="form-control" placeholder="Enter Emp Name"name="emp_name"  required/>
                                </div>
                                </div>
                                 <div class="col-lg-6">
                               <div class="form-group">
                             	<select name="desig" class="form-control" required>
                                <option value="" >Designation </option>
                                <option value="manager">Manager</option>                                
                                </select>
                                </div>
                                </div>
                                 <div class="col-lg-6">
                               <div class="form-group">
                              <input type="email" class="form-control" placeholder="Enter Emp Email-id"name="emp_mail_id" required />
                                </div>
                                </div>
                                 <div class="col-lg-6">
                               <div class="form-group">
                              <input type="text" class="form-control" placeholder="Enter Emp Username"name="emp_username"  required/>
                                </div>
                                </div>
                                 <div class="col-lg-6">
                               <div class="form-group">
                              <input type="password" class="form-control" placeholder="Enter Emp Pass"name="emp_pass" required />
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
<?php
if(isset($_POST['submit']))
{
if(mysqli_query($conn,"INSERT INTO `user`(`emp_code`, `name`, `mail_id`, `desig`, `username`, `pass`) VALUES ('".$_POST['emp_code']."','".$_POST['emp_name']."','".$_POST['desig']."','".$_POST['emp_mail_id']."','".$_POST['emp_username']."','".$_POST['emp_pass']."')"))
{
	
}
else{echo mysqli_error($conn);}
}
?>
<?php include("footer.php")?>
