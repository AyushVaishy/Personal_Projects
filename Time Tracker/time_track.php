<?php include("header.php")?>
     <div id="page-wrapper">
     <div class="row">
                <!-- /.col-lg-12 -->
                <div class="col-lg-12">
                   
                    <h1 class="page-header">Hello <?php echo  $_SESSION['name'] ;?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">        
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           User Dash Board
                        </div>
                        <div class="panel-body">
                            <div class="row">
   <?php 
   if(isset($_POST['submit']))
   {
	   if(isset($_POST['proj_id']))
	   {
  			 if( !mysqli_query($conn,"INSERT INTO `time_val`(`emp_id`, `proj_id`, `s_time`, `status`, `proj_comment`) VALUES ('".$_POST['emp_id']."','".$_POST['proj_id']."','".$_POST['st_time']."','".$_POST['status']."','".$_POST['proj_comment']."')"))
   					{
	 				  mysqli_error($conn);
   					}
	   }
	   else
	   {
		   echo '<script type="text/javascript">alert("Kindly select Id");</script>';
	   }
   }
   
   ?>
   <?php 
   if(isset($_POST['end_submit']))
   	{
		 $sql3 = "update time_val SET e_time ='".$_POST['end_time']."' where id ='".$_POST['main_id']."'";
		$qry = mysqli_query($conn,$sql3);
		if($qry)
		{
			echo mysqli_error($conn);
		}
	}
	?>
   
   <?php 
   
   $k= date("d:m:y");
    $sql2 = "select * from `time_val` where emp_id ='".$_SESSION['usr_id']."' and (s_time LIKE '%".$k."%' and e_time = '')";
   $qry2 = mysqli_query($conn,$sql2);
   $row2 = mysqli_fetch_array($qry2);

	if($row2['id']=='')
	{
      ?>
                    <form role="form" name="add_new" action="" target="" method="post">
                               <div class="col-lg-4">
                               <div class="form-group"> 
                               <label>Project</label> 
                               </div></div>
                               <div class="col-lg-8">
                               <div class="form-group">  
                               <?php
							  
							   $qry =mysqli_query($conn,"SELECT * FROM `project` WHERE id = (SELECT project_id from project_assign where emp_id =".$_SESSION['usr_id'].")");							   
							   if(!$qry){echo mysqli_error($conn); }
							   ?>
                               <select class="form-control" name = "proj_id">
                               <?php while ($row= mysqli_fetch_array($qry)){?>
                               <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
                                <?php } ?>
                               </select>               
                               </div></div>
                               <div class="col-lg-4">
                               <div class="form-group">
                               <label>Comment</label>
                               </div></div>
                               <div class="col-lg-8">
                               <div class="form-group">
                               <textarea name="proj_comment" class="form-control"></textarea>
                               </div></div>
                               <input type="hidden" value="1" name="status">
                                <input type="hidden" value="<?php echo $_SESSION['usr_id']?>" name="emp_id">
								<div class="col-lg-4">
                               <div class="form-group">
                               <label>Time</label>
                               </div></div>
                               <div class="col-lg-8">
                               <div class="form-group">  
                              <input type="text" class="form-control" value="<?php echo date("d:m:y h:i:s")?>" disabled/ >
                              <input type="hidden" class="form-control" value="<?php echo date("d:m:y h:i:s")?>" name="st_time">
                               </div></div>
                               <div class="col-lg-4">
                               <div class="form-group">
                               <input type="submit" name="submit" value="Start Time"  class="btn btn-primary btn-lg btn-block" /> 
                               </div></div>
                               
                              </form>
                              <?php }else{ ?>
                               <div class="col-lg-8">
                               <div class="form-group">
                              <form role="form" name="add_new" action="" target="" method="post">
                              <input type="text" class="form-control" name="end_time" value="<?php echo date("d:m:y h:i:s");?>"  />
                              <input type="hidden" class="form-control" name="main_id" value="<?php echo $row2['id'];?>"  />                               <input type="submit" name="end_submit" value="End Time"  class="btn btn-primary btn-lg btn-block" />                       
                              </form>
                              </div></div>
                              <?php }?>
                             </div>

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