
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD-->
<head>
   
     <meta charset="UTF-8" />
    <title>Admin Dashboard</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="<?php echo base_url();  ?>assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url();  ?>assets/css/main.css" />
    <link rel="stylesheet" href="<?php echo base_url();  ?>assets/css/theme.css" />
    <link rel="stylesheet" href="<?php echo base_url();  ?>assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="<?php echo base_url();  ?>assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->
<link href="<?php echo base_url();  ?>assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

    <!-- PAGE LEVEL STYLES -->
    <!-- END PAGE LEVEL  STYLES -->
       <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    
   
                                        
                                      
   
      
    
    
    
</head>
    <!-- END  HEAD-->
    <!-- BEGIN BODY-->
<body class="padTop53 " >

     <!-- MAIN WRAPPER -->
    <div id="wrap">


         <!-- HEADER SECTION -->
       <?php require_once 'nav.php';    ?>
         <!-- HEADER SECTION -->
       
        <!--PAGE CONTENT -->
       <div id="content" style="padding-top:10px;">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">

<div class="panel panel-primary">
                        <div class="panel-heading">
                          Dispute  List
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Associate Uid</th>
                                            <th>Associate Name</th>
                                            <th>Traveler UId</th>
                                            <th>Traveler Name</th>
                                            <th>Raised By</th>
                                            <th>Tour Name</th>
                                            <th>Status</th>
                                            <th>Date</th> 
                                            <th>Messages</th>  
                                             <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        
                                        <?php 
                                       // $this->output->enable_profiler(TRUE);
                                        $dispidata = $this->admin_model->getdispute();  
                                        //print_r($docdata);
                                         
                                      
                                        foreach ($dispidata as $dispval)
                                        {
                                         // $docr = $this->admin_model->getdoc($doestval['uid']);
                                        $name =  $this->user_model->get($dispval['asso_uid']);
                                        $namet =  $this->user_model->get($dispval['trv_uid']);
                                        $tour = $this->tour_model->tourbyid($dispval['tour_id']);
                                        ?>
                                       
                                        <tr class="odd gradeX">
                                              <td class="warning"><?php echo $dispval['id']; ?></td>
                                            <td class="warning"><?php echo $dispval['asso_uid']; ?></td>
                                            <td class="warning" ><?php echo $name[0]['user_name'] ; ?></td>
                                            <td class="warning" ><?php echo $dispval['trv_uid'] ; ?></td>
                                                                                    
                                         <td class="danger"><?php echo $dispval['by'];?></td>
                                         <td class="success"><?php echo $tour[0]['tour_name']  ?></td>
                                         <td class="success"><?php if($dispval['status']==='0'){echo "open";}else{echo "close";}?></td>
                                            <td class="danger"><?php echo $dispval['date'];?></td>
                                            <td class="info"><form action="<?php echo base_url()."index.php/admin/dispute";   ?>" method="post"><input type="hidden" name="dispid" value="<?php echo $dispval['id'] ;  ?>"><button class="btn btn-danger btn-xs"> <i class="icon-comments">&nbsp;</i>Comments</button></form>
                                            </br>
                                            <form action="<?php echo base_url()."index.php/admin/dispute";   ?>" method="post"><input type="hidden" name="comid" value="<?php echo $dispval['id'] ;  ?>"><button class="btn btn-success btn-xs"> <i class="icon-comment">&nbsp;</i>Make Comment</button></form>
                                            
                                            
                                            </td>
                                            
                                            <td><form method="post" action ="<?php echo base_url(); ?>index.php/admin/dispute" onsubmit="return confirm('Do you really want to open/close?');" > <input type="hidden" name="apr" value="1">
                                               <input type="hidden" name="disputeid" value="<?php echo $dispval['id'];?>"><button class="btn btn-success btn-xs"><i class="icon-power-off"></i></button></form>
                                                </br>
                                                <form method="post" action="<?php echo base_url(); ?>index.php/admin/dispute" onsubmit="return confirm('Do you really want to delete?');">
                                                                                                        <input type="hidden" name="del" value="1">
                                                    <input type="hidden" name="delmeid" value="<?php echo $dispval['id'];?>">
                                                   
                                                    <button class="btn btn-danger btn-xs"><i class="icon-remove"></i></button>
                                                </form></td>
                                        </tr>
<?php
                                         
 }
?>
                                    </tbody></table></div></div></div>



                                        
                                        
                                        
                                        
                                        
                                        
                                       
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                    </div>
                </div>

                <hr />




            </div>




        </div>
       <!--END PAGE CONTENT -->


    </div>

     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  kpholidays.com &nbsp;2014 &nbsp;</p>
    </div>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    <script src="<?php echo base_url();  ?>assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();  ?>assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
    <script src="<?php echo base_url();  ?>assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();  ?>assets/plugins/dataTables/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
    </script>

      
</body>
    <!-- END BODY-->
    
</html>

