<?php include('header.php');?>

<?php $qry1 = mysqli_query($conn,"SELECT COUNT(*) FROM project");
$row1 = mysqli_fetch_array($qry1);
$tot_proj = $row1[0];
?>
<?php $qry2 = mysqli_query($conn,"SELECT COUNT(*) FROM user");
$row2 = mysqli_fetch_array($qry2);
$tot_user = $row2[0];
?>
<?php $qry3 = mysqli_query($conn,"SELECT COUNT(*) FROM `project` where `compl_per` = 100");
$row3 = mysqli_fetch_array($qry3);
$tot_compl_proj = $row3[0];
?>
<?php $qry4 = mysqli_query($conn,"SELECT * FROM project order by t_s limit 10");


?>
  <div id="page-wrapper">
  <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-cogs fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $tot_proj;?></div>
                                    <div>Total Project</div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $tot_user;?></div>
                                    <div>Total Users</div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-flag fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $tot_compl_proj; ?></div>
                                    <div>Total Complete Project</div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
              
            </div>
            <!-- /.row -->
              <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Latest Project</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
  <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#Code</th>
                                                    <th>Name</th>
                                                    <th>Client Name</th>
                                                    <th>Complete status</th>
                                                    <th>Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            while($row4 = mysqli_fetch_array($qry4))
											{?>
                                                <tr>
                                                    <td><?php echo $row4['code'];?></td>
                                                    <td><?php echo $row4['name'];?></td>
                                                    <td><?php echo $row4['client'];?></td>
                                                    <td><?php echo $row4['compl_per'];?>%</td>
                                                    <td><?php   echo date("d/m/Y ", strtotime($row4["t_s"]))?></td>
                                                </tr>
                                             <?php } ?>  
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                                <div class="col-lg-8">
                                    <div id="morris-bar-chart"></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
</div>

<?php include('footer.php');?>