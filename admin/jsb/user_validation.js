function text_replace(str){
    //var val = str.replace('+','[plus]').replace('^', '').replace('$','[ds]').replace('&','[and]').replace("'",'[up]');
    //return val;

     var val= str.replace(/&/g, '[and]').replace(/[+]/g, '[plus]').replace(/[$]/g, '[ds]').replace(/[']/g, '[up]')    
    return val;
}



function login_validation(c1,c2){
   
    if(c1=="" || c2==""  ){ 
        error_msg("Please enter email and password");
        return 0;
    }

}

function login_res_validation(res){

    if(res==1){
        success_msg("Login successed");
        setTimeout(function(){ window.location = "verify.9web";  }, 2000);
    }else if(res==2){
         error_msg("Sorry...You have no permission to login");
     }else if(res==3){
         error_msg("Sorry...Your account has been deactivated");
     }else{
        error_msg("Please enter username and password");
    }
}

function verification_validation(c1){
   
    if(c1==""  ){ 
        error_msg("Please enter OTP Code");
        return 0;
    }

}


function verification_res_validation(res){

    if(res==1){
        success_msg("Login successed");
        setTimeout(function(){ window.location = "home.9web";  }, 2000);
    }else if(res==2){
         error_msg("Sorry...Your OTP Code invalid.Please enter valid OTP Code");
    }
}



function image_slider_validation(c1,c2,st){
   if(st==1){
         if(c1=="" || c2=="" ){ 
            error_msg("Please enter image title and upload image");
            return 0;
        }
   }else{
        if(c1==""  ){ 
            error_msg("Please enter image title");
            return 0;
        }
   }
   

}




function image_slider_res_validation(res,st){
    loading2(1,2);
 if(st==1){
     success_msg("Silder created success");
     clear_image_slider();
     display_image("image_upliader1",2); 
     $("#res_image_slider").load("home.9web #res_image_slider");  
 }else{
    success_msg("Silder updated success");
    setTimeout(function(){ window.location = "home.9web";  }, 2000);
 }
    
}

function clear_image_slider(){
    document.getElementById('slider_title').value="";
}

function image_slider_delete_res_validation(res){
 
    success_msg("Silder deleted success");
    $("#res_image_slider").load("home.9web #res_image_slider");  
    
}

function image_slider_type_change_res(){
 
    success_msg("Silder type changed success");
    $("#res_image_slider").load("home.9web #res_image_slider");  
    
}

function video_slider_create_validation(c1){
   
    if(c1==""  ){ 
            error_msg("Please enter Youtube URL");
            return 0;
    }

}

function video_slider_create_res_validation(){
    loading2(3,2);
    success_msg("Video Silder created success");
     clear_video_slider();
     $("#res_image_slider").load("home.9web #res_image_slider");   
}

function clear_video_slider(){
    document.getElementById('video_url').value="";
}

function about_section_validation(c1,c2){
   
    if(c1=="" || c2==""  ){ 
        error_msg("Please enter titel and description");
        return 0;
    }

}

function about_section_res(c1,c2){
    loading2(2,2);
    success_msg("welcome section content added success");
    setTimeout(function(){ window.location = "home.9web";  }, 2000);
    //$("#res_welcome_section").load("home.9web #res_welcome_section");  
}



function services_type_validation(c1,c2,st){
   if(st==1){
         if(c1=="" || c2==""  ){ 
            error_msg("Please enter title and upload image");
            return 0;
        }
   }else{
        if(c1==""  ){ 
            error_msg("Please enter title ");
            return 0;
        }
   }
   

}

function services_type_res_validation(st){ 
     loading2(1,2);
 if(st==1){
     success_msg("Services type created success");
     services_type_clear();
     display_image("image_upliader1",2); 
     setTimeout(function(){ window.location = "about.9web";  }, 2000);
     //$("#res_services_type").load("services.9web #res_services_type");  
 }else{
    success_msg("Services type updated success");
    setTimeout(function(){ window.location = "about.9web";  }, 2000);
 }
    
}


function services_type_delete_res_validation(res){
 
    success_msg("Services type deleted success");
    $("#res_services_type").load("about.9web #res_services_type");  
    
}

function services_type_clear(){
    document.getElementById('st_title').value="";
    st_image_url="";
}


function client_images_kw_edit_validation(c1){ 
   
    if(c1==""){ 
        error_msg("Please enter keywords");
        return 0;
    }
    
}

function client_images_kw_edit_res_validation(){ 
   
    success_msg("Client image keywords edited success");
   $("#res_client_imgs").load("clients.9web #res_client_imgs");  
    
}


function client_images_delete_res_validation(res){

    success_msg("Client Image deleted success");
    $("#res_client_imgs").load("clients.9web #res_client_imgs");  
}

function client_description_validation(c1,c2){
  
  if(c1=="" || c2==""  ){ 
            error_msg("Please enter title and description");
            return 0;
  }

}

function client_description_res_validation(){ 
    loading2(2,2);
    success_msg("Description added success");
    setTimeout(function(){ window.location = "clients.9web";  }, 2000); 
    
}


function hotel_validation(c1,c2,c3,st){
   if(st==1){
         if(c1=="" || c2=="" || c3==""  ){ 
            error_msg("Please enter type , hotel name and upload image");
            return 0;
        }
   }else{
        if(c1==""  ){ 
            error_msg("Please enter type and  hotel name ");
            return 0;
        }
   }
   

}

function hotel_res_validation(st){ 
     loading2(1,2);
 if(st==1){
     success_msg("Hotel created success");
     hotel_clear();
     display_image("image_upliader1",2); 
     setTimeout(function(){ window.location = "hotel.9web";  }, 2000);
     //$("#res_services_type").load("services.9web #res_services_type");  
 }else{
    success_msg("Hotel updated success");
    setTimeout(function(){ window.location = "hotel.9web";  }, 2000);
 }
    
}


function hotel_delete_res_validation(res){
 
    success_msg("Hotel deleted success");
    $("#res_hotel_images").load("hotel.9web #res_hotel_images");  
    
}

function hotel_image_delete_res_validation(res){
   alert(res);
    success_msg("Hotel image deleted success");
    document.getElementById('res_hotel_images').innerHTML=res;
   //$("#res_hotel_images").load("hotel.9web #res_hotel_images");  
    
}

function hotel_clear(){
    document.getElementById('hname').value="";
    h_image_url="";
}

function event_validation(c1,c2,c3,c4,st){
   if(st==1){
         if(c1=="" || c2=="" || c3=="" || c4==""  ){ 
            error_msg("Please enter title , date , description  and upload image");
            return 0;
        }
   }else{
        if(c1==""  ){ 
            error_msg("Please enter title , date , description ");
            return 0;
        }
   }
   

}

function event_res_validation(st){ 
     loading2(1,2);
 if(st==1){
     success_msg("Event created success");
     event_clear();
     display_image("image_upliader1",2); 
     setTimeout(function(){ window.location = "events.9web";  }, 2000);
     //$("#res_services_type").load("services.9web #res_services_type");  
 }else{
    success_msg("Event updated success");
    setTimeout(function(){ window.location = "events.9web";  }, 2000);
 }
    
}

function event_delete_res_validation(res){
 
    success_msg("Event deleted success");
    $("#res_event").load("events.9web #res_event");  
    
}

function event_special_res_validation(res){
 
    success_msg("Special event added success");
    $("#res_event").load("events.9web #res_event");  
    
}

function event_clear(){
   document.getElementById('etitle').value="";
   document.getElementById('edate').value="";
   document.getElementById('edescription').value="";
   event_image_url="";
}

function destinations_validation(c1,c2,c3,c4,st,c7){
   if(st==1){
         if(c1=="" || c2=="" || c3=="" || c4=="" || c4==""  || c7==""  ){ 
            error_msg("Please enter title, description,keywords  and upload image");
            return 0;
        }
   }else{
        if(c1=="" || c7=="" ){ 
            error_msg("Please enter title,description and keywords ");
            return 0;
        }
   }
   

}

function destinations_res_validation(st){ 
     loading2(1,2);
 if(st==1){
     success_msg("Destination created success");
   //  event_clear();
     //display_image("image_upliader1",2); 
     setTimeout(function(){ window.location = "destinations.9web";  }, 2000);
     //$("#res_services_type").load("services.9web #res_services_type");  
 }else{
    success_msg("Destination updated success");
    setTimeout(function(){ window.location = "destinations.9web";  }, 2000);
 }
    
}

function destinations_delete_res_validation(res){
 
    success_msg("Destination deleted success");
    $("#res_destination").load("destinations.9web #res_destination");  
    
}


function tour_package_validation(c1,c2,c3,c4,c5,st,c8){
   if(st==1){
        if(c1==1){

            if(c1=="" || c2=="" || c3=="" || c4=="" || c5=="" || c8==""   ){ 
                error_msg("Please enter title , date , description ,keywords and upload image");
                return 0;
            }
        }else{
             if(c1=="" || c2==""  || c4=="" || c5=="" || c8==""  ){ 
                error_msg("Please enter title,description ,keywords and upload image");
                return 0;
            }
        }
         
   }else{ 
       
       if(c1==1){

            if(c1=="" || c2=="" || c3=="" || c4=="" || c8=="" ){ 
                error_msg("Please enter title , date ,keywords and description ");
                return 0;
            }
        }else{
             if(c1=="" || c2==""  || c4=="" || c8==""){ 
                error_msg("Please enter title, description and keywords");
                return 0;
            }
        }
       
   }
   

}

function tour_package_res_validation(st){ 
     loading2(1,2);
 if(st==1){
     success_msg("Tour package created success");
     tour_package_clear();
     display_image("image_upliader1",2); 
     setTimeout(function(){ window.location = "tours.9web";  }, 2000);
     //$("#res_services_type").load("services.9web #res_services_type");  
 }else{
    success_msg("Tour package updated success");
    setTimeout(function(){ window.location = "tours.9web";  }, 2000);
 }
    
}

function tour_package_clear(){
   document.getElementById('ptitle').value="";
   document.getElementById('pdays').value="";
   document.getElementById('pdescription').value="";
   tp_image_url="";
}


function tour_package_delete_res_validation(res){
 
    success_msg("Tour package deleted success");
    $("#res_tour_package").load("tours.9web #res_tour_package");  
    
}

function itinerary_validation(c1,c2,c3,c4,st,c8){
   if(st==1){
         if(c1=="" || c2=="" || c3=="" || c4=="" || c8==""   ){ 
            error_msg("Please enter day , location , keywords and upload image");
            return 0;
        }
   }else{
        if(c1=="" || c2=="" || c3=="" || c8==""  ){ 
            error_msg("Please enter day location and  keywords ");
            return 0;
        }
   }
   

}

function itinerary_res_validation(st,res){ 
     loading2(1,2);
 if(st==1){
     success_msg("Tour itinerary created success");
     display_image("image_upliader1",2); 
     itinerary_clear();
     setTimeout(function(){ window.location = "tours-itinerary.9web";  }, 2000);
     //$("#res_services_type").load("services.9web #res_services_type");  
 }else{
    success_msg("Tour itinerary updated success");
    setTimeout(function(){ window.location = "tours-itinerary.9web";  }, 2000);
 }
    
}

function itinerary_clear(){
  document.getElementById('iday').value="";  
  document.getElementById('iloaction').value=""; 
  document.getElementById('idescription').value="";  
   ti_image_url="";
}

function itinerary_delete_res_validation(res){
 
    success_msg("Tour itinerary deleted success");
    document.getElementById('res_tour_package_itinerary').innerHTML=res;
    //$("#res_tour_package_itinerary").load("tours-itinerary.9web #res_tour_package_itinerary");  
    
}


function tour_include_update_validation(c1){
  
    if(c1=="" ){ 
            error_msg("Please enter tour include");
            return 0;
    }

}

function tour_include_update_res_validation(){
 
    success_msg("Tour include added success");
    //$("#res_green_concept").load("green-concept.9web #res_green_concept");
    setTimeout(function(){ window.location = "tour-details.9web";  }, 2000);
}

function tour_exclude_update_validation(c1){
  
    if(c1=="" ){ 
            error_msg("Please enter tour exclude");
            return 0;
    }

}


function tour_exclude_update_res_validation(){
 
    success_msg("Tour exclude added success");
    //$("#res_green_concept").load("green-concept.9web #res_green_concept");
    setTimeout(function(){ window.location = "tour-details.9web";  }, 2000);
}

function tour_special_offers_validation(c1){
  
    if(c1=="" ){ 
            error_msg("Please enter tour special offers");
            return 0;
    }

}

function tour_special_offers_res_validation(){
  success_msg("Tour special offers added success");
    //$("#res_green_concept").load("green-concept.9web #res_green_concept");
  setTimeout(function(){ window.location = "tour-details.9web";  }, 2000);
}

function tour_package_image_gallery_delete_res_validation(res){
 
    success_msg("Image  deleted success");
    $("#res_tour_package_ig").load("tour-details.9web #res_tour_package_ig");
    
}


function tour_package_image_gallery_kw_edit_validation(c1){ 
   
    if(c1==""){ 
        error_msg("Please enter keywords");
        return 0;
    }
    
}

function tour_package_image_gallery_edit_res_validation(){ 
   
    success_msg("Tour Package image slider keywords edited success");
   $("#res_tour_package_ig").load("tour-details.9web #res_tour_package_ig"); 
    
}




function testimonial_display_hide_res_validation(st){ 
     success_msg("Testimonial updated success");
     $("#res_testimonial").load("testimonial.9web #res_testimonial");  
    
}














function gc_specification_validation(c1,c2,c3,st){
   if(st==1){
         if(c1=="" || c2=="" || c3=="" ){ 
            error_msg("Please enter specification ,title  and upload image");
            return 0;
        }
   }else{
        if(c1==""  ){ 
            error_msg("Please enter image titel");
            return 0;
        }
   }
   

}

function gc_specification_res_validation(st){ 
     loading2(1,2);
 if(st==1){
     success_msg("Green concept specification created success");
     gc_specification_clear();
     display_image("image_upliader1",2); 
      setTimeout(function(){ window.location = "green-concept-specification.9web";  }, 2000);
     //$("#res_gc_specification").load("green-concept-specification.9web #res_gc_specification");  
 }else{
    success_msg("Green concept specification updated success");
    setTimeout(function(){ window.location = "green-concept-specification.9web";  }, 2000);
 }
    
}

function gc_specification_delete_res_validation(res){
 
    success_msg("Green concept specification deleted success");
    $("#res_gc_specification").load("green-concept-specification.9web #res_gc_specification");  
    
}

function gc_specification_clear(){
    document.getElementById('gc_title1').value="";
    document.getElementById('gc_title2').value="";
    gc_image_url="";
}


function gc_features_validation(c1,c2,c3,st){
   if(st==1){
         if(c1=="" || c2=="" || c3=="" ){ 
            error_msg("Please enter title , description  and upload image");
            return 0;
        }
   }else{
        if(c1==""  ){ 
            error_msg("Please enter title and description");
            return 0;
        }
   }
   

}

function gc_features_res_validation(st){ 
     loading2(1,2);
 if(st==1){
     success_msg("Green concept Features created success");
     gc_features_clear();
     display_image("image_upliader1",2); 
     setTimeout(function(){ window.location = "green-concept-features.9web";  }, 2000);
    // $("#res_gc_features").load("green-concept-features.9web #res_gc_features");  
 }else{
    success_msg("Green concept Features updated success");
    setTimeout(function(){ window.location = "green-concept-features.9web";  }, 2000);
 }
    
}


function gc_features_delete_res_validation(res){
 
    success_msg("Green concept features deleted success");
    $("#res_gc_features").load("green-concept-features.9web #res_gc_features");  
    
}

function gc_features_clear(){
    document.getElementById('gc_title').value="";
    document.getElementById('gcdescription').value="";
    gc_image_url="";
}




function services_validation(c1,c2){
  
  if(c1=="" || c2==""  ){ 
            error_msg("Please enter title and description");
            return 0;
  }

}

function services_res_validation(){ 
    loading2(2,2);
    success_msg("Services added success");
    setTimeout(function(){ window.location = "services.9web";  }, 2000); 
    
}


function room_type_validation(c1,c2,c3,c4,c5,c6,c7,c8,c12,st){
   if(st==1){
         if(c1=="" || c2=="" || c3=="" || c4=="" || c5=="" || c6=="" || c7=="" || c8=="" || c12==""){ 
            error_msg("Please enter all details and upload image");
            return 0;
        }
   }else{
        if(c1==""  ){ 
            error_msg("Please enter all details");
            return 0;
        }
   }
   

}



function room_type_res_validation(res,st){ 
     loading2(1,2);
 if(st==1){
     if(res==1){
        success_msg("Room type created success");
        room_type_clear();
        display_image("image_upliader1",2); 
        setTimeout(function(){ window.location = "room-type.9web";  }, 2000);
       // $("#res_room_type").load("room-type.9web #res_room_type");  
     }else{
        error_msg("Sorry room type already existing");
     }
     
 }else{
    success_msg("Room type updated success");
    setTimeout(function(){ window.location = "room-type.9web";  }, 2000);
 }
    
}


function room_type_clear(){
    document.getElementById('rt_type').value="";
    document.getElementById('rt_specialties').value="";
    document.getElementById('rt_size').value="";
    document.getElementById('rt_view').value="";
    document.getElementById('rt_qty').value="";
    document.getElementById('rt_adults').value="";
    document.getElementById('rt_children').value="";
    document.getElementById('rtdescription').value="";
    document.getElementById('rt_price').value="";
    rt_image_url="";
}

function room_type_delete_res_validation(res){

    if(res==1){
        success_msg("Room type deleted success");
       $("#res_room_type").load("room-type.9web #res_room_type");  
    }else{
        error_msg("Sorry room type can not delete");
    }
    
}

function room_display_res_validation(res,st){ 
    success_msg("Room display added success");
     $("#res_room_type").load("room-type.9web #res_room_type");  
   //  setTimeout(function(){ window.location = "things-to-do.9web";  }, 2000);   
}

function rooms_description_validation(c1,c2){
  
  if(c1=="" || c2==""  ){ 
            error_msg("Please enter title and description");
            return 0;
  }

}

function rooms_description_res_validation(){ 
    loading2(2,2);
    success_msg("Rooms description added success");
    setTimeout(function(){ window.location = "room-type.9web";  }, 2000);
    
}

function rooms_image_res_validation(res){ 
    success_msg("Rooms image slider deleted success");
    document.getElementById('res_room_img_slider').innerHTML=res;
}

function rooms_amenities_validation(c1,c2){
  
  if(c1=="" || c2==""  ){ 
        error_msg("Please enter amenities");
        return 0;
  }

}


function rooms_amenities_res_validation(res,st){ 
     loading2(1,2);
 if(st==1){
     if(res!=0){
        success_msg("Room amenities created success");
        document.getElementById('amenities').value="";
        document.getElementById('res_amenities').innerHTML=res;
     }else{
        error_msg("Sorry room amenities already existing");
     }
     
 }else{
    success_msg("Room amenities updated success");
    document.getElementById('btn1').name='1';
    document.getElementById('amenities').value="";
    document.getElementById('res_amenities').innerHTML=res;
    rm_id=1;
 }
    
}


function rooms_amenities_delete_res_validation(res){ 
    success_msg("Room amenities deleted success");
    document.getElementById('res_amenities').innerHTML=res;
}


function about_specialities_validation(c1,c2,c3,c4,st){
   if(st==1){
         if(c1=="" || c2=="" || c3=="" || c4=="" ){ 
            error_msg("Please enter specialities , title , description and  upload image");
            return 0;
        }
   }else{
        if(c1==""  ){ 
            error_msg("Please enter all details");
            return 0;
        }
   }
   

}


function about_specialities_res_validation(res,st){ 
     loading2(1,2);
 if(st==1){
     if(res==1){
        success_msg("Specialities created success");
        about_specialities_clear();
        display_image("image_upliader1",2);
        setTimeout(function(){ window.location = "about.9web";  }, 2000); 
        //$("#res_specialities").load("about.9web #res_specialities");  
     }else{
        error_msg("Sorry room type already existing");
     }
     
 }else{
    success_msg("Specialities updated success");
    setTimeout(function(){ window.location = "about.9web";  }, 2000);
 }
    
}


function about_specialities_clear(){
    document.getElementById('ab_specialities').value="";
    document.getElementById('ab_title').value="";
    document.getElementById('abdescription').value="";
    ab_image_url="";
}




function blog_validation(c1,c2,c3,st,c6){
   if(st==1){
         if(c1=="" || c2=="" || c3=="" || c6==""){ 
            error_msg("Please enter title , description ,keywords and  upload image");
            return 0;
        }
   }else{
        if(c1=="" || c2=="" || c6==""){ 
            error_msg("Please enter all details");
            return 0;
        }
   }
   

}

function blog_res_validation(res,st){ 
     loading2(1,2);
 if(st==1){
     if(res==1){
        success_msg("blog created success");
        blog_clear();
        display_image("image_upliader1",2); 
        setTimeout(function(){ window.location = "blog.9web";  }, 2000);
       // $("#res_blog").load("blog.9web #res_blog");  
     }else{
        error_msg("Sorry blog already existing");
     }
     
 }else{
    success_msg("Blog updated success");
    setTimeout(function(){ window.location = "blog.9web";  }, 2000);
 }
    
}


function blog_clear(){
    document.getElementById('bl_title').value="";
    document.getElementById('bldescription').value="";
    blog_image_url="";
}


function blog_delete_res_validation(){ 
   
    success_msg("Blog deleted success");
    $("#res_blog").load("blog.9web #res_blog");  
    
}

function blog_content_res_validation(res,st){ 

     loading2(1,2);
 if(st==1){
     if(res==1){
        success_msg("blog content created success");
        blog_clear();
        display_image("image_upliader1",2); 
        setTimeout(function(){ window.location = "blog_contents.9web";  }, 2000);
       // $("#res_blog").load("blog.9web #res_blog");  
     }else{
        error_msg("Sorry blog already existing");
     }
     
 }else{
    success_msg("Blog content updated success");
    setTimeout(function(){ window.location = "blog_contents.9web";  }, 2000);
 }
    
}

function blog_content_delete_res_validation(){ 
   
    success_msg("Blog content deleted success");
    $("#res_blog").load("blog_contents.9web #res_blog");  
    
}

function gallery_img_kw_edit_validation(c1){ 
   
    if(c1==""){ 
        error_msg("Please enter keywords");
        return 0;
    }
    
}

function gallery_img_kw_edit_res_validation(){ 
   
    success_msg("Gallery image keywords edited success");
   $("#res_gallery").load("image_gallery.9web #res_gallery"); 
    
}

function gallery_delete_res_validation(){ 
   
    success_msg("Gallery deleted success");
   $("#res_gallery").load("image_gallery.9web #res_gallery"); 
    
}

function gallery_type_add_validation(c1){ 
   
    if(c1==""){ 
        error_msg("Please enter galery type");
        return 0;
    }
    
}

function gallery_type_add_res_validation(st,res){ 

    if(st==1){
        if(res==1){
            success_msg("Gallery type added success");
            $("#res_gallery_type").load("image_gallery.9web #res_gallery_type"); 
        }else{
            error_msg("Sorry... Galery type already existing");
        }   
    }else{
         success_msg("Gallery type updated success");
         setTimeout(function(){ window.location = "image_gallery.9web";  }, 2000);
    }

}

function gallery_type_delete_res_validation(st,res){ 

    success_msg("Gallery type deleted success");
     $("#res_gallery_type").load("image_gallery.9web #res_gallery_type"); 
     //setTimeout(function(){ window.location = "image_gallery.9web";  }, 2000);

}


function video_gallery_create_validation(c1){ 
    if(c1==""){ 
        error_msg("Please video YouTube URL");
        return 0;
    } 
}

function video_gallery_create_res_validation(st){ 
    if(st==1){ 
         success_msg("Video created success");
         $("#res_gallery").load("video_gallery.9web #res_gallery"); 
    }else{
         success_msg("Video edited success");
          setTimeout(function(){ window.location = "video_gallery.9web";  }, 2000); 
    } 
     
    document.getElementById('vurl').value="";
}

function video_gallery_delete_res_validation(){ 
    success_msg("Video Deleted success");
    $("#res_gallery").load("video_gallery.9web #res_gallery"); 
}


function place_create_validation(c1,c2,c3,c4,st){
   if(st==1){
         if(c1=="" || c2=="" || c3=="" || c4=="" ){ 
            error_msg("Please enter title , description ,image alt data and  upload image");
            return 0;
        }
   }else{
        if(c1=="" || c2=="" ){ 
            error_msg("Please enter all details");
            return 0;
        }
   }
   

}

function place_create_res_validation(res,st){ 
     loading2(1,2);
 if(st==1){
     if(res==1){
        success_msg("Things to do created success");
        place_clear();
        display_image("image_upliader1",2); 
        setTimeout(function(){ window.location = "things-to-do.9web";  }, 2000); 
        //$("#res_place").load("things-to-do.9web #res_place");  
     }else{
        error_msg("Sorry Things to do already existing");
     }
     
 }else{
    success_msg("Things to do edited success");
    setTimeout(function(){ window.location = "things-to-do.9web";  }, 2000);
 }
    
}

function place_clear(){
    document.getElementById('title').value="";
    document.getElementById('img_alt').value="";
    document.getElementById('description').value="";
    place_image_url="";
}


function place_delete_res_validation(){ 
   
    success_msg("Place deleted success");
     $("#res_place").load("things-to-do.9web #res_place");
    
}


function place_include_validation(c1,st){
   
    if(c1==""  ){ 
        error_msg("Please enter place include");
        return 0;
    }

}


function place_include_res_validation(res,st){ 
     loading2(2,2);
 if(st==1){
     if(res!=0){
       success_msg("Place include created success");
       document.getElementById("pincludes").value="";
       document.getElementById("res_place_includes").innerHTML=res;
     }else{
       error_msg("Sorry place include already existing");
     }
     
 }else{
    document.getElementById("pincludes").value="";
    success_msg("Place include updated success");
    document.getElementById("res_place_includes").innerHTML=res;
 }
    
}


function place_include_delete_res_validation(res){ 
   
    success_msg("Place include deleted success");
    document.getElementById("res_place_includes").innerHTML=res; 
}


function pleac_display_res_validation(res,st){ 
    success_msg("Place display added success");
     setTimeout(function(){ window.location = "things-to-do.9web";  }, 2000);   
}


function offer_validation(c1,c2,c3,c4,c5,c6,st){
   if(st==1){
         if(c1=="" || c2=="" || c3=="" || c4=="" || c5=="" || c6==""   ){ 
            error_msg("Please enter all details and  upload two images");
            return 0;
        }
   }else{
        if(c1==""  ){ 
            error_msg("Please enter all details");
            return 0;
        }
   }
   

}


function offer_res_validation(res,st){ 
     loading2(1,2);
 if(st==1){
     if(res==1){
        success_msg("Offer created success");
        offer_clear();
        display_image("image_upliader1",2); 
        display_image("image_upliader2",2); 
        setTimeout(function(){ window.location = "offer.9web";  }, 2000);
        //$("#res_offer").load("offer.9web #res_offer");  
     }else{
        error_msg("Sorry offer already existing");
     }
     
 }else{
    success_msg("Offer updated success");
    setTimeout(function(){ window.location = "offer.9web";  }, 2000);
 }
    
}

function offer_clear(){
    document.getElementById('off_name').value="";
    document.getElementById('off_price').value="";
    document.getElementById('off_title').value="";
    document.getElementById('offdescription').value="";
    offer_image_url1="";
    offer_image_url2="";
}

function offer_delete_res_validation(){ 
   
    success_msg("Offer deleted success");
    $("#res_offer").load("offer.9web #res_offer");  
    
}



function offer_include_validation(c1,st){
   
    if(c1==""  ){ 
        error_msg("Please enter offer include");
        return 0;
    }

}


function offer_include_res_validation(res,st){ 
     loading2(2,2);
 if(st==1){
     if(res!=0){
       success_msg("Offer include created success");
       document.getElementById("pincludes").value="";
       document.getElementById("res_offer_includes").innerHTML=res;
     }else{
       error_msg("Sorry offer include already existing");
     }
     
 }else{
    document.getElementById("pincludes").value="";
    success_msg("offer include updated success");
    document.getElementById("res_offer_includes").innerHTML=res;
 }
    
}


function offer_include_delete_res_validation(res){ 
   
    success_msg("Place include deleted success");
    document.getElementById("res_offer_includes").innerHTML=res; 
}




function banner_validation(c1,c2,c3,st){
   if(st==1){
         if(c1=="" || c2=="" || c3==""  ){ 
            error_msg("Please enter  banner title and upload image");
            return 0;
        }
   }else{
        if(c1==""  ){ 
            error_msg("Please enter title");
            return 0;
        }
   }
   

}


function banner_res_validation(res,st){ 
     loading2(1,2);
 if(st==1){
     if(res==1){
        success_msg("Banner created success");
        document.getElementById('b_title').value="";
        display_image("image_upliader1",2); 
        $("#res_banner").load("banner.9web #res_banner");  
     }else{
        error_msg("Sorry banner already existing");
     }
     
 }else{
    success_msg("Banner updated success");
    setTimeout(function(){ window.location = "banner.9web";  }, 2000);
 }
    
}


function banner_delete_res_validation(){ 
   
    success_msg("Banner deleted success");
    $("#res_banner").load("banner.9web #res_banner");  
    
}

function keyword_validation(c1){

   if(c1==""  ){ 
            error_msg("Please enter keyword");
            return 0;
    }
}

function keyword_res_validation(res){ 

   if(res==1){
    success_msg("Keyword added success");
    document.getElementById('kwords').value="";
    $("#res_keywords").load("keywords.9web #res_keywords");  
   }else{
      error_msg("Sorry keyword already existing");
   }
    
    
}



function keyword_delete_res_validation(){ 
    success_msg("Keyword deleted success");
    $("#res_keywords").load("keywords.9web #res_keywords");  
    
}


function meta_description_validation(c1){

   if(c1==""  ){ 
            error_msg("Please enter description");
            return 0;
    }
}

function meta_description_res_validation(res){ 

   if(res==1){
    success_msg("Meta description added success");
    document.getElementById('mdescription').value="";
    $("#res_meta_description").load("keywords.9web #res_meta_description"); 
    document.getElementById('mdescription').value=""; 
     loading2(2,2);
   }else{
      error_msg("Sorry meta description already existing");
      loading2(2,2);
   }
    
    
}

function meta_description_delete_res_validation(res){ 

    success_msg("Meta description deleted success");
    $("#res_meta_description").load("keywords.9web #res_meta_description"); 
    md_id=0;
}


function social_media_validation(c1,c2,c3,c4,c5){
  
   if(c1=="" && c2=="" && c3=="" && c4=="" && c5==""  ){ 
            error_msg("Please enter details");
    }
}


function social_media_res_validation(res){ 
     loading2(1,2);

   if(res==1){
        success_msg("Social media link added success");
        setTimeout(function(){ window.location = "social.9web";  }, 2000);
    }else{
        success_msg("Social media link updated success");
        setTimeout(function(){ window.location = "social.9web";  }, 2000);
    }


    
}

function social_media_chat_res_validation(res){ 
     loading2(2,2);

   if(res==1){
        success_msg("Social media chats  added success");
        setTimeout(function(){ window.location = "social.9web";  }, 2000);
    }else{
        success_msg("Social media chats updated success");
        setTimeout(function(){ window.location = "social.9web";  }, 2000);
    }    
}

function contact_details_res_validation(res){ 
     loading2(3,2);

   if(res==1){
        success_msg("Contact details added success");
        setTimeout(function(){ window.location = "social.9web";  }, 2000);
    }else{
        success_msg("Contact details updated success");
        setTimeout(function(){ window.location = "social.9web";  }, 2000);
    }    
}

function faq_validation(c1,c2){
   
    if(c1=="" || c2==""  ){ 
        error_msg("Please enter question and answers");
        return 0;
    }

}

function faq_res_validation(res,st){ 
     loading2(1,2);
 if(st==1){
     if(res==1){
       success_msg("FAQ created success");
        $("#res_faq").load("faq.9web #res_faq"); 
       document.getElementById('question').value="";
       document.getElementById('answers').value="";
     }else{
       error_msg("Sorry FAQ already existing");
     }
     
 }else{
   
    success_msg("FAQ updated success");
    setTimeout(function(){ window.location = "faq.9web";  }, 2000);
 }
    
}

function faq_delete_res_validation(){ 
 success_msg("FAQ deleted success");
 $("#res_faq").load("faq.9web #res_faq");    
}


function profile_data_validation(c1,c2,c3){
   
     if(c1=="" || c2=="" || c3=="" ){ 
            error_msg("Please enter all details");
            return 0;
    }

}

function profile_data_res_validation(){
     success_msg("Profile updated success");
     setTimeout(function(){ location.reload();  }, 2000);
}

function profile_login_validation(c1,c2,c3){
   
     if(c1=="" || c2=="" || c3==""  ){ 
            error_msg("Please enter all details");
            return 0;
    }

}

function profile_login_res_validation(res){
     if(res==1){
        success_msg("Profile updated success");
        setTimeout(function(){ location.reload();  }, 2000);
     }else{
        error_msg("Please enter valid last password");
     }
    
}

function tnc_validation(c1){
  if(c1=="" ){ 
            error_msg("Please enter Terms and conditions");
            return 0;
  }
}

function tnc_res_validation(){
 success_msg("Terms and conditions added success");
 setTimeout(function(){ window.location = "terms_and_conditions.9web";  }, 2000);
}

function travel_tipes_validation(c1){
  if(c1=="" ){ 
            error_msg("Please enter Terms and conditions");
            return 0;
  }
}

function travel_tipes_res_validation(){
 success_msg("Travel tipes added success");
 setTimeout(function(){ window.location = "travel_tipes.9web";  }, 2000);
}


function why_choose_validation(c1,c2,st){
   if(st==1){
         if(c1=="" || c2=="" || c3=="" ){ 
            error_msg("Please enter  title and description");
            return 0;
        }
   }else{
        if(c1==""  ){ 
            error_msg("Please enter image titel");
            return 0;
        }
   }
   

}

function why_choose_res_validation(st){ 
     loading2(1,2);
 if(st==1){
     success_msg("Why choose created success");
     why_choose_clear();
    // display_image("image_upliader1",2); 
     setTimeout(function(){ window.location = "why-choose.9web";  }, 2000);
     //$("#res_why_choose").load("why-choose.9web #res_why_choose");  
 }else{
    success_msg("Why choose updated success");
    setTimeout(function(){ window.location = "why-choose.9web";  }, 2000);
 }
    
}

function why_choose_clear(){
    document.getElementById('wc_title').value="";
    document.getElementById('wcdescription').value="";
    wc_image_url="";
}

function why_choose_delete_res_validation(res){
 
    success_msg("Image silder deleted success");
    $("#res_why_choose").load("why-choose.9web #res_why_choose");
    
}



function client_review_validation(c1,c2,c3){
    
    if(c1=="" || c2=="" || c3==""    ){ 
                error_msg("Please enter name , country and description ");
                return 0;
    }

}

function client_reviewe_res_validation(st){ 
     loading2(1,2);
 if(st==1){
     success_msg("Client review created success");
     setTimeout(function(){ window.location = "testimonial.9web";  }, 2000);
     //$("#res_services_type").load("services.9web #res_services_type");  
 }else{
    success_msg("Client review updated success");
    setTimeout(function(){ window.location = "testimonial.9web";  }, 2000);
 }
    
}

function client_review_delete_res_validation(st){ 
      success_msg("Client review deleted success");
     setTimeout(function(){ window.location = "testimonial.9web";  }, 2000);
    
}



