<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>9-WEB Hotels</title>
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
        $hsid=0;
        if(isset($_POST['hsid'])){
            $hsid=$_POST['hsid'];
        }
            $hotel_type_idhotel_type=0; $hotel_description="";   $image_url="";
              $result = mysqli_query($con, "SELECT * FROM hotels WHERE idhotels='$hsid'  ");
                            while ($row = mysqli_fetch_array($result)) {
                                $hotel_type_idhotel_type     = $row['hotel_type_idhotel_type'];
                                $hotel_description   = $row['hotel_description'];
                                
            }

            $result3 = mysqli_query($con, "SELECT * FROM hotel_images WHERE hotels_idhotels='$hsid'   ");
                            while ($row = mysqli_fetch_array($result3)) {
                                $image_url=$row['hotel_url'];
            }   

           
         ?>
        <div class="content-body">
            <div class="container-fluid">


                <div class="form-head d-flex mb-0 mb-lg-4 align-items-start">
                    <div class="mr-auto d-none d-lg-block">
                        <h2 class="text-black font-w600 mb-1">Hotels</h2>
                      
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
                                <h4 class="card-title">Hotels</h4>
                            </div>
                            <div class="card-body">

                             <div class="table-responsive">


                                   <div class="form-group">
                                            <label>Hotel Type</label>
                                            <select class="form-control input-rounded " id="htype">
                                                <?php 
                                                 $result = mysqli_query($con, "SELECT * FROM hotel_type ");
                                                while ($row = mysqli_fetch_array($result)) {
                                                    $idhotel_type     = $row['idhotel_type'];
                                                    $htype   = $row['htype'];
                                                    if($hotel_type_idhotel_type==$idhotel_type){
                                                         echo '<option selected value="'.$idhotel_type.'">'.$htype.'</option>';
                                                    }else{
                                                         echo '<option value="'.$idhotel_type.'">'.$htype.'</option>';
                                                    }
                                                   
                                                }

                                                ?>
                                                
                                            </select>
                                            
                                    </div>

                                     <div class="form-group">
                                            <label>Hotel Name and Location </label>
                                            <input type="text" class="form-control input-rounded " value="<?php echo $hotel_description; ?>"  placeholder="" id="hname">
                                    </div>

                                    

                                    <!--<div class="form-group">
                                        <label class="form-control-label">Description</label>
                                                <div class="page-wrapper box-content">
                                                <textarea class="content" name="" id="abdescription"><?php echo $description; ?></textarea>
                                                </div>
                                  </div>-->

                                <h5 style="color:red;margin-top: 20px;">Best image resolution size (Width : 700px) and (Height : 460px)</h5> 

                                 <div class="alert alert-success left-icon-big alert-dismissible fade show col-xl-4 col-lg-4" style="float: left;">
                                            
                                    <div class="media"  ondrop="hotel_explorer1(event)" ondragover="return false">
                                        <div class="alert-left-icon-big">
                                                <!--    <span><i class="mdi mdi-check-circle-outline"></i></span>-->
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-1 mb-2" style="text-align: center;">Drop file here or</h5>
                                            <div class="btn btn-sm btn-info " onclick="hotel_explorer2();">Choose file
                                            <img src="images/loading.gif" id="loading1" class="loading_img display_none">
                                            </div>
                                            <input type="file" class="custom-file-input" id="selectfile" style="display: none;">
                                        </div>
                                    </div>
                                </div>


                                <div  class="display_none " style="float: left;" id="image_upliader1">

                                <div class="col-xl-6 col-lg-6  " style="float: left;" >
                                        <div class="alert alert-info alert-dismissible fade show" style="padding: 0px;">
                                            <button type="button" class="close"  aria-label="Close" style="background: red;" onclick="hotel_uploaded_image_delete();return false;
                                            "><span><i class="mdi mdi-close"></i></span>
                                            </button>
                                            <div class="media" style="padding: 0px;">
                                                <div class="media-body">
                                                <img class="d-block w-100" id="img1" src="" alt="" style="width: 100%;">
                                                </div>
                                            </div>
                                        </div>
                                </div>

                                </div>
                                    
                                    <div id="res_hotel_images">
                                    <?php if($image_url!=""){

                                    $result3 = mysqli_query($con, "SELECT * FROM hotel_images WHERE hotels_idhotels='$hsid'   ");
                                            while ($row = mysqli_fetch_array($result3)) {
                                                $idhotel_images=$row['idhotel_images'];   
                                                $image_url=$row['hotel_url'];
                                                

                                     echo' <div class="col-xl-4 col-lg-4 " style="float: left;" >
                                        <div class="alert alert-info alert-dismissible fade show" style="padding: 0px;">
                                            <div class="media" style="padding: 0px;">
                                                <div class="media-body">
                                                <img class="d-block w-100"  src="'.$image_url.'"  style="width: 100%;">
                                                 <button type="button"  class="btn btn-sm btn-danger " data-target="#hi_delete_model" data-toggle="modal" onclick="hotel_image_delete_for('.$idhotel_images.','.$hsid.');">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';

                                            } 
                                    } 
                                    ?>
                                    </div>

                                 <div class="col-xl-12 col-lg-12 " style="float: left;" >
                                        <?php if($hsid==0){?>
                                        <button type="button"  class="btn btn-sm btn-info " id="btn1" onclick="hotels_create(1,0);return false;">Add Hotel <img src="images/loading.gif" id="btn_loading1" class="loading_img display_none"></button>
                                        <?php }else{?>
                                        <button type="button" id="btn1"  class="btn btn-sm btn-warning " onclick="hotels_create(2,<?php echo $hsid; ?>);return false;">Edit Hotel <img src="images/loading.gif" id="btn_loading1" class="loading_img display_none"></button>
                                        <a class="btn btn-sm btn-primary " href="hotel.9web">Reset</a>
                                        <?php }?> 
                                     </div>    

                                
                             </div>

                            </div>
                     </div>


                   </div> 




                 <div class="col-xl-12"  id="res_hotel" >

                    <?php hotels_list($con); ?>
                    
                 </div>   
                <!-------------------- Welcome   section --------------------------------->   

                    
               
                 

                </div>
            </div>
        </div>



        <!--== class delete model  -->
          <!-- Modal -->
            <div class="modal fade" id="ab_delete_model">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete Hotels</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                        </div>
                        <div class="modal-body">Do you want to delete this?</div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="hotel_delete();return false;">Yes</button>
                                <button type="button" class="btn btn-default light" data-dismiss="modal">No</button>
                                
                            </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="hi_delete_model">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete Hotels Images</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                        </div>
                        <div class="modal-body">Do you want to delete this?</div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="hotel_image_delete();return false;">Yes</button>
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