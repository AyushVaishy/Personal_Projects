<?php include("header.php")?>
     <div id="page-wrapper">
     <div class="row">
               
                <!-- /.col-lg-12 -->
                <div class="col-lg-12">
                   
                    <h1 class="page-header">#</h1>
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
                               <form role="form" name="add_new" action="" target="" method="post">
                               <div class="col-lg-4">
                               <div class="form-group"> 
                               <label>Project</label> 
                               </div></div>
                               <div class="col-lg-8">
                               <div class="form-group">  
                               <?php
                               $qry =mysqli_query($conn,"select * from project ");
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
                               <?php
                             
							   ?>
                               <textarea name="proj_comment" class="form-control"></textarea>
                              
                               </div></div>
                               <input type="hidden" value="1" name="status">
                                <input type="hidden" value="1" name="emp_id">
								<div class="col-lg-4">
                               <div class="form-group"> 
                               <label>Time</label> 
                               </div></div>
                               <div class="col-lg-8">
                               <div class="form-group">  
                              <input type="text" class="form-control" value="<?php echo date("d:m:y h:i:s")?>" name="s_time" disabled/ >
                              
                               </div></div>
                               <div class="col-lg-4">
                               <div class="form-group"> 
                               <input type="submit" name="submit" value="Start Time"  class="btn btn-primary btn-lg btn-block" /> 
                               </div></div>
                               
                              </form>
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
