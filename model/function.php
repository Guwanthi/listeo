 <?php include './model/DB.php';?>

<?php
function ___page_setup__(){
    $page1 = (explode('/', $_SERVER["REQUEST_URI"]));
     
     if($_SERVER['HTTP_HOST']=="localhost"){
         echo 'http://localhost/listeo/'.$page1[2];
    
     }else{
         echo 'https://ceylonnaturelandtours.com/'.$page1[1];    
     }
   // print_r($page1);

}

function limit_text($text, $limit) {
    $strings = $text;
      if (strlen($text) > $limit) {
          $words = str_word_count($text, 2);
          $pos = array_keys($words);
          if(sizeof($pos) >$limit)
          {
            $text = substr($text, 0, $pos[$limit]) . '...';
          }
          return $text;
      }
      return $text;
}

function my_encrypt($val){
  $enkey ="ahajhajja8878gg66aguun";
  $crypted_v1 = openssl_encrypt($val,"AES-128-ECB",$enkey);
  $crypted_v2=str_replace("/","100",$crypted_v1); 
  $crypted_v3=str_replace("==","A5000",$crypted_v2);
  $crypted_v=str_replace("+","B5000",$crypted_v3);  
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



function ___page_url__(){
    $page1 = (explode('/', $_SERVER["REQUEST_URI"]));
     $page="";
     if($_SERVER['HTTP_HOST']=="localhost"){
        $page=$page1[2];    
     }else{
         $page=$page1[1]; 
         //echo 'https://test.needcity.lk/'.$page1[1];    
     }
        

         if($page=="" || $page=="home.web"){
            return 1;
         }else if($page=="about_us.web"){
            return 2;
         }else if($page=="tour_packages.web" || $page=='package_details.web'){
            return 3;
         }else if($page=="things_to_do.web"){
            return 4;
         }else if($page=="plan_tour.web"){
            return 5;
         }else if($page=="airport_transfer.web"){
            return 6;
         }else if($page=="contact.web"){
            return 7;
         }

    //print_r($page1);

}


function meta_keywords($con){
   $result = mysqli_query($con, "SELECT * FROM keywords   ");
                            while ($row = mysqli_fetch_array($result)) {
                               echo $kwords=$row['kwords'].',';
                             
  }
  /*echo 'tourism sri lanka,tourism sri lanka essay,  tourism sri lanka news,tourism sri lanka economy,sri lanka tourism cost,srilanka tourism covid 19,sri lanka tourism cab,Colombo,negombo,galle,kandy,Matara,Anuradhapura,Jafna,Polonnaruwa,Sigiriya,Nuwara Eliya,Badulla,Best place in sri lanka,Best guides,Ayubowan Travels International,Top Ten,Top one,Covid-19,Beautiful places,South,Sri Lanka,Covid-19,Travel,Happy,Hotel,Vehicle,Tours';*/
}

function meta_description($con,$mdid){

    $mdescription="";
    $result = mysqli_query($con, "SELECT * FROM meta_description WHERE banner_type_idbanner_type ='$mdid'  ");
                            while ($row = mysqli_fetch_array($result)) {
                                $mdescription=$row['mdescription'];
                             
    }

  $page1 = (explode('/', $_SERVER["REQUEST_URI"]));
     $page="";
     if($_SERVER['HTTP_HOST']=="localhost"){
        $page=$page1[2];    
     }else{
         $page=$page1[1];
         //echo 'https://test.needcity.lk/'.$page1[1];    
     }
      $description=$mdescription;      
      /*if($page=="" || $page=="home.9web"){
          $description="Over 15 years of experience in the travel industry as well as being a hotelier and managing several establishments over the course of ten years, makes me well-equipped to curate your dream holiday. ";      
      }else if($page=="about-us.9web"){
             $description="Over 15 years of experience in the travel industry as well as being a hotelier and managing several establishments over the course of ten years, makes me well-equipped to curate your dream holiday. ";    
      }else if($page=="tour-packages.9web" || $page=='tour-package-details.9web' ){
             $description="We have created special tour plans for you. Unique experience and beautiful destinations is what we provide best. Please check our tour plans. We can change anything according to your choice.";    
      }else if($page=="day-tours.9web" || $page=='day-tour-details.9web'){
            $description="If you plan for short stay in Sri Lanka or if you are having busy schedule but still want to explore, then our day tours will be great option for you. We have planned destinations where you can reach on a day and explore.";    
      }else if($page=="event.9web"){
             $description="From the rural landscapes to the bustling city, witness the country’s immense cultural diversity and partake in its many integrated traditions and festivals, or even vibrant nightlife that illuminates the streets and sandy shores.";    
      }else if($page=="plan-your-tour.9web"){
             $description="When you travel to Sri Lanka, there are lots of amazing things we can offer. It is always better to get our valuable clients' ideas and plan their holiday. ";    
      }else if($page=="destinations.9web"){
             $description="Including popular attractions to the lesser known gems, our tour agency offers destinations and accommodation for every traveler so prepare yourself for an authentic and vibrant journey in the tropics like no other. ";    
      }else if($page=="hotels.9web"){
             $description="Take your pick from star class hotels, heritage bungalows, boutique hotels, beach resorts and much more at competitive rates! Partnering with the finest hotels on the island, you’ll definitely be spoilt for choice. ";    
      }else if($page=="blog.9web" || $page=="blog_details.9web"){
             $description="Over 15 years of experience in the travel industry as well as being a hotelier and managing several establishments over the course of ten years, makes me well-equipped to curate your dream holiday.";    
      }else if($page=="contact.9web"){
             $description="If you need any help, please contact us or send us an email or go to our forum We are sure that you can receive our reply as soon as possible.Contact :  Mail : info@tourswithjames.com";    
      }*/
  echo $description;
}





function related_day_tour_package(){
 


  echo '
   <div class="d-client-review-slider-item">
                    <div class="single-destination-grid text-center">
                        <div class="thumb">
                             <img src="assets/img/city_tour/1-1.jpg" alt="img">
                        </div>
                        <div class="details">
                           
                            <a href="day-tour-details.9web/package1"><h4 class="title">Kandy City Tour</h4></a>
                            <p class="content">Approximately 120 km from the capital, you will reach one of the most refreshing climates in Kandy. Not too hot, not too cold, the last ancient capital of Sri Lanka..</p>
                        </div>
                    </div>
                </div>
                <div class="d-client-review-slider-item">
                    <div class="single-destination-grid text-center">
                        <div class="thumb">
                           <img src="assets/img/city_tour/2-1.jpg" alt="img">
                        </div>
                        <div class="details">
                            
                            <a href="day-tour-details.9web/package2"><h4 class="title">Colombo City Tour</h4></a>
                            <p class="content">The commercial capital of Sri Lanka, Colombo. Grew under the Dutch and British, and today shows the marked influence of all those cultures. Its importance as..</p>
                        </div>
                    </div>
                </div>
                 <div class="d-client-review-slider-item">
                    <div class="single-destination-grid text-center">
                        <div class="thumb">
                           <img src="assets/img/city_tour/3-1.jpg" alt="img">
                        </div>
                        <div class="details">
                            
                            <a href="day-tour-details.9web/package3"><h4 class="title">Sigiriya City Tour</h4></a>
                            <p class="content">he tour to Sigiriya, Dambulla, and Pidurangala will be an amazing journey. You will witness one of the wonders of Sri Lanka and the world. First we can...</p>
                        </div>
                    </div>
                </div>
                <div class="d-client-review-slider-item">
                    <div class="single-destination-grid text-center">
                        <div class="thumb">
                           <img src="assets/img/city_tour/4-1.jpg" alt="img">
                        </div>
                        <div class="details">
                            
                            <a href="day-tour-details.9web/package4"><h4 class="title">Galle City Tour</h4></a>
                            <p class="content">The tour to the southern region of Sri Lanka will be filled with the beautiful coastal line. Sandy beaches and crystal clear water will be amazing to see.</p>
                        </div>
                    </div>
                </div>

  ';

}

?>