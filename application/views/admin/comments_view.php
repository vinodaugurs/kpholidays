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
                                            <th>From</th>
                                            <th>To</th>
                                            <th>comments</th>
                                            <th>Date</th>
                                            
                                             
                                        </tr>
                                    </thead> 
                                    <tbody>
                                        
                                        
                                        <?php 
                                       // $this->output->enable_profiler(TRUE);
                                        $dispidata = $this->admin_model->getdisputebyid($did);  
                                        //print_r($docdata);
                                        foreach ($dispidata as $dispval)
                                        {
                                         // $docr = $this->admin_model->getdoc($doestval['uid']);
                                            if($dispval['to_'])
                                            {
                                                $namet =  $this->user_model->get($dispval['to_']);  
                                            }
                                            else
                                            {
                                             $namet[0]['type']="Both" ; 
                                             $namet[0]['user_name']="Both";
                                            }
                                       
                                      if ($dispval['from_'] === "Admin")
                                      {
                                         $name[0]['type']="Admin" ; 
                                             $name[0]['user_name']="Admin"; 
                                      }
                                      else
                                      {
                                          $name =  $this->user_model->get($dispval['from_']); 
                                      }
                                          
                                        //$tour = $this->tour_model->tourbyid($dispval['tour_id']);
                                        ?>
                                       
                                        <tr class="warning">
                                            <td><?php  echo $dispval['id'];  ?></td>
                                            <td><button class="btn-primary btn-xs" disabled="disabled"> <?php echo $name[0]['type'];  ?></button>&nbsp;<button class="btn-success btn-xs" disabled="disabled"><?php echo $name[0]['user_name'];?></button></td>
                                            <td><button class="btn-primary btn-xs" disabled="disabled"><?php  echo $namet[0]['type']; ?></button>&nbsp;<button class="btn-success btn-xs" disabled="disabled"><?php  echo $namet[0]['user_name']; ?></button></td>
                                        <td><textarea class="form-control" disabled="disabled" rows="3"><?php echo $dispval['message'] ; ?></textarea></td>
                                        <td><?php  echo $dispval['date'];  ?></td>
                                        
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

