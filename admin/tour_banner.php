<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>9-WEB Tour Banner</title>
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
        $hwcid=0; $htid=0;
        if(isset($_POST['htid'])){
            $_SESSION['htid']=$_POST['htid'];
            $htid=$_SESSION['htid'];
         }else{
           $htid=$_SESSION['htid'];
         }


        if(isset($_POST['hwcid'])){
            $hwcid=$_POST['hwcid'];
        }

         $package_title=""; $included=""; $excluded="";  $image_url=""; $special_offers="";
                $result = mysqli_query($con, "SELECT * FROM packages WHERE idpackages='$htid'  ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idpackages     = $row['idpackages'];
                                $included   = $row['included'];
                                $excluded   = $row['excluded'];
                                $package_title   = $row['package_title'];
                                $special_offers   = $row['special_offers'];
                                
        }
            $title=""; $description=""; $breakfast=""; $lunch=""; $dinner=""; $title2=""; $description2=""; $green_concept_url="";
          /*  $result = mysqli_query($con, "SELECT * FROM green_concept  ");
                            while ($row = mysqli_fetch_array($result)) {
                                $title=$row['title'];
                                $description=$row['description'];
                                $breakfast=$row['breakfast']; 
                                $lunch=$row['lunch']; 
                                $dinner=$row['dinner'];       
                                $title2=$row['title2']; 
                                $description2=$row['description2']; 
                                $green_concept_url=$row['green_concept_url']; 
                                      
            }*/
         ?>
        <div class="content-body">
            <div class="container-fluid">


                <div class="form-head d-flex mb-0 mb-lg-4 align-items-start">
                    <div class="mr-auto d-none d-lg-block">
                        <h2 class="text-black font-w600 mb-1"><?php echo $package_title;?> Banner Image </h2>
                      
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
                  <div class="col-xl-12 col-lg-12" >

                    <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><?php echo $package_title;?> Banner Image</h4>
                            </div>
                            <div class="card-body">



                                 <div class="col-xl-6 col-lg-6"  style="float:left;">

                                   <div class="card-header">
                                    <h4 class="card-title"><?php echo $package_title;?> Banner Image</h4>
                                   </div> 

                                 

                                  <h5 style="color:red;margin-top: 20px;">Best image resolution size (Width : 1900) and (Height : 450px)</h5> 


                                 <div class="alert alert-success left-icon-big alert-dismissible fade show col-xl-4 col-lg-4" style="float: left;">
                                            
                                    <div class="media"  ondrop="tour_banner_explorer1(event)" ondragover="return false">
                                        <div class="alert-left-icon-big">
                                                <!--    <span><i class="mdi mdi-check-circle-outline"></i></span>-->
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-1 mb-2" style="text-align: center;">Drop file here or</h5>
                                            <div class="btn btn-sm btn-info " onclick="tour_banner_explorer2();">Choose file
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





                 <div class="col-xl-12"  id="res_tour_package_ig">

                    <?php tour_package_banner($con,$htid); ?>
                    
                 </div>   
                <!-------------------- Welcome   section --------------------------------->   

                    

                 

                </div>
            </div>
        </div>



        <!--== class delete model  -->
          <!-- Modal -->
            <div class="modal fade" id="tpgi_delete_model">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete Tour Pakage  Gallery Image</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                        </div>
                        <div class="modal-body">Do you want to delete this?</div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="tour_package_image_gallery_delete();return false;">Yes</button>
                                <button type="button" class="btn btn-default light" data-dismiss="modal">No</button>
                                
                            </div>
                    </div>
                </div>
            </div>
        <!-- == class delete model end -->
        <!--**********************************-->

          <!--== class delete model  -->
          <!-- Modal -->
            <div class="modal fade" id="tpgi_img_kw_model">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tour Slider Image Keywords</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                        </div>
                        <div class="modal-body">
                             <div class="form-group">
                                <label>Image Keywords</label>
                                <input type="text" class="form-control input-rounded " value="<"  placeholder="" id="img_alt2">
                            </div>
                        </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="tour_package_image_gallery_kw_edit();return false;">Edit</button>
                                <button type="button" class="btn btn-default light" data-dismiss="modal">No</button>
                                
                            </div>
                    </div>
                </div>
            </div>
        <!-- == class delete model end -->    
           <!--  Content body end
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
             $('.content3').richText();
        });

    </script>
      <!-- text editor-->
    <!-- text editor-->

    
    
   


    


</body>


</html>