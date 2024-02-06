<?php include("header.php")?>
     <div id="page-wrapper">
     <div class="row">
               
                <!-- /.col-lg-12 -->
            
            
                <div class="col-lg-12">
                    <h1 class="page-header">Log Report's</h1>
                </div>
               
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Report
                        </div>
                       
                        <div class="panel-body">
                         <div class="dataTable_wrapper">
                            
                            <?php $data = mysqli_query($conn,"select * from time_val");?>
                            <table border="1"  class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Emp Name</th>
                                            <th>Emp Code</th>
                                            <th>Project Name</th>
                                            <th>Project Code</th>
                                            <th>Start Time</th>                                         
                                            <th>End Time</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php while($row = mysqli_fetch_array($data))
									{

										?>
                                      <tr class="odd gradeA">
                                            <td><?php 
											$qry2 = mysqli_query($conn,"select * from user where id = '".$row['emp_id']."'");
											$row2 = mysqli_fetch_array($qry2);								
											echo $row2['name']; ?></td>
                                            <td><?php echo $row2['emp_code']; ?></td>
                                            <td><?php 
											$qry3 = mysqli_query($conn,"select * from project where id = '".$row['proj_id']."'");
											$row3 = mysqli_fetch_array($qry3);
											echo $row3['name']; ?></td> 
                                            <td><?php echo $row3['code']; ?></td>                                        
                                            <td><?php echo $row['s_time']; ?></td>
                                             <td><?php echo $row['e_time']; ?></td >                                          
                                           
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
                <div class="row">
                   <div class="col-lg-2">
                   
                  <button onclick="printDiv()" class="btn btn-primary">Print this Report</button>
                  </div>
                  </div>
            </div>
            <!-- /.row -->
        </div> 
<?php include("footer.php")?>
 <script>
function printDiv()
{
  var divToPrint=document.getElementById('dataTables-example');
  newWin= window.open("");
  newWin.document.write(divToPrint.outerHTML);
  newWin.print();
  newWin.close();
}
</script>