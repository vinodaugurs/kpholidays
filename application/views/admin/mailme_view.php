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
    <link rel="stylesheet" href="<?php echo base_url();  ?>assets/plugins/wysihtml5/dist/bootstrap-wysihtml5-0.0.2.css" />
 <link rel="stylesheet" href="<?php echo base_url();  ?>assets/css/bootstrap-wysihtml5-hack.css" />
     <style>
                        ul.wysihtml5-toolbar > li {
                            position: relative;
                        }
                    </style>
    <!-- PAGE LEVEL STYLES -->
    
 <link href="<?php echo base_url();  ?>assets/css/jquery-ui.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url();  ?>assets/plugins/uniform/themes/default/css/uniform.default.css" />
<link rel="stylesheet" href="<?php echo base_url();  ?>assets/plugins/inputlimiter/jquery.inputlimiter.1.0.css" />
<link rel="stylesheet" href="<?php echo base_url();  ?>assets/plugins/chosen/chosen.min.css" />
<link rel="stylesheet" href="<?php echo base_url();  ?>assets/plugins/colorpicker/css/colorpicker.css" />
<link rel="stylesheet" href="<?php echo base_url();  ?>assets/plugins/tagsinput/jquery.tagsinput.css" />
<link rel="stylesheet" href="<?php echo base_url();  ?>assets/plugins/daterangepicker/daterangepicker-bs3.css" />
<link rel="stylesheet" href="<?php echo base_url();  ?>assets/plugins/datepicker/css/datepicker.css" />
<link rel="stylesheet" href="<?php echo base_url();  ?>assets/plugins/timepicker/css/bootstrap-timepicker.min.css" />
<link rel="stylesheet" href="<?php echo base_url();  ?>assets/plugins/switch/static/stylesheets/bootstrap-switch.css" />
   
 

    <!-- PAGE LEVEL STYLES -->
    <!-- END PAGE LEVEL  STYLES -->
       <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript">
$(document).ready(function() {

});
</script>
                                        
                                      
   
      
    
    
    
</head>
    <!-- END  HEAD-->
    <!-- BEGIN BODY-->
<body class="padTop53 " >

     <!-- MAIN WRAPPER -->
    <div id="wrap">


      <?php require_once 'nav.php';    ?>
         <!-- HEADER SECTION -->
       
        <!--PAGE CONTENT -->
       <div id="content" style="padding-top:10px;">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">

<div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="icon-envelope-alt"></i> Selected User Email Section
                        </div>
                        <div class="panel-body">
                           
                        
                        
                        
                            <form action="<?php echo base_url() ;?>index.php/admin/mailme" method="post">
                               
                            <div class="form-group">
<label class="control-label col-lg-4">Recipient</label>


<select name="recipient[]" data-placeholder="Choose User"  class="form-control chzn-select" multiple="multiple" tabindex="4" style="height:25px;">
<?php
$this->load->model('user_model');
$user = $this->user_model->get();
//$i=0;
foreach($user as $emailval)
{
 // $allemail[$i] =  $emailval['email'] ;
  //$i++;
//print_r(implode("",$allemail));
?>
    
<option value="<?php echo $emailval['email'];?>" ><?php echo $emailval['user_name']." - ".$emailval['type'];?></option>
<?php
}
?>

</select>
</div>


                                
                                <div class="form-group">
                                            <label>Email Body</label>
                                
                                            <textarea name="mailmessage" id="wysihtml5" class="form-control" rows="10"></textarea>
                                
                                
                                </div>
                                
                             


                                
                                
                                
                                
                                
                                
                                <button class="btn btn-success btn-sm" > <i class="icon-mail-forward"></i> Send Mail</button>
                            
                            
                          
                            
                            
                            
                            </form>
                       
                       
    <br>
                          
                            <div class="alert alert-success">   
                            <?php
                            
                            
                              $i=1;
                        
                        //$c=2;
                       // $reci1 ="1rec";
                       // $reci2 ="2rec";
                        if(isset($c)) 
                        {
                        for($i=1;$i<=$c;$i++)
                        {
                           
                            $msg = "r".$i;
                            echo $$msg."<br>";
                            
                           // $fg ='$reci'.$i;
                           // echo $fg;
                           //$mk = '$reci'.$i;
                           // echo $mk;
                        //if(isset($name))
                       // {
                            //echo $reci[$reci_.$i];
                           //foreach($sendreci as $reci)
                          // {
                            //$reci="$";
                           
                            // }
                       // }
                        }
                        }
                        ?>
                      
                    
                        </div>
                        
                        
                        
                        
                      
                        
                        
                        
                        
                        
                        </div></div>



                                        
                                        
                                        
                                        
                                        
                                        
                                       
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
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
     <script src="<?php echo base_url();  ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();  ?>assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
 <script src="<?php echo base_url();  ?>assets/plugins/wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
    <script src="<?php echo base_url();  ?>assets/plugins/bootstrap-wysihtml5-hack.js"></script>
<script src="<?php echo base_url();  ?>assets/js/editorInit.js"></script>

      <!-- PAGE LEVEL SCRIPT-->
 <script src="<?php echo base_url();  ?>assets/js/jquery-ui.min.js"></script>
 <script src="<?php echo base_url();  ?>assets/plugins/uniform/jquery.uniform.min.js"></script>
<script src="<?php echo base_url();  ?>assets/plugins/inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
<script src="<?php echo base_url();  ?>assets/plugins/chosen/chosen.jquery.min.js"></script>
<script src="<?php echo base_url();  ?>assets/plugins/colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="<?php echo base_url();  ?>assets/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<script src="<?php echo base_url();  ?>assets/plugins/validVal/js/jquery.validVal.min.js"></script>
<script src="<?php echo base_url();  ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url();  ?>assets/plugins/daterangepicker/moment.min.js"></script>
<script src="<?php echo base_url();  ?>assets/plugins/datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url();  ?>assets/plugins/timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="<?php echo base_url();  ?>assets/plugins/switch/static/js/bootstrap-switch.min.js"></script>
<script src="<?php echo base_url();  ?>assets/plugins/jquery.dualListbox-1.3/jquery.dualListBox-1.3.min.js"></script>
<script src="<?php echo base_url();  ?>assets/plugins/autosize/jquery.autosize.min.js"></script>
<script src="<?php echo base_url();  ?>assets/plugins/jasny/js/bootstrap-inputmask.js"></script>
       <script src="<?php echo base_url();  ?>assets/js/formsInit.js"></script>
        <script>
            $(function () {
                formInit();
            formWysiwyg();
    });
        </script>


      
</body>
    <!-- END BODY-->
    
</html>

