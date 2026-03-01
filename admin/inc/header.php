  <?php include './model/DB.php';  include './model/function.php'?>
  <?php  session_start(); 
  	date_default_timezone_set('Asia/Colombo');
	$date=date("Y-F-d D");


  $uid=0;
  if(isset($_SESSION['uid']) && !isset($_SESSION['vid'])){
  	$uid=$_SESSION['uid'];
  }else{
  	  header("location:./login.9web");
  }


  $u_name=""; $u_contact_no=""; $u_address=""; $u_email="";
  $result = mysqli_query($con, "SELECT * FROM user  WHERE   	iduser='$uid' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $u_name   = $row['name'];
                                $u_contact_no    = $row['contact_no'];
                                $u_email   = $row['email'];
  }


  ?>


  <style type="text/css">
  	.loading_img{
  		width: 30px;
  	}

  	.display_block{
  		display: block;
  	}
  	.display_none{
  		display: none;
  	}
  </style>


<div class="nav-header">
            <a href="home.9web" class="brand-logo">
               
                <img class="brand-title" src="images/logo.jpg" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>

 <div class="header" >
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                           
                        </div>

                        <ul class="navbar-nav header-right">
							
                          
							
							
							<li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
									<div class="header-info">
										<span><?php echo $u_name;?></span>
									</div>
                                    <img src="images/profile/pic1.jpg" width="20" alt=""/>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#!" class="dropdown-item ai-icon" data-target="#user_model" data-toggle="modal" >
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                   
                                    <a href="control/log_out.php" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>



        <!--== class delete model  -->
          <!-- Modal -->
            <div class="modal fade" id="user_model">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Profile</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                        </div>
                        <div class="modal-body">
                            

                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control input-rounded " value="<?php echo $u_name; ?>"  placeholder="" id="u_name">
                            </div>

                            <div class="form-group">
                                <label>Contact No</label>
                                <input type="text" class="form-control input-rounded " value="<?php echo $u_contact_no; ?>"  placeholder="" id="u_contact">
                            </div>

                          

                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control input-rounded " value="<?php echo $u_email;?>"   id="u_email">
                            </div>

                             <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="profile_data_edit();return false;">Edit Profile</button>

                            <hr/>

                          

                             <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control input-rounded " value=""   id="u_un">
                            </div>

                            <div class="form-group">
                                <label>Last Password</label>
                                <input type="password" class="form-control input-rounded " value=""   id="u_lpw">
                            </div>

                            <div class="form-group">
                                <label>New Password</label>
                                <input type="password" class="form-control input-rounded " value=""  id="u_npw">
                            </div>

                             <button type="button" class="btn btn-success btn-sm"  onclick="profile_login_edit();return false;">Change Login</button>


                        </div>
                            <div class="modal-footer">
                               
                                <button type="button" class="btn btn-default light btn-sm" data-dismiss="modal">Cancle</button>
                                
                            </div>
                    </div>
                </div>
            </div>
        <!-- == class delete model end -->



