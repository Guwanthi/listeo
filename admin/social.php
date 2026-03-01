<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>9-WEB Social</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


  

    <link rel="stylesheet" href="vendor/toastr/css/toastr.min.css">

    <link rel="stylesheet" href="vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="vendor/pickadate/themes/default.date.css">
    <link href="vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

   

    <script type="text/javascript" src="jsb/user.js"></script>
    <script type="text/javascript" src="jsb/user_validation.js"></script>
    <script type="text/javascript" src="jsb/alert.js"></script>
    <script type="text/javascript" src="jsb/upload.js"></script>

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
		
		<!--**********************************
            Chat box End
        ***********************************-->


		
		
        <!--**********************************
            Header start
        ***********************************-->
        <?php include './inc/header.php'; ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
       <?php include './inc/nav.php';?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->

        <?php 
        $hbid=0;
        if(isset($_POST['hbid'])){
            $hbid=$_POST['hbid'];
        }
            $facebook=""; $twitter=""; $instagram=""; $youtube=""; $tripadvisor="";
              $result = mysqli_query($con, "SELECT * FROM social_media  ");
                            while ($row = mysqli_fetch_array($result)) {
                                $facebook   = $row['facebook'];
                                $twitter=$row['twitter'];
                                $instagram=$row['instagram'];
                                $youtube=$row['youtube'];
                                $tripadvisor=$row['tripadvisor'];
            }

            $whatsapp=""; $messanger=""; $telegram=""; $line=""; $other="";
              $result = mysqli_query($con, "SELECT * FROM social_chat  ");
                            while ($row = mysqli_fetch_array($result)) {
                                $whatsapp   = $row['whatsapp'];
                                $messanger=$row['messanger'];
                                $telegram=$row['telegram'];
                                $line=$row['line'];
                                $other=$row['other'];
            }

            $contact1=""; $contact2=""; $address=""; $email1=""; $email2="";  $contact3="";
              $result = mysqli_query($con, "SELECT * FROM conntact_details  ");
                            while ($row = mysqli_fetch_array($result)) {
                                $contact1   = $row['contact1'];
                                $contact2=$row['contact2'];
                                $contact3=$row['contact3'];
                                $address=$row['address'];
                                $email1=$row['email1'];
                                $email2=$row['email2'];
            }
            $logo_url="";
             $result = mysqli_query($con, "SELECT * FROM logo  ");
                            while ($row = mysqli_fetch_array($result)) {
                                $logo_url   = $row['logo_url'];
            }

         
         ?>
        <div class="content-body">
            <div class="container-fluid">


                <div class="form-head d-flex mb-0 mb-lg-4 align-items-start">
                    <div class="mr-auto d-none d-lg-block">
                        <h2 class="text-black font-w600 mb-1">Social</h2>
                      
                    </div>
                    <div class="d-none d-lg-flex align-items-center">
                        <div class="text-right">
                            <h3 class="fs-20 text-black mb-0" id="sys_time"><?php echo $date; ?></h3>
                           
                        </div>
                        <a class="ml-4 text-black p-3 rounded border text-center width60" href="#">
                            <i class="las la-cog scale5"></i>
                        </a>
                    </div>
                </div>


               <!-- <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
					</ol>
                </div>-->
                <!-- row -->
                <div class="row">

            
             <!-------------------- why choose   section --------------------------------->
                  <div class="col-xl-6 col-lg-6" >

                    <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Social Media</h4>
                            </div>
                            <div class="card-body">

                                <div class="form-group">
                                    <label>Facebook</label>
                                    <input type="text" class="form-control input-rounded " value="<?php echo $facebook; ?>"  placeholder="" id="facebook">
                                </div>

                                <div class="form-group">
                                    <label>Twitter</label>
                                    <input type="text" class="form-control input-rounded " value="<?php echo $twitter; ?>"  placeholder="" id="twitter">
                                </div>

                                <div class="form-group">
                                    <label>Instagram</label>
                                    <input type="text" class="form-control input-rounded " value="<?php echo $instagram; ?>"  placeholder="" id="linkedin">
                                </div>

                                <div class="form-group">
                                    <label>Youtube</label>
                                    <input type="text" class="form-control input-rounded " value="<?php echo $youtube; ?>"  placeholder="" id="youtube">
                                </div>

                                <div class="form-group">
                                    <label>Tripadvisor</label>
                                    <input type="text" class="form-control input-rounded " value="<?php echo $tripadvisor; ?>"  placeholder="" id="tripadvisor">
                                </div>



                                <div class="col-xl-12 col-lg-12 " style="float: left;" >
                                      <button type="button"  class="btn btn-sm btn-info " id="btn1" onclick="social_media();return false;">Add Social Media <img src="images/loading.gif" id="btn_loading1" class="loading_img display_none"></button>
                                </div>    

                           

                            </div>
                     </div>


                   </div> 


                     <div class="col-xl-6 col-lg-6" >

                    <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Chats</h4>
                            </div>
                            <div class="card-body" id="res_keywords">

                                
                                <div class="form-group">
                                    <label>Whatsapp</label>
                                    <input type="text" class="form-control input-rounded " value="<?php echo $whatsapp; ?>"  placeholder="" id="whatsapp">
                                </div>

                                <div class="form-group">
                                    <label>Messanger Page ID</label>
                                    <input type="text" class="form-control input-rounded " value="<?php echo $messanger; ?>"  placeholder="" id="messanger">
                                </div>

                                <div class="form-group">
                                    <label>Telegram</label>
                                    <input type="text" class="form-control input-rounded " value="<?php echo $telegram; ?>"  placeholder="" id="telegram">
                                </div>

                                <div class="form-group">
                                    <label>Line</label>
                                    <input type="text" class="form-control input-rounded " value="<?php echo $line; ?>"  placeholder="" id="line">
                                </div>

                                <div class="form-group">
                                    <label>Other</label>
                                    <input type="text" class="form-control input-rounded " value="<?php echo $other; ?>"  placeholder="" id="other">
                                </div>



                                <div class="col-xl-12 col-lg-12 " style="float: left;" >
                                      <button type="button"  class="btn btn-sm btn-info " id="btn2" onclick="social_media_chats();return false;">Add Chats <img src="images/loading.gif" id="btn_loading2" class="loading_img display_none"></button>
                                </div>    


                              

                            </div>
                     </div>


                   </div> 


                      <div class="col-xl-6 col-lg-6" >

                    <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Conatct Details</h4>
                            </div>
                            <div class="card-body" id="res_keywords">

                                
                                <div class="form-group">
                                    <label>Contact 01</label>
                                    <input type="text" class="form-control input-rounded " value="<?php echo $contact1; ?>"  placeholder="" id="contact1">
                                </div>

                                <div class="form-group">
                                    <label>Contact 02</label>
                                    <input type="text" class="form-control input-rounded " value="<?php echo $contact2; ?>"  placeholder="" id="contact2">
                                </div>

                                <div class="form-group">
                                    <label>Contact 03</label>
                                    <input type="text" class="form-control input-rounded " value="<?php echo $contact3; ?>"  placeholder="" id="contact3">
                                </div>

                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control input-rounded " value="<?php echo $address; ?>"  placeholder="" id="address">
                                </div>

                                <div class="form-group">
                                    <label>Email 01</label>
                                    <input type="text" class="form-control input-rounded " value="<?php echo $email1; ?>"  placeholder="" id="email1">
                                </div>

                                <div class="form-group">
                                    <label>Email 02</label>
                                    <input type="text" class="form-control input-rounded " value="<?php echo $email2; ?>"  placeholder="" id="email2">
                                </div>



                                <div class="col-xl-12 col-lg-12 " style="float: left;" >
                                      <button type="button"  class="btn btn-sm btn-info " id="btn3" onclick="conact_details();return false;">Add Contact Details <img src="images/loading.gif" id="btn_loading3" class="loading_img display_none"></button>
                                </div>    


                              

                            </div>
                     </div>


                   </div> 

                        <div class="col-xl-6 col-lg-6" >

                    <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Logo</h4>
                            </div>
                            <div class="card-body" >

                               <div class="alert alert-success left-icon-big alert-dismissible fade show col-xl-4 col-lg-4" style="float: left;">
                                            
                                            <div class="media"  ondrop="logo_explorer1(event)" ondragover="return false">
                                                <div class="alert-left-icon-big" >
                                                <!--    <span><i class="mdi mdi-check-circle-outline"></i></span>-->
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mt-1 mb-2" style="text-align: center;">Drop file here or</h5>
                                                    <div class="btn btn-sm btn-info " onclick="logo_explorer2();">Choose file
                                                        <img src="images/loading.gif" id="loading1" class="loading_img display_none">
                                                    </div>
                                                    
                                                   <input type="file" class="custom-file-input" id="selectfile" style="display: none;">
                                                </div>
                                            </div>
                                </div>

                                <div class="col-xl-12 col-lg-12" id="res_logo" style="float: left;">
                                <?php  
                                    if($logo_url!=""){
                                        echo ' <img src="'.$logo_url.'" style="width: 200px;">';
                                    }
                                 ?>
                                 </div>

                            </div>
                     </div>


                   </div> 


                     

                <!-------------------- Welcome   section --------------------------------->   

                    

                 

                </div>
            </div>
        </div>



        <!--== class delete model  -->
          <!-- Modal -->
            <div class="modal fade" id="Keyword_delete_model">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete Keyword</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                        </div>
                        <div class="modal-body">Do you want to delete this?</div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="keyword_delete();return false;">Yes</button>
                                <button type="button" class="btn btn-default light" data-dismiss="modal">No</button>
                                
                            </div>
                    </div>
                </div>
            </div>
        <!-- == class delete model end -->
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
       <?php include './inc/footer.php';?>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	

	  <!-- Daterangepicker -->
   
     <!-- momment js is must -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- pickdate -->
    <script src="vendor/pickadate/picker.js"></script>
    <script src="vendor/pickadate/picker.time.js"></script>
    <script src="vendor/pickadate/picker.date.js"></script>



    <!-- Daterangepicker -->
    <script src="js/plugins-init/bs-daterange-picker-init.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <!-- Pickdate -->
    <script src="js/plugins-init/pickadate-init.js"></script>


    <!-- Toastr -->
    <script src="vendor/toastr/js/toastr.min.js"></script>

    <!-- All init script -->
    <script src="js/plugins-init/toastr-init.js"></script>


       <!-- text editor-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <link rel="stylesheet" href="src/richtext.min.css">
    
    <script type="text/javascript" src="src/jquery.richtext.js"></script>

      <!-- text editor-->
    <script>

        $(document).ready(function() {
            $('.content').richText();
            $('.content2').richText();
        });

    </script>
      <!-- text editor-->
    <!-- text editor-->

    
    
   


    


</body>


</html>