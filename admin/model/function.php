<?php




function ___page_setup__(){
    $page1 = (explode('/', $_SERVER["REQUEST_URI"]));
     
     if($_SERVER['HTTP_HOST']=="localhost"){
         echo 'http://localhost/listeo/admin/'.$page1[2];
    
     }else{
        echo 'http://demo.cerfel.com/'.$page1[1];    
     }
   // print_r($page1);

}




$enkey ="ahajhajja8878gg66aguun";

function encrypt($plaintext, $enkey){

    $td = mcrypt_module_open('cast-256', '', 'ecb', '');
    $iv = mcrypt_create_iv (mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
    mcrypt_generic_init($td, $enkey, $iv);
    $encrypted_data = mcrypt_generic($td, $plaintext);
    mcrypt_generic_deinit($td);
    mcrypt_module_close($td);
    $encoded_64 = base64_encode($encrypted_data);
    return trim($encoded_64);

}

function decrypt($crypttext, $enkey){

    $decoded_64=base64_decode($crypttext);
    $td = mcrypt_module_open('cast-256', '', 'ecb', '');
    $iv = mcrypt_create_iv (mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
    mcrypt_generic_init($td, $enkey, $iv);
    $decrypted_data = mdecrypt_generic($td, $decoded_64);
    mcrypt_generic_deinit($td);
    mcrypt_module_close($td);
    return trim($decrypted_data);
}




function my_encrypt($val){
  $enkey ="ahajhajja8878gg66aguun";
  $crypted_v1 = openssl_encrypt($val,"AES-128-ECB",$enkey);
  $crypted_v2=str_replace("/","100",$crypted_v1); 
  $crypted_v3=str_replace("==","A5000",$crypted_v2);
  $crypted_v=str_replace("+","B5000",$crypted_v3);  
  return $crypted_v;
}

function my_encrypt2($val){
  $enkey ="ahajhajja8878gg66aguun";
  $crypted_v = openssl_encrypt($val,"AES-128-ECB",$enkey);
 // $crypted_v2=str_replace("/","100",$crypted_v1); 
  //$crypted_v3=str_replace("==","A5000",$crypted_v2);
  //$crypted_v=str_replace("+","B5000",$crypted_v1);  
  return $crypted_v;
}


function my_decrypt($val){
  $enkey ="ahajhajja8878gg66aguun";
  $crypted_v1=str_replace("100","/",$val); 
  $crypted_v2=str_replace("A5000","==",$crypted_v1);
  $crypted_v3=str_replace("B5000","+",$crypted_v2);  
  $crypted_v = openssl_decrypt($crypted_v3,"AES-128-ECB",$enkey);

  return $crypted_v;
}
//echo $crypted_password = encrypt("my kade", $salt);
// decrypt
//echo decrypt($crypted_password, $salt);


function text_replace($str){
    $phrase  = $str;
     $val1 = ["[plus]", "[ds]", "[and]","[up]"];
     $val2   = ["+", "$", "&","'"];
    

    $newPhrase = str_replace($val1, $val2, $phrase);

    return $newPhrase;
}


function encryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    return( $qEncoded );
 }
 function decryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    return( $qDecoded );
}

function  session_check($val){
    if($val==1){  
         if(!isset( $_SESSION["cid"] ) ){
              
           header("location:./login.prox");    
         }
    }else if($val==2){

         if(!isset( $_SESSION["vid"] ) &&  !isset( $_SESSION["suid"] ) ){
            header("location:./login.prox");    
         }

    }else if($val==3){

         if(!isset( $_SESSION["admin_id"] ) ){
           header("location:./admin-cpanel");    
         }
    }  
}


function image_slider_view($con){
    echo '
                                  <div id="main_img_slider" class="carousel slide " data-ride="carousel">
                                    
                                    <div class="carousel-inner">
                                    ';

     $count=0;                                   
     $result = mysqli_query($con, "SELECT * FROM slider  WHERE   img_video_statues  ='1' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idslider   = $row['idslider'];
                                $slider_url=$row['url'];
                                $count++;
                                $active="";
                                if($count==1){
                                  $active='active';
                                }
          
          echo '
                                      <div class="carousel-item '. $active.'">
                                            <img class="d-block w-100" src="'.$slider_url.'" alt="">
                                             <div class="carousel-caption d-none d-md-block">
                                                  

                                              <div class="col-xl-12 col-lg-12" >


                                                <!--<form action="home.9web" method="post" style="float: left;margin-left:10px">
                                                    <input type="hidden" value="'.$idslider.'" name="hsid">
                                                    <input type="submit" value="Edit" name="" class="btn btn-sm btn-warning ">
                                                </form>-->

                                                <button type="button"  class="btn btn-sm btn-warning " data-target="#image_slider_delete_model" data-toggle="modal" onclick="image_slider_delete_for('.$idslider.');" style="float: left;margin-left:10px">Delete</button>


                                              </div>

                                             </div>
                                        </div>
                                        
          ';
        } 

    echo ' </div><a class="carousel-control-prev" href="#main_img_slider" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span
                                            class="sr-only">Previous</span> </a><a class="carousel-control-next" href="#main_img_slider" data-slide="next"><span
                                            class="carousel-control-next-icon"></span>
                                        <span class="sr-only">Next</span></a>
                                </div>';
 /* $video_url=""; $idslider=0;
  $result = mysqli_query($con, "SELECT * FROM slider  WHERE   img_video_statues  ='2' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idslider   = $row['idslider'];
                                $video_url=$row['url'];
   }
   $str=$video_url;
   $str2=explode("/",$str);
   $str3=explode("watch?v=",$str2[3]);
   //$newarraynama = substr($str3[1], 0, -4);
  
   echo '
   

   <div style="display:none;" id="video_slider">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/'.$str3[1].'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


   <button type="button"  class="btn btn-sm btn-success " onclick="image_slider_type_change(2);return false;" style="float: left;margin-left:10px">Set as main slider</button>   
    
  <button type="button"  class="btn btn-sm btn-warning " data-target="#image_slider_delete_model" data-toggle="modal" onclick="image_slider_delete_for('.$idslider.');" style="float: left;margin-left:10px">Delete</button>

  </div>
   ';
     */                               
   
}



function about_services($con){
  

     $count=0;                                   
     $result = mysqli_query($con, "SELECT * FROM services   ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idservices     = $row['idservices'];
                                $services_title   = $row['services_title'];
                                $image_url=$row['services_url'];
                                $count++;
                                
          
          echo '      <div class="col-xl-4"  style="float: left;"  >
                        <div class="card mb-12">
                            <img class="card-img-top img-fluid" src="'.$image_url.'" alt="">
                            <div class="card-header">
                                <h5 class="card-title">'.$services_title.'</h5>
                            </div>
                            <div class="card-body">
                                

                                <form action="about.9web" method="post" style="float: left;margin-left:10px">
                                      <input type="hidden" value="'.$idservices.'" name="hsid">
                                      <input type="submit" value="Edit" name="" class="btn btn-sm btn-warning ">
                              </form>

                              <button type="button"  class="btn btn-sm btn-warning " data-target="#ab_delete_model" data-toggle="modal" onclick="services_type_delete_for('.$idservices.');" style="float: left;margin-left:10px">Delete</button>

                            </div>

                               

                        </div>
                    </div>
          ';
        } 

   
}



function about_client_images($con){
  

     $count=0;                                   
     $result = mysqli_query($con, "SELECT * FROM clients   ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idclients     = $row['idclients'];
                                $image_url=$row['client_url'];
                                $img_alt=$row['img_alt']; 
                                $count++;
                                
          
          echo '      <div class="col-xl-4"  style="float: left;"  >
                        <div class="card mb-12">
                            <img class="card-img-top img-fluid" src="'.$image_url.'" alt="">
                            <h5>Keywords : '.$img_alt.'</h5>
                            <div class="card-body">

                              <button type="button" name="'.$img_alt.'"  class="btn btn-sm btn-warning " data-target="#clients_img_kw_model" data-toggle="modal" onclick="client_images_kw_edit_for('.$idclients  .',this.name);" style="float: left;margin-left:10px">Edit Alt</button>
                               
                              <button type="button"  class="btn btn-sm btn-warning " data-target="#ab_delete_model" data-toggle="modal" onclick="client_images_delete_for('.$idclients  .');" style="float: left;margin-left:10px">Delete</button>

                            </div>

                               

                        </div>
                    </div>
          ';
        } 

   
}


function hotels_list($con){

 
  

  $result = mysqli_query($con, "SELECT * FROM hotel_type   ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idhotel_type     = $row['idhotel_type'];
                                $htype     = $row['htype'];
    echo '<div class="col-xl-12"  style="float: left;"  ><h4>'.$htype.'</h4></div>';
           $hcount=0;                         
     $result2 = mysqli_query($con, "SELECT * FROM hotels WHERE hotel_type_idhotel_type='$idhotel_type'   ");
                            while ($row = mysqli_fetch_array($result2)) {
                                $idhotels     = $row['idhotels'];
                                $hotel_description   = $row['hotel_description'];
                                $image_url2=$row['hotel_url'];
                                 $hcount++; 
                                
                                $image_url="";
          $result3 = mysqli_query($con, "SELECT * FROM hotel_images WHERE hotels_idhotels='$idhotels'   ");
                            while ($row = mysqli_fetch_array($result3)) {
                                $image_url=$row['hotel_url'];
          }    
            $hsid= "main_img_slider".$hcount;
                                        
              
          echo '      <div class="col-xl-4"  style="float: left;"  >
                        <div class="card mb-12">
                           <!--<img class="card-img-top img-fluid" src="'.$image_url2.'" alt="">-->
                           

                            <div id="'.$hsid.'" class="carousel slide " data-ride="carousel">
                                    
                                    <div class="carousel-inner">
                            ';
                            $cut=0;
                            $result3 = mysqli_query($con, "SELECT * FROM hotel_images WHERE hotels_idhotels='$idhotels'   ");
                            while ($row = mysqli_fetch_array($result3)) {
                                $image_url=$row['hotel_url'];
                                $cut++;
                                $active="";
                                if($cut==1){
                                    $active="active";
                                }
                                echo '
                                   <div class="carousel-item '. $active.'">
                                            <img class="d-block w-100" src="'.$image_url.'" alt="">
                                          
                                </div>';
                            
                            }     

                          echo '
                            </div><a class="carousel-control-prev" href="#'.$hsid.'" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span
                                            class="sr-only">Previous</span> </a><a class="carousel-control-next" href="#'.$hsid.'" data-slide="next"><span
                                            class="carousel-control-next-icon"></span>
                                        <span class="sr-only">Next</span></a>
                                </div>';



                          echo'  <div class="card-header" style="height: 100px;">
                                <h5 class="card-title">'.$hotel_description.'</h5>
                                <h6>'.$htype.'</h6>
                            </div>
                            <div class="card-body">
                                

                                <form action="hotel.9web" method="post" style="float: left;margin-left:10px">
                                      <input type="hidden" value="'.$idhotels.'" name="hsid">
                                      <input type="submit" value="Edit" name="" class="btn btn-sm btn-warning ">
                              </form>

                              <button type="button"  class="btn btn-sm btn-warning " data-target="#ab_delete_model" data-toggle="modal" onclick="hotel_delete_for('.$idhotels.');" style="float: left;margin-left:10px">Delete</button>

                            </div>

                               

                        </div>
                    </div>
          ';
        } 
    }
   
}

function events_list($con){
  

     $result = mysqli_query($con, "SELECT * FROM event    ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idevent     = $row['idevent'];
                                $event_title   = $row['event_title'];
                                $event_date   = $row['event_date'];
                                $description   = $row['description'];
                                $image_url=$row['event_url'];
                                $is_special=$row['is_special'];
                                $sty="";
                                if($is_special==1){
                                     $sty=" background: #eff0d8";
                                }
                               
                               
          
          echo '      <div class="col-xl-4"  style="float: left;"  >
                        <div class="card mb-12" style="'.$sty.'">
                            <img class="card-img-top img-fluid" src="'.$image_url.'" alt="">
                            <div class="card-header">
                                <h5 class="card-title">'.$event_title.'</h5>
                                <h6>'.$event_date.'</h6>
                            </div>
                            <div class="card-body">
                                <div style="height: 250px;overflow: auto;"><p>'.$description.'</p></div>

                                <form action="events.9web" method="post" style="float: left;margin-left:10px">
                                      <input type="hidden" value="'.$idevent.'" name="hsid">
                                      <input type="submit" value="Edit" name="" class="btn btn-sm btn-warning ">
                              </form>

                              <button type="button"  class="btn btn-sm btn-warning " data-target="#ab_delete_model" data-toggle="modal" onclick="event_delete_for('.$idevent.');" style="float: left;margin-left:10px">Delete</button>

                               <button type="button"  class="btn btn-sm btn-info "   onclick="special_event('.$idevent.');" style="float: left;margin-left:10px">Special Event</button>

                            </div>

                               

                        </div>
                    </div>
          ';
        } 
    
   
}


function destination_list($con){
  

     $result = mysqli_query($con, "SELECT * FROM destinations d INNER JOIN country c ON d.country_idcountry = c.idcountry    ");
                            while ($row = mysqli_fetch_array($result)) {
                                $iddestinations     = $row['iddestinations'];
                                $destinations_title   = $row['destinations_title'];
                                $description   = $row['description'];
                                $country_idcountry   = $row['country_idcountry'];
                                $cname   = $row['cname'];
                                $image_url=$row['destinations_url'];
                               
                               
                               
          
          echo '      <div class="col-xl-4"  style="float: left;"  >
                        <div class="card mb-12" >
                            <img class="card-img-top img-fluid" src="'.$image_url.'" alt="">
                            <div class="card-header">
                                <h5 class="card-title">'.$destinations_title.'</h5>
                            </div>
                            <div class="card-body">
                                <div style="height: 300px;overflow: auto;">
                                <p>'.$description.'</p>
                                </div>

                                <form action="destinations.9web" method="post" style="float: left;margin-left:10px">
                                      <input type="hidden" value="'.$iddestinations.'" name="hsid">
                                      <input type="submit" value="Edit" name="" class="btn btn-sm btn-warning ">
                              </form>

                              <button type="button"  class="btn btn-sm btn-warning " data-target="#ab_delete_model" data-toggle="modal" onclick="destinations_delete_for('.$iddestinations.');" style="float: left;margin-left:10px">Delete</button>

                          

                            </div>

                               

                        </div>
                    </div>
          ';
        } 
    
   
}

function tour_package_list($con){

    $result = mysqli_query($con, "SELECT * FROM package_type  ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idpackage_type     = $row['idpackage_type'];
                                $ptype   = $row['ptype'];
    echo '<div class="col-xl-12"  style="float: left;"  ><h4>'. $ptype.'</h4><div>';

    $result2 = mysqli_query($con, "SELECT * FROM packages WHERE package_type_idpackage_type='$idpackage_type'  ");
                            while ($row = mysqli_fetch_array($result2)) {
                                $idpackages     = $row['idpackages'];
                                $package_title   = $row['package_title'];
                                $days   = $row['days'];
                                $description   = $row['package_description'];
                                $package_type_idpackage_type   = $row['package_type_idpackage_type'];
                                $image_url=$row['package_url'];
                               
                               
                               
          
          echo '      <div class="col-xl-4"  style="float: left;"  >
                        <div class="card mb-12" >
                            <img class="card-img-top img-fluid" src="'.$image_url.'" alt="">
                            <div class="card-header">
                                <h5 class="card-title">'.$package_title.'</h5>
                                <h6>'.$days.'</h6>
                            </div>
                            <div class="card-body">
                                <div style="height: 300px;overflow: auto;">
                                <p>'.$description.'</p>
                                </div>

                                <form action="tours.9web" method="post" style="float: left;margin-left:10px">
                                      <input type="hidden" value="'.$idpackages.'" name="hsid">
                                      <input type="submit" value="Edit" name="" class="btn btn-sm btn-warning ">
                              </form>

                              <button type="button"  class="btn btn-sm btn-warning " data-target="#ab_delete_model" data-toggle="modal" onclick="tour_package_delete_for('.$idpackages.');" style="float: left;margin-left:10px">Delete</button>

                              <form action="tours-itinerary.9web" method="post" style="float: left;margin-left:10px">
                                      <input type="hidden" value="'.$idpackages.'" name="htid">
                                      <input type="submit" value="Tours Itinerary" name="" class="btn btn-sm btn-success ">
                              </form>

                               <form action="tour-details.9web" method="post" style="float: left;margin-left:10px">
                                      <input type="hidden" value="'.$idpackages.'" name="htid">
                                      <input type="submit" value="Tours Details" name="" class="btn btn-sm btn-success ">
                              </form>

                              <form action="tour_banner.9web" method="post" style="float: left;margin-left:10px">
                                      <input type="hidden" value="'.$idpackages.'" name="htid">
                                      <input type="submit" value="Tour Banner" name="" class="btn btn-sm btn-success ">
                              </form>
                          

                            </div>

                               

                        </div>
                    </div>
          ';
        } 
    
    }
}

function tour_package_itinerary_list($con,$htid){

   

    $result = mysqli_query($con, "SELECT * FROM itinerary WHERE packages_idpackages='$htid'  ");
                            while ($row = mysqli_fetch_array($result)) {
                                $iditinerary     = $row['iditinerary'];
                                $place   = $row['place'];
                                $day   = $row['day'];
                                $description   = $row['itinerary_description'];
                                $image_url=$row['itinerary_url'];
                               
                               
                               
          
          echo '      <div class="col-xl-4"  style="float: left;"  >
                        <div class="card mb-12" >
                            <img class="card-img-top img-fluid" src="'.$image_url.'" alt="">
                            <div class="card-header">
                                <h5 class="card-title">'.$place.'</h5>
                                <h6>'.$day.'</h6>
                            </div>
                            <div class="card-body">
                                <div style="height: 250px;overflow: auto;"><p>'.$description.'</p></div>

                                <form action="tours-itinerary.9web" method="post" style="float: left;margin-left:10px">
                                      <input type="hidden" value="'.$iditinerary.'" name="hsid">
                                      <input type="submit" value="Edit" name="" class="btn btn-sm btn-warning ">
                              </form>

                              <button type="button"  class="btn btn-sm btn-warning " data-target="#ab_delete_model" data-toggle="modal" onclick="itinerary_delete_for('.$iditinerary.');" style="float: left;margin-left:10px">Delete</button>

                             
                          

                            </div>

                               

                        </div>
                    </div>
          ';
        } 
    
  
}



function tour_package_image_gallery($con,$htid){

   

    $result = mysqli_query($con, "SELECT * FROM package_slider WHERE packages_idpackages='$htid'  ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idpackage_slider     = $row['idpackage_slider'];
                                $image_url=$row['pslider_url'];
                                $ps_img_alt=$row['ps_img_alt'];
                               
                               
          
          echo '      <div class="col-xl-4"  style="float: left;"  >
                        <div class="card mb-12" >
                            <img class="card-img-top img-fluid" src="'.$image_url.'" alt="">
                            <h5>keywords: '.$ps_img_alt.'</h5>
                            <div class="card-body">

                               <button type="button" name="'.$ps_img_alt.'"  class="btn btn-sm btn-warning " data-target="#tpgi_img_kw_model" data-toggle="modal" onclick="tour_package_image_gallery_kw_edit_for('.$idpackage_slider  .',this.name);" style="float: left;margin-left:10px">Edit Alt</button>

                               <button type="button"  class="btn btn-sm btn-warning " data-target="#tpgi_delete_model" data-toggle="modal" onclick="tour_package_image_gallery_delete_for('.$idpackage_slider.');" style="float: left;margin-left:10px">Delete</button>
                                </div>
                        </div>
                    </div>
          ';
        } 
    
  
}


function tour_package_banner($con,$htid){

   

    $result = mysqli_query($con, "SELECT * FROM packages WHERE  idpackages='$htid'  ");
                            while ($row = mysqli_fetch_array($result)) {
                                $image_url=$row['banner_url'];
                             
          echo '      <div class="col-xl-12"  style="float: left;"  >
                        <div class="card mb-12" >
                            <img class="card-img-top img-fluid" src="'.$image_url.'" alt="">
                          
                        </div>
                    </div>
          ';
        } 
    
  
}


function testimonial_list($con){
  

     $result = mysqli_query($con, "SELECT * FROM testimonial     ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idtestimonial       = $row['idtestimonial'];
                                $name   = $row['name'];
                                $email   = $row['email'];
                                $country   = $row['country'];
                                $review   = $row['review'];
                                $customer_url   = $row['customer_url'];
                                $is_display=$row['is_display'];
                               
                               
                               
          
          echo '      <div class="col-xl-4"  style="float: left;"  >
                        <div class="card mb-12" >
                            <div class="card-header">
                                <h5 class="card-title">'.$name.' - '.$country.'</h5>
                                 <img src="'.$customer_url.'" style="width: 70px;">
                            </div>
                            <div class="card-body">
                                <div style="height: 300px;overflow: auto;">
                                <p>'.$review.'</p>
                                </div>

                              <form action="testimonial.9web" method="post" style="float: left;margin-left:10px">
                                      <input type="hidden" value="'.$idtestimonial.'" name="htid">
                                      <input type="submit" value="Edit" name="" class="btn btn-sm btn-warning ">
                              </form>

                              <button type="button"  class="btn btn-sm btn-danger " data-target="#ab_delete_model" data-toggle="modal" onclick="client_review_delete_for('.$idtestimonial.');" style="float: left;margin-left:10px">Delete</button>

                                ';
                                 if($is_display==0){
                                  echo ' <button type="button"  class="btn btn-sm btn-success " onclick="testimonial_display_hide('.$idtestimonial.',1);" style="float: left;margin-left:10px">Display</button>';
                                }else{
                                  echo ' <button type="button"  class="btn btn-sm btn-warning " onclick="testimonial_display_hide('.$idtestimonial.',0);" style="float: left;margin-left:10px">Hide</button>';
                                }
                             

                          
                          echo '
                            </div>

                               

                        </div>
                    </div>
          ';
        } 
    
   
}










function blog_list($con){
  

     $count=0;                                   
     $result = mysqli_query($con, "SELECT * FROM blog   ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idblog     = $row['idblog'];
                                $title   = $row['title'];
                                $description=$row['designation'];
                                $image_url=$row['blog_url'];
                                $img_alt=$row['img_alt'];
                                $count++;
                                
          
          echo '      <div class="col-xl-6"  style="float: left;"  >
                        <div class="card mb-12">
                            <img class="card-img-top img-fluid" src="'.$image_url.'" alt="">
                            <div class="card-header">
                                <h5 class="card-title">'.$title.'</h5>
                                <h6>Keywords: '.$img_alt.'</h6>
                            </div>
                            <div class="card-body">
                                <p ><div class="card-text" >'.$description.'</div></p>

                                  <form action="blog_contents.9web" method="post" style="float: left;margin-left:10px">
                                      <input type="hidden" value="'.$idblog .'" name="hbid">
                                      <input type="submit" value="Add More" name="" class="btn btn-sm btn-info ">
                              </form>

                                <form action="blog.9web" method="post" style="float: left;margin-left:10px">
                                      <input type="hidden" value="'.$idblog .'" name="hbid">
                                      <input type="submit" value="Edit" name="" class="btn btn-sm btn-warning ">
                              </form>

                              <button type="button"  class="btn btn-sm btn-warning " data-target="#blog_delete_model" data-toggle="modal" onclick="blog_delete_for('.$idblog  .');" style="float: left;margin-left:10px">Delete</button>

                            </div>

                               

                        </div>
                    </div>
          ';
        } 

   
}



function blog_content_list($con,$bid){
  

     $count=0;                                   
     $result = mysqli_query($con, "SELECT * FROM blog_details   ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idblog     = $row['idblog_details'];
                                $title   = $row['section_title'];
                                $description=$row['details'];
                                $image_url=$row['bd_url'];
                                $img_alt=$row['bc_img_alt'];
                                $count++;
                                
          
          echo '      <div class="col-xl-6"  style="float: left;"  >
                        <div class="card mb-12">
                            <img class="card-img-top img-fluid" src="'.$image_url.'" alt="">
                            <div class="card-header">
                                <h5 class="card-title">'.$title.'</h5>
                                <h6>Keywords: '.$img_alt.'</h6>
                            </div>
                            <div class="card-body">
                                <p ><div class="card-text" >'.$description.'</div></p>

                                 

                                <form action="blog_contents.9web" method="post" style="float: left;margin-left:10px">
                                      <input type="hidden" value="'.$idblog .'" name="hbcid">
                                      <input type="submit" value="Edit" name="" class="btn btn-sm btn-warning ">
                              </form>

                              <button type="button"  class="btn btn-sm btn-warning " data-target="#blog_delete_model" data-toggle="modal" onclick="blog_content_delete_for('.$idblog  .');" style="float: left;margin-left:10px">Delete</button>

                            </div>

                               

                        </div>
                    </div>
          ';
        } 

   
}


function gallery_list($con){
  
  $result = mysqli_query($con, "SELECT * FROM gallery_type   ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idgallery_type     = $row['idgallery_type'];
                                $type   = $row['type'];
          echo '<div class="col-xl-12"  style="height: 50px;float: left;">
                      <h4>'.$type.'</h4>
                  </div> ';                    
                                 
     $result2 = mysqli_query($con, "SELECT * FROM gallery WHERE gallery_type_idgallery_type='$idgallery_type'   ");
                            while ($row = mysqli_fetch_array($result2)) {
                                $idgallery     = $row['idgallery'];
                                $image_url   = $row['image_url'];
                                $img_alt   = $row['img_alt'];
                                
          
          echo '      <div class="col-xl-3"  style="float: left;"  >
                        <div class="card mb-12">
                            <img class="card-img-top img-fluid" src="'.$image_url.'" alt="">
                            <h5>Keywords: '.$img_alt.'</h5>
                            <div class="card-body">

                              <button type="button" name="'.$img_alt.'"  class="btn btn-sm btn-warning " data-target="#gallery_img_kw_model" data-toggle="modal" onclick="gallery_img_kw_edit_for('.$idgallery  .',this.name);" style="float: left;margin-left:10px">Edit Alt</button>
                                
                              <button type="button"  class="btn btn-sm btn-danger " data-target="#gallery_delete_model" data-toggle="modal" onclick="gallery_delete_for('.$idgallery  .');" style="float: left;margin-left:10px">Delete</button>

                            </div>

                               

                        </div>
                    </div>
          ';
        } 

    }

   
}


function video_gallery_list($con){
  
              
                                 
     $result2 = mysqli_query($con, "SELECT * FROM video_gallery   ");
                            while ($row = mysqli_fetch_array($result2)) {
                                $vurl     = $row['vurl'];
                                $id_video_gallery   = $row['id_video_gallery'];
                                
                                
          
          echo '      <div class="col-xl-4"  style="float: left;"  >
                        <div class="card mb-12">
                            <iframe style="width:100%;" height="315" src="https://www.youtube.com/embed/'.$vurl.'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                           
                            <div class="card-body">

                               <form action="video_gallery.9web" method="post" style="float: left;margin-left:10px">
                                      <input type="hidden" value="'.$id_video_gallery .'" name="hvid">
                                      <input type="submit" value="Edit" name="" class="btn btn-sm btn-warning ">
                              </form>
                                
                              <button type="button"  class="btn btn-sm btn-danger " data-target="#gallery_delete_model" data-toggle="modal" onclick="video_gallery_delete_for('.$id_video_gallery  .');" style="float: left;margin-left:10px">Delete</button>

                            </div>

                               

                        </div>
                    </div>
          ';
        } 

 
   
}



function place_list($con){
  

     $count=0;                                   
     $result = mysqli_query($con, "SELECT * FROM things_to_do   ");
                            while ($row = mysqli_fetch_array($result)) {
                                $id_things_to_do     = $row['id_things_to_do'];
                                $title   = $row['title'];
                                $description=$row['description'];
                                $img_alt=$row['img_alt'];
                                $image_url=$row['img_url'];
                                
                               
          
          echo '      <div class="col-xl-4"  style="float: left;"  >
                        <div class="card mb-12">
                            <img class="card-img-top img-fluid" src="'.$image_url.'" alt="">
                            <h5>Keywords : '.$img_alt.'</h5>
                            <div class="card-header" style="height:100px;">
                                <h5 class="card-title">'.$title.'</h5>
                            </div>
                            <div class="card-body">
                                <div  style="height:250px;overflow: auto;">
                                <p class="card-text">'.$description.'</p>
                                
                                </div>

                               

                                <form action="things-to-do.9web" method="post" style="float: left;margin-left:10px">
                                      <input type="hidden" value="'.$id_things_to_do .'" name="httdid">
                                      <input type="submit" value="Edit" name="" class="btn btn-sm btn-warning ">
                              </form>

                              <button type="button"  class="btn btn-sm btn-warning " data-target="#place_delete_model" data-toggle="modal" onclick="place_delete_for('.$id_things_to_do  .');" style="float: left;margin-left:10px">Delete</button>

                            </div>

                               

                        </div>
                    </div>
          ';
        } 

   
}



function place_include_list($con,$pid){
      $place_name="";
     $result = mysqli_query($con, "SELECT * FROM best_place  WHERE idbest_place='$pid' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $place_name   = $row['place_name'];
      }

    echo '<h4>'.$place_name.'</h4>
    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th class="width80"><strong>#</strong></th>
                                                <th><strong>Include</strong></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>';

     $count=0;                                   
     $result = mysqli_query($con, "SELECT * FROM place_includes   WHERE  best_place_idbest_place='$pid' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idplace_includes   = $row['idplace_includes'];
                                $includes   = $row['includes'];
                                $count++;               
          
          echo '
           <tr>
                                                <td><strong>'.$count.'</strong></td>
                                                <td>'.$includes.' </td>
                                                
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                                            <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                             
                                                              <button name="'.$includes.'" class="dropdown-item btn btn-danger " onclick="place_include_edit_for('.$idplace_includes.',this.name);">Edit</button>

                                                              <button class="dropdown-item btn btn-danger " onclick="place_include_delete('.$idplace_includes.','.$pid.');">Delete</button>
                                                           
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
          ';
        } 

    echo ' </tbody>
    </table>';      
   
}


function offer_list($con){
  

     $count=0;                                   
     $result = mysqli_query($con, "SELECT * FROM packages   ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idpackages     = $row['idpackages'];
                                $package_name   = $row['package_name'];
                                $package_title  = $row['package_title'];
                                $price  = $row['price'];
                                $description=$row['package_description'];
                                $image_url=$row['package_slider_url'];
                                $insid_url=$row['insid_url'];
                                $count++;
                                
          
          echo '      <div class="col-xl-4"  style="float: left;"  >
                        <div class="card mb-12">
                            <img class="card-img-top img-fluid " src="'.$image_url.'" alt="" >
                            <img class="img-fluid " src="'.$insid_url.'" alt="" >
                            <div class="card-header"  style="height:100px;">
                                <h5 class="card-title">'.$package_name.'</h5>
                            </div>
                            <div class="card-body">
                                <div  style="height:200px;overflow: auto;">
                                <p>'.$package_title.'</p>
                                <p>'.$price.'</p>
                                <p class="card-text">'.$description.'</p>
                                </div>

                                <form action="offer.9web" method="post" style="float: left;margin-left:10px">
                                      <input type="hidden" value="'.$idpackages .'" name="hpid">
                                      <input type="submit" value="Edit" name="" class="btn btn-sm btn-warning ">
                              </form>

                              <button type="button"  class="btn btn-sm btn-warning " data-target="#offer_delete_model" data-toggle="modal" onclick="offer_delete_for('.$idpackages  .');" style="float: left;margin-left:10px">Delete</button>


                               <button type="button"  class="btn btn-sm btn-success " data-target="#includes_model" data-toggle="modal" onclick="get_offer_includes('.$idpackages  .');" style="float: left;margin-left:10px">Offer Includes</button>

                            </div>

                               

                        </div>
                    </div>
          ';
        } 

   
}



function offer_include_list($con,$pid){
      $package_name="";
     $result = mysqli_query($con, "SELECT * FROM packages  WHERE idpackages='$pid' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $package_name   = $row['package_name'];
      }

    echo '<h4>'.$package_name.'</h4>
    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th class="width80"><strong>#</strong></th>
                                                <th><strong>Include</strong></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>';

     $count=0;                                   
     $result = mysqli_query($con, "SELECT * FROM package_includes   WHERE  packages_idpackages='$pid' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idpackage_includes   = $row['idpackage_includes'];
                                $includes   = $row['includes'];
                                $count++;               
          
          echo '
           <tr>
                                                <td><strong>'.$count.'</strong></td>
                                                <td>'.$includes.' </td>
                                                
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                                            <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                             
                                                              <button name="'.$includes.'" class="dropdown-item btn btn-danger " onclick="offer_include_edit_for('.$idpackage_includes.',this.name);">Edit</button>

                                                              <button class="dropdown-item btn btn-danger " onclick="offer_include_delete('.$idpackage_includes.','.$pid.');">Delete</button>
                                                           
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
          ';
        } 

    echo ' </tbody>
    </table>';      
   
}


function banner_list($con){
  

                                    
     $result = mysqli_query($con, "SELECT * FROM page_banner pg INNER JOIN banner_type bt ON pg.banner_type_idbanner_type = bt.idbanner_type  ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idpage_banner     = $row['idpage_banner'];
                                $banner_title   = $row['banner_title'];
                                $btype=$row['btype'];
                                $image_url=$row['banner_url'];
                             
                                
          
          echo '      <div class="col-xl-4"  style="float: left;"  >
                        <div class="card mb-12">
                            <img class="card-img-top img-fluid" src="'.$image_url.'" alt="">
                            <div class="card-header">
                                <h5 class="card-title">'.$btype.'</h5>
                            </div>
                            <div class="card-body">
                                <p>'.$banner_title.'</p>
                              
                                <form action="banner.9web" method="post" style="float: left;margin-left:10px">
                                      <input type="hidden" value="'.$idpage_banner .'" name="hbid">
                                      <input type="submit" value="Edit" name="" class="btn btn-sm btn-warning ">
                              </form>

                              <button type="button"  class="btn btn-sm btn-warning " data-target="#banner_delete_model" data-toggle="modal" onclick="banner_delete_for('.$idpage_banner  .');" style="float: left;margin-left:10px">Delete</button>


                            </div>

                               

                        </div>
                    </div>
          ';
        } 

   
}

function keywords_list($con){
  

                                    
     $result = mysqli_query($con, "SELECT * FROM keywords   ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idkeywords     = $row['idkeywords'];
                                $kwords   = $row['kwords'];
                               

          echo '  <span class="badge badge-pill badge-light">'.$kwords.'
                                 <button type="button" class="close h-100"  aria-label="Close"   data-target="#Keyword_delete_model" data-toggle="modal" onclick="keyword_delete_for('.$idkeywords  .');"><span><i class="mdi mdi-close"></i></span></button>
                  </span>';                      
      
       
        } 

   
}


function meta_description($con){
   
    echo '
    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th class="width80"><strong>#</strong></th>
                                                <th><strong>Page</strong></th>
                                                 <th><strong>Description</strong></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>';

     $count=0;                                   
     $result = mysqli_query($con, "SELECT * FROM meta_description md INNER JOIN banner_type bt ON  md.banner_type_idbanner_type = bt.idbanner_type   ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idmeta_description   = $row['idmeta_description'];
                                $mdescription   = $row['mdescription'];
                                $btype   = $row['btype'];
                                $count++;               
          
          echo '
           <tr>
                                                <td><strong>'.$count.'</strong></td>
                                                <td>'.$btype.' </td>
                                                <td>'.$mdescription.' </td>
                                                
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                                            <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                             
                                                              <button name="'.$mdescription.'" class="dropdown-item btn btn-danger " onclick="meta_description_edit_for('.$idmeta_description.',this.name);">Edit</button>

                                                              <button class="dropdown-item btn btn-danger "  data-target="#md_delete_model" data-toggle="modal" onclick="meta_description_delete_for('.$idmeta_description.');">Delete</button>
                                                           
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
          ';
        } 

    echo ' </tbody>
    </table>';      
   
}


function faq_list($con){
   
   
     $result = mysqli_query($con, "SELECT * FROM faq   ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idfaq   = $row['idfaq'];
                                $question   = $row['question'];
                                $answers   = $row['answers'];
                                          
          
          echo '
           <a href="javascript:void()" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-3">'.$question.'</h5>
                      </div>
                      <p class="mb-1">'.$answers.'</p>

                        <form action="faq.9web" method="post" style="float: left;margin-left:10px">
                                      <input type="hidden" value="'.$idfaq .'" name="hqid">
                                      <input type="submit" value="Edit" name="" class="btn btn-sm btn-warning ">
                              </form>

                        <button type="button"  class="btn btn-sm btn-warning " data-target="#q_delete_model" data-toggle="modal" onclick="faq_delete_for('.$idfaq  .');" style="float: left;margin-left:10px">Delete</button>

          </a>
          ';
        } 

   
}


function gallery_type_list($con){
    
    echo '
    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th class="width80"><strong>#</strong></th>
                                                <th><strong>Type</strong></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>';

     $count=0;                                   
     $result = mysqli_query($con, "SELECT * FROM gallery_type   ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idgallery_type    = $row['idgallery_type'];
                                $type   = $row['type'];
                                $count++;               
          
          echo '
           <tr>
                                                <td><strong>'.$count.'</strong></td>
                                                <td>'.$type.' </td>
                                                
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                                            <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                             
                                                           <form action="image_gallery.9web" method="post" style="float: left;margin-left:10px">
                                                            <input type="hidden" value="'.$idgallery_type .'" name="hgid">
                                                            <input type="submit" value="Edit" name="" class="dropdown-item btn btn-warning " >
                                                          </form>

                                                              <button class="dropdown-item btn btn-danger " onclick="gallery_type_delete_for('.$idgallery_type.');"  data-target="#gallery_type_delete_model" data-toggle="modal">Delete</button>
                                                           
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
          ';
        } 

    echo ' </tbody>
    </table>';      
   
}


function why_choose_slider($con){
  

     $count=0;                                   
     $result = mysqli_query($con, "SELECT * FROM why_choose   ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idwhy_choose   = $row['idwhy_choose'];
                                $title   = $row['title'];
                                $description=$row['description'];
                                $image_url=$row['image_url'];
                                $count++;
                                
          
          echo '      <div class="col-xl-4"  style="float: left;"  >
                        <div class="card mb-12">
                            <img class="card-img-top img-fluid" src="'.$image_url.'" alt="">
                            <div class="card-header">
                                <h5 class="card-title">'.$title.'</h5>
                            </div>
                            <div class="card-body" style="height:300px;">
                                <div style="max-height:200px;overflow: auto;">
                                <p class="card-text">'.$description.'</p>
                                </div>

                                <form action="why-choose.9web" method="post" style="float: left;margin-left:10px">
                                      <input type="hidden" value="'.$idwhy_choose.'" name="hwcid">
                                      <input type="submit" value="Edit" name="" class="btn btn-sm btn-warning ">
                              </form>

                              <button type="button"  class="btn btn-sm btn-warning " data-target="#wc_delete_model" data-toggle="modal" onclick="why_choose_delete_for('.$idwhy_choose.');" style="float: left;margin-left:10px">Delete</button>

                            </div>

                               

                        </div>
                    </div>
          ';
        } 

   
}



?>