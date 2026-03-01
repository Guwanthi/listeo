<!DOCTYPE html>
<html lang="en">



<head>
       
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>9-WEB Rooms</title>
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
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="images/logo.png" alt="">
                <img class="logo-compact" src="images/logo-text.png" alt="">
                <img class="brand-title" src="images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
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
        $rid=0; $hrtid=0;
        if(isset($_POST['rid'])){
            $rid=$_POST['rid'];
        }
        $room_type="";
        $result = mysqli_query($con, "SELECT * FROM rooms_suites WHERE idrooms_suites='$rid' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $room_type=$row['room_type']; 
        }

            $room_special=""; $room_size=""; $room_view=""; $rooms_count=""; $adults=0; $childern=0;  $rooms_description=""; $image_url="";
            /* $result = mysqli_query($con, "SELECT * FROM rooms_suites  WHERE idrooms_suites='$hrtid' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $room_type   = $row['room_type'];
                                $room_special=$row['room_special'];
                                $room_size=$row['room_size'];
                                $room_view=$row['room_view'];
                                $rooms_count=$row['rooms_count'];
                                $adults=$row['adults'];
                                $childern=$row['childern'];
                                $rooms_description=$row['rooms_description'];
                                $image_url=$row['room_url'];
            }*/

             $rm_title=""; $rm_description="";
           /* $result = mysqli_query($con, "SELECT * FROM rooms_page  ");
                            while ($row = mysqli_fetch_array($result)) {
                                $rm_title=$row['title']; 
                                $rm_description=$row['description'];  
            }*/

         ?>
        <div class="content-body">
            <div class="container-fluid">

                <div class="form-head d-flex mb-0 mb-lg-4 align-items-start">
                    <div class="mr-auto d-none d-lg-block">
                        <h2 class="text-black font-w600 mb-1"><?php echo $room_type;?></h2>
                      
                    </div>
                    <div class="d-none d-lg-flex align-items-center">
                        <div class="text-right">
                            <h3 class="fs-20 text-black mb-0">09:62 AM</h3>
                            <span class="fs-14">Monday, 3 Augusut 2020</span>
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
                                <h4 class="card-title">Room Images</h4>
                            </div>
                            <div class="card-body">

                             <div class="table-responsive">


                         
                                <input type="hidden" value="<?php echo $rid; ?>" id="rid" name="">
                                 <div class="alert alert-success left-icon-big alert-dismissible fade show col-xl-4 col-lg-4" style="float: left;">
                                            
                                    <div class="media"  ondrop="room_image_explorer1(event)" ondragover="return false">
                                        <div class="alert-left-icon-big">
                                                <!--    <span><i class="mdi mdi-check-circle-outline"></i></span>-->
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-1 mb-2" style="text-align: center;">Drop file here or</h5>
                                            <div class="btn btn-sm btn-info " onclick="room_image_explorer2();">Choose file
                                            <img src="images/loading.gif" id="loading1" class="loading_img display_none">
                                            </div>
                                            <input type="file" class="custom-file-input" id="selectfile" style="display: none;">
                                        </div>
                                    </div>
                                </div>


                            
                             

                                
                             </div>

                            </div>
                     </div>


                   </div> 


                    <div class="col-xl-6 col-lg-6" >

                    <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Room Image Slider</h4>
                            </div>
                            <div class="card-body" id="res_room_img_slider">

                             <?php room_image_slider_view($con,$rid);?>

                            </div>
                     </div>


                   </div> 



                  <div class="col-xl-6 col-lg-6" >

                    <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Price</h4>
                            </div>
                            <div class="card-body">

                             <div class="table-responsive">


                                   <div class="form-group">
                                            <label>Type</label>
                                            <input type="text" class="form-control input-rounded " value="<?php echo $room_type; ?>"  placeholder="" id="rt_type">
                                    </div>

                                     <div class="form-group">
                                            <label>Specialties</label>
                                            <input type="text" class="form-control input-rounded " value="<?php echo $room_special; ?>"  placeholder="" id="rt_specialties">
                                     </div>

                                    
                                    <div class="form-group">
                                            <label>Room View</label>
                                            <input type="text" class="form-control input-rounded " value="<?php echo $room_view; ?>"  placeholder="" id="rt_view">
                                    </div>

                                    <div class="form-group col-xl-6 col-lg-6" style="float: left;">
                                            <label>Room Size</label>
                                            <input type="text" class="form-control input-rounded " value="<?php echo $room_size; ?>"  placeholder="" id="rt_size">
                                    </div>


                                    <div class="form-group col-xl-6 col-lg-6" style="float: left;">
                                            <label>Room Qty</label>
                                            <input type="number" class="form-control input-rounded " value="<?php echo $rooms_count; ?>"  placeholder="" id="rt_qty">
                                    </div>

                                    <div class="form-group col-xl-6 col-lg-6" style="float: left;">
                                            <label>How many adults stay in the room ?</label>
                                            <input type="number" class="form-control input-rounded " value="<?php echo $adults; ?>"  placeholder="" id="rt_adults">
                                    </div>

                                    <div class="form-group col-xl-6 col-lg-6" style="float: left;">
                                            <label>How many children stay in the room ?</label>
                                            <input type="number" class="form-control input-rounded " value="<?php echo $childern; ?>"  placeholder="" id="rt_children">
                                    </div>



                                 <div class="col-xl-12 col-lg-12 " style="float: left;" >
                                        <?php if($hrtid==0){?>
                                        <button type="button"  class="btn btn-sm btn-info " id="btn1" onclick="room_type(1,0);return false;">Add Room Type <img src="images/loading.gif" id="btn_loading1" class="loading_img display_none"></button>
                                        <?php }else{?>
                                        <button type="button" id="btn1"  class="btn btn-sm btn-warning " onclick="room_type(2,<?php echo $hrtid; ?>);return false;">Edit Room Type <img src="images/loading.gif" id="btn_loading1" class="loading_img display_none"></button>
                                        <a class="btn btn-sm btn-primary " href="room-type.9web">Reset</a>
                                        <?php }?> 
                                     </div>    

                                
                             </div>

                            </div>
                     </div>


                   </div> 








                      <div class="col-xl-6 col-lg-6" >

                    <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">About Rooms </h4>
                            </div>
                            <div class="card-body">

                             <div class="table-responsive">


                                   <div class="form-group">
                                            <label>Rooms Description Title</label>
                                            <input type="text" class="form-control input-rounded " value="<?php echo $rm_title; ?>"  placeholder="" id="r_title">
                                    </div>


                                    <div class="form-group">
                                        <label class="form-control-label">Rooms Description</label>
                                                <div class="page-wrapper box-content">
                                                <textarea class="content2" name="" id="rdescription"><?php echo $rm_description; ?></textarea>
                                    </div>
                                </div>



                                 <div class="col-xl-12 col-lg-12 " style="float: left;" >
                                        <button type="button"  class="btn btn-sm btn-info " id="btn2" onclick="rooms_description();return false;">Add Content <img src="images/loading.gif" id="btn_loading2" class="loading_img display_none"></button>
                                </div>    

                                
                             </div>

                            </div>
                     </div>


                   </div> 






                 <div class="col-xl-12"  id="res_room_type">

                    <?php room_type($con); ?>
                    
                 </div>   
                <!-------------------- Welcome   section --------------------------------->   

                    

                 

                </div>
            </div>
        </div>



        <!--== class delete model  -->
          <!-- Modal -->
            <div class="modal fade" id="rt_delete_model">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete Room Type</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                        </div>
                        <div class="modal-body">Do you want to delete this?</div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="room_type_delete();return false;">Yes</button>
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