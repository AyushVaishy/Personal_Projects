<?php include("header.php")?>
     <div id="page-wrapper">
     <div class="row">
               
                <!-- /.col-lg-12 -->
 <?php
 if(isset($_GET['empid']))
 {
			 $qry = mysqli_query($conn,"INSERT INTO `project_assign`(`emp_id`,`project_id`)values('".$_GET['empid']."','".$_GET['id']."')");
 }
 ?>
  <?php
 if(isset($_GET['d_empid']))
 {
			 $qry = mysqli_query($conn,"DELETE FROM `project_assign` where emp_id = '".$_GET['d_empid']."'");
 }
 ?>           
           
            <?php $id=$_GET['id']; $qry = mysqli_query($conn,"select * from project where id = '".$_GET['id']."'");
			$row=mysqli_fetch_array($qry);		
			 ?>
                <div class="col-lg-12">
                   
                    <h1 class="page-header">#<?php echo $row['code']; ?>-<?php echo $row['name']; ?></h1>
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
                         <div class="dataTable_wrapper">
                            
                            <?php $data = mysqli_query($conn,"select * from user");?>
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Emp Code</th>
                                            <th>Emp Name</th>
                                            <th>task</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php while($row = mysqli_fetch_array($data))
									{
										 $qry2= mysqli_query($conn,"select * from project_assign where project_id='".$_GET['id']."' and emp_id = '".$row['id']."'");				$row2 = '';
										$row2 = mysqli_fetch_array($qry2);
										
										?>
                                      <tr class="odd gradeA">
                                            <td><?php echo $row['emp_code']; ?></td>
                                            <td><?php echo $row['name']; ?></td>                                         
                                                                                    
                                           <td>
                                           <?php if($row2['id']==''){ ?>
                                           <button type="button" title="Edit" onClick="javascript:window.location.href='assign_user.php?id=<?php echo $id;?>&empid=<?php echo $row['id']?>'" class="btn btn-outline btn-primary">Assign</button><?php } else{?>
										   <button type="button" title="Edit" onClick="javascript:window.location.href='assign_user.php?id=<?php echo $id;?>&d_empid=<?php echo $row['id']?>'" class="btn btn-outline btn-danger">Remove</button>
										   
										   <?php }?></td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                        </table>                        
                              </div>
                              
                            <!-- /.data table -->
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
