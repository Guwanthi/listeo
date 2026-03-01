
<!DOCTYPE html>
<html lang="en" class="h-100">

<?php 
function ___page_setup__(){
    $page1 = (explode('/', $_SERVER["REQUEST_URI"]));
     
     if($_SERVER['HTTP_HOST']=="localhost"){
         echo 'http://localhost/tara/admin/'.$page1[2];
    
     }else{
        echo 'https://taranew1.9oo9.info/'.$page1[1];    
     }
   // print_r($page1);

}

?>


<head>
    <base href="<?php ___page_setup__()?>" />   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>9- Web</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="css/style.css" rel="stylesheet">
    
</head>


<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-5">
                    <div class="form-input-content text-center error-page">
                        <h1 class="error-text  font-weight-bold">403</h1>
                        <h4><i class="fa fa-times-circle text-danger"></i> Forbidden Error!</h4>
                        <p>You do not have permission to view this resource.</p>
						<div>
                            <a class="btn btn-primary" href="../home.tara">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="vendor/global/global.min.js"></script>
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/deznav-init.js"></script>


</html>