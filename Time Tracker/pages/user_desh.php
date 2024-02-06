<?php include("header.php")?>
     <div id="page-wrapper">
     <div class="row">
               
                <!-- /.col-lg-12 -->
            
            
                <div class="col-lg-12">
                     <button style="margin-top: 20px;margin-bottom: -25px;" class="btn btn-primary" onClick="javascript:window.location.href='add_new_user.php'">Add new</button>
                    <h1 class="page-header">User List</h1>
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
                                            <th>Emp mail-id</th>                                         
                                            <th>Designation</th>
                                            <th>task</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php while($row = mysqli_fetch_array($data))
									{

										?>
                                      <tr class="odd gradeA">
                                            <td><?php echo $row['emp_code']; ?></td>
                                            <td><?php echo $row['name']; ?></td>                                         
                                            <td><?php echo $row['mail_id']; ?></td>
                                             <td><?php echo $row['desig']; ?></td >                                          
                                           <td><button type="button" title="Edit" onClick="javascript:window.location.href='edit_user.php?id=<?php echo $row['id']?>'" class="btn btn-default btn-circle"><i class="fa fa-pencil"></i>
                            </button><button type="button" title="Delete" class="btn btn-default btn-circle"><i class="fa fa-trash"></i>
                            </button><button type="button" onClick="javascript:window.location.href='proj_assign.php?id=<?php echo $row['id']?>'" title="Assign User" class="btn btn-default btn-circle"><i class="fa fa-plus"></i>
                            </button></td>
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
