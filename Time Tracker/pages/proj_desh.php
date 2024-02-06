<?php include("header.php")?>
     <div id="page-wrapper">
     <div class="row">
               
                <!-- /.col-lg-12 -->
            
            
                <div class="col-lg-12">
                     <button style="margin-top: 20px;margin-bottom: -25px;" class="btn btn-primary" onClick="javascript:window.location.href='project.php'">Add new</button>
                    <h1 class="page-header">Projects</h1>
                </div>
               
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Project Dash Board
                        </div>
                       
                        <div class="panel-body">
                         <div class="dataTable_wrapper">
                            
                            <?php $data = mysqli_query($conn,"select * from project");?>
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Project Code</th>
                                            <th>Project Name</th>
                                            <th>Project Type</th>                                         
                                            <th>status</th>
                                            <th>complete</th>
                                            <th>task</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   
                                    <?php while($row = mysqli_fetch_array($data))
									{ 

										?>
                                      <tr class="odd gradeA">
                                            <td><?php echo $row['code']; ?></td>
                                            <td><?php echo $row['name']; ?></td>                                         
                                            <td><?php echo $row['type']; ?></td>
                                           <td><?php if($row['status']==1){echo "Open";}else{echo "close";}?></td>
                                           <td><div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $row['compl_per']?>%">
                                            <span class="sr-only"><?php echo $row['compl_per']?>% Complete (danger)</span>
                                        </div>
                                    </div></td>
                                           <td><button type="button" onClick="javascript:window.location.href='edit_project.php?id=<?php echo $row['id']?>'" class="btn btn-default btn-circle"><i class="fa fa-pencil"></i>
                            </button><button type="button" class="btn btn-default btn-circle"><i class="fa fa-trash"></i>
                            </button><button  onClick="javascript:window.location.href='assign_user.php?id=<?php echo $row['id']?>'" type="button" title="Assign User" class="btn btn-default btn-circle"><i class="fa fa-plus"></i>
                            </button></td>
                                        </tr>
                                        <?php }
										
										
										 ?>
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
