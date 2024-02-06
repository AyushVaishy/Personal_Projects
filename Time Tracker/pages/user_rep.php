<?php include("header.php")?>
     <div id="page-wrapper">
     <div class="row">
               
                <!-- /.col-lg-12 -->
            
            
                <div class="col-lg-12">
                    <h1 class="page-header">User Report's</h1>
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
                            
                            <?php $data = mysqli_query($conn,"select * from user");?>
                            <table border="1" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Emp Code</th>
                                            <th>Emp Name</th>
                                            <th>Emp mail-id</th>                                         
                                            <th>Designation</th>
                                            
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