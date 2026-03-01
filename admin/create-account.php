<!DOCTYPE html>
<html lang="en" class="h-100">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>9-LMS</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/toastr/css/toastr.min.css">
    <!-- Custom Stylesheet -->
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">

    <script type="text/javascript" src="jsb/student.js"></script>
    <script type="text/javascript" src="jsb/student_validation.js"></script>
    <script type="text/javascript" src="jsb/alert.js"></script>
    <?php include './model/DB.php';?>
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Register</h4>
                                   
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Student Name</strong></label>
                                            <input type="text" class="form-control" placeholder="Your Name" id="sname">
                                        </div>
                                         <div class="form-group">
                                            <label class="mb-1"><strong>Address</strong></label>
                                            <input type="text" class="form-control" placeholder="Your Address" id="address">
                                        </div>
                                         <div class="form-group">
                                            <label class="mb-1"><strong>City</strong></label>
                                            <select class="form-control" id="city">
                                                <?php 
                                                 $result = mysqli_query($con,"SELECT * FROM citys  ");
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        $idcitys = $row['idcitys'];
                                                        $city = $row['city'];
                                                        echo ' <option value="'.$idcitys.'">'.$city.'</option>';
                                                    }
                                                 ?>
                                               
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label class="mb-1"><strong>Contact No</strong></label>
                                            <input type="number" class="form-control" placeholder="Ex: 0711234567" id="contact_no">
                                        </div>
                                         <div class="form-group">
                                            <label class="mb-1"><strong>Institute</strong></label>
                                            <select class="form-control" id="institute" >
                                               <?php 
                                                 $result = mysqli_query($con,"SELECT * FROM institute  ");
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        $idinstitute = $row['idinstitute'];
                                                        $ins_name = $row['ins_name'];
                                                        $city = $row['city'];
                                                        echo ' <option value="'.$idinstitute.'">'.$ins_name.' - '.$city.'</option>';
                                                    }
                                                 ?>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label class="mb-1"><strong>Grade</strong></label>
                                            <select class="form-control" id="grade" onchange="select_exam_year();return false;">
                                                <option>Please select the grade</option>
                                                 <?php 
                                                 $result = mysqli_query($con,"SELECT * FROM grade  ");
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        $idgrade = $row['idgrade'];
                                                        $grade_name = $row['grade_name'];
                                                        $city = $row['city'];
                                                        echo ' <option value="'.$idgrade.'">'.$grade_name.'</option>';
                                                    }
                                                 ?>
                                            </select>
                                        </div>
                                        
                                         <div class="form-group"  id="res_exam_year">
                                            <label class="mb-1"><strong>Exam Year</strong></label>
                                            <select class="form-control"  id="exam_year" >
                                                <option>Please select the Exam year</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" id="email" placeholder="name@gmail.com">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control"  id="password" placeholder="Your password">
                                        </div>

                                        <div class="form-group">
                                            <label class="mb-1"><strong>Confirm Password</strong></label>
                                            <input type="password" class="form-control" placeholder="Confirm password" id="cpassword">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="button"  class="btn btn-primary btn-block" onclick="create_account();return false;">Sign me up</button>
                                        </div>
                                  
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="login.9edu">Sign in</a></p>
                                    </div>
                                  

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="vendor/global/global.min.js"></script>
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/deznav-init.js"></script>

  <!-- Toastr -->
    <script src="vendor/toastr/js/toastr.min.js"></script>

    <!-- All init script -->
    <script src="js/plugins-init/toastr-init.js"></script>

</body>


</html>