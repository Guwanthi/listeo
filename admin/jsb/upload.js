var fileobj; 

function image_slider_explorer1(e) { 
    e.preventDefault();
    fileobj = e.dataTransfer.files[0]; 
    slider_image_upload(fileobj);  
}
 
function image_slider_explorer2() {
    document.getElementById('selectfile').click();
    document.getElementById('selectfile').onchange = function() {
        fileobj = document.getElementById('selectfile').files[0];
      slider_image_upload(fileobj);
    };
}

var slider_image_url="";
  
function slider_image_upload(file_obj) {
     loading1("loading1",1);  
    
    
    if(file_obj != undefined) {
        var form_data = new FormData();             
        form_data.append('file', file_obj);
       // form_data.append('ch_vs', c2);
      $.ajax({
        type: 'POST',
        url: 'control/image_slider_upload.php',
        contentType: false,
        processData: false,
        data: form_data,
        success:function(response) { 
       
         //display_image("image_upliader1",1); 
         loading1("loading1",2); 
         success_msg("Image silder created success");
        $("#res_image_slider").load("home.9web #res_image_slider");  
         //set_image_url("img1",response);
         slider_image_url=response;
         $('#selectfile').val('');
        }
      });
    }
 }




function about_image_explorer1(e) { 
    e.preventDefault();
    fileobj = e.dataTransfer.files[0]; 
    about_image_upload(fileobj);  
}
 
function about_image_explorer2() {
    document.getElementById('selectfile2').click();
    document.getElementById('selectfile2').onchange = function() {
        fileobj = document.getElementById('selectfile2').files[0];
      about_image_upload(fileobj);
    };
}

var welcome_image_url="";

function about_image_upload(file_obj) {

    var alt = $("#img1_alt").val();

    if(alt==""){
         error_msg("Sorry...Please enter image keywords");
         return false;
    }

    loading1("loading2",1); 
    if(file_obj != undefined) {
        var form_data = new FormData();                  
        form_data.append('file', file_obj);
        form_data.append('kw', alt);
      $.ajax({
        type: 'POST',
        url: 'control/about_image_upload.php',
        contentType: false,
        processData: false,
        data: form_data,
        success:function(response) { 
            success_msg("Image uploaded success");
           loading1("loading2",2); 
           setTimeout(function(){ window.location = "home.9web";  }, 2000);
          // $("#res_welcome_section").load("home.9web #res_welcome_section");  
          $('#selectfile2').val('');
        }
      });
    }
 }


 function about_image2_explorer1(e) { 
    e.preventDefault();
    fileobj = e.dataTransfer.files[0]; 
    about_image2_upload(fileobj);  
}
 
function about_image2_explorer2() {
    document.getElementById('selectfile3').click();
    document.getElementById('selectfile3').onchange = function() {
        fileobj = document.getElementById('selectfile3').files[0];
      about_image2_upload(fileobj);
    };
}



function about_image2_upload(file_obj) {
    loading1("loading3",1); 
    if(file_obj != undefined) {
        var form_data = new FormData();                  
        form_data.append('file', file_obj);
      $.ajax({
        type: 'POST',
        url: 'control/about_image_upload2.php',
        contentType: false,
        processData: false,
        data: form_data,
        success:function(response) { 
            success_msg("Image uploaded success");
           loading1("loading3",2); 
           setTimeout(function(){ window.location = "home.9web";  }, 2000);
          // $("#res_welcome_section").load("home.9web #res_welcome_section");  
          $('#selectfile3').val('');
        }
      });
    }
 }


function services_type_explorer1(e) { 
    e.preventDefault();
    fileobj = e.dataTransfer.files[0]; 
    services_type_image_upload(fileobj);  
}
 
function services_type_explorer2() {
    document.getElementById('selectfile').click();
    document.getElementById('selectfile').onchange = function() {
        fileobj = document.getElementById('selectfile').files[0];
      services_type_image_upload(fileobj);
    };
}

var st_image_url="";
  
function services_type_image_upload(file_obj) {
     loading1("loading1",1);  
   // document.getElementById("loading").style.display="block";
    if(file_obj != undefined) {
        var form_data = new FormData();                  
        form_data.append('file', file_obj);
      $.ajax({
        type: 'POST',
        url: 'control/services_type_image_upload.php',
        contentType: false,
        processData: false,
        data: form_data,
        success:function(response) { 
         display_image("image_upliader1",1); 
         loading1("loading1",2); 
         set_image_url("img1",response);
         st_image_url=response;
         $('#selectfile').val('');
        }
      });
    }
 }


function clients_explorer1(e) { 
    e.preventDefault();
    fileobj = e.dataTransfer.files[0]; 
    clients_image_upload(fileobj);  
}
 
function clients_explorer2() {
    document.getElementById('selectfile').click();
    document.getElementById('selectfile').onchange = function() {
        fileobj = document.getElementById('selectfile').files[0];
      clients_image_upload(fileobj);
    };
}


  
function clients_image_upload(file_obj) {
     loading1("loading1",1);  
     var img_alt = $("#img_alt").val();
     if(img_alt==""){
         error_msg("Please enter image keywords");
         return false;
     }
   // document.getElementById("loading").style.display="block";
    if(file_obj != undefined) {
        var form_data = new FormData();                  
        form_data.append('file', file_obj);
        form_data.append('img_alt', img_alt);
      $.ajax({
        type: 'POST',
        url: 'control/client_image_upload.php',
        contentType: false,
        processData: false,
        data: form_data,
        success:function(response) { 
           
           success_msg("Client image uploaded success");
         loading1("loading1",2); 
         $("#res_client_imgs").load("clients.9web #res_client_imgs");  
        
         $('#selectfile').val('');
         $("#img_alt").val('');
        }
      });
    }
 }

function hotel_explorer1(e) { 
    e.preventDefault();
    fileobj = e.dataTransfer.files[0]; 
    hotel_image_upload(fileobj);  
}
 
function hotel_explorer2() {
    document.getElementById('selectfile').click();
    document.getElementById('selectfile').onchange = function() {
        fileobj = document.getElementById('selectfile').files[0];
      hotel_image_upload(fileobj);
    };
}

var h_image_url=[];
  
function hotel_image_upload(file_obj) {
     loading1("loading1",1);  
   // document.getElementById("loading").style.display="block";
    if(file_obj != undefined) {
        var form_data = new FormData();                  
        form_data.append('file', file_obj);
      $.ajax({
        type: 'POST',
        url: 'control/hotel_image_upload.php',
        contentType: false,
        processData: false,
        data: form_data,
        success:function(response) { 
         display_image("image_upliader1",1); 
         loading1("loading1",2); 
         h_image_url.push(response);
        
         set_image_url("img1",response);
         hotel_image_delete_view();
         //h_image_url=response;
         $('#selectfile').val('');
        }
      });
    }
 }

 function hotel_image_delete_view(){
     var a="";
    
     for (var i = 0; h_image_url.length > i; i++) {
          
     a+='<div class="col-xl-6 col-lg-6  " style="float: left;" >';
     a+='<div class="alert alert-info alert-dismissible fade show" style="padding: 0px;">';
     a+='<button type="button" class="close"  aria-label="Close" style="background: red;" onclick="hotel_uploaded_image_delete('+i+');return false;">';
     a+='<span><i class="mdi mdi-close"></i></span>';
     a+='</button>';
     a+='<div class="media" style="padding: 0px;">';
     a+='<img class="d-block w-100" id="img1" src="'+h_image_url[i]+'" alt="" style="width: 100%;">';
     a+='</div>';
     a+='</div>';
     a+='</div>';
     a+='</div>';

    }

    document.getElementById("image_upliader1").innerHTML=a; 
 }

function event_explorer1(e) { 
    e.preventDefault();
    fileobj = e.dataTransfer.files[0]; 
    event_image_upload(fileobj);  
}
 
function event_explorer2() {
    document.getElementById('selectfile').click();
    document.getElementById('selectfile').onchange = function() {
        fileobj = document.getElementById('selectfile').files[0];
      event_image_upload(fileobj);
    };
}

var event_image_url="";
  
function event_image_upload(file_obj) {
     loading1("loading1",1);  
   // document.getElementById("loading").style.display="block";
    if(file_obj != undefined) {
        var form_data = new FormData();                  
        form_data.append('file', file_obj);
      $.ajax({
        type: 'POST',
        url: 'control/event_image_upload.php',
        contentType: false,
        processData: false,
        data: form_data,
        success:function(response) { 
         display_image("image_upliader1",1); 
         loading1("loading1",2); 
         set_image_url("img1",response);
         event_image_url=response;
         $('#selectfile').val('');
        }
      });
    }
 }


function destinations_explorer1(e) { 
    e.preventDefault();
    fileobj = e.dataTransfer.files[0]; 
    destinations_image_upload(fileobj);  
}
 
function destinations_explorer2() {
    document.getElementById('selectfile').click();
    document.getElementById('selectfile').onchange = function() {
        fileobj = document.getElementById('selectfile').files[0];
      destinations_image_upload(fileobj);
    };
}

var destinations_image_url="";
  
function destinations_image_upload(file_obj) {
     loading1("loading1",1);  
   // document.getElementById("loading").style.display="block";
    if(file_obj != undefined) {
        var form_data = new FormData();                  
        form_data.append('file', file_obj);
      $.ajax({
        type: 'POST',
        url: 'control/destinations_image_upload.php',
        contentType: false,
        processData: false,
        data: form_data,
        success:function(response) { 
         display_image("image_upliader1",1); 
         loading1("loading1",2); 
         set_image_url("img1",response);
         destinations_image_url=response;
         $('#selectfile').val('');
        }
      });
    }
 }

 function dc_tour_package_explorer1(e) { 
    e.preventDefault();
    fileobj = e.dataTransfer.files[0]; 
    dc_tour_package_image_upload(fileobj);  
}
 
function dc_tour_package_explorer2() {
    document.getElementById('selectfile').click();
    document.getElementById('selectfile').onchange = function() {
        fileobj = document.getElementById('selectfile').files[0];
      dc_tour_package_image_upload(fileobj);
    };
}

var tp_image_url="";
  
function dc_tour_package_image_upload(file_obj) {
     loading1("loading1",1);  
    
   // document.getElementById("loading").style.display="block";
    if(file_obj != undefined) {
        var form_data = new FormData();                  
        form_data.append('file', file_obj);

      $.ajax({
        type: 'POST',
        url: 'control/tour_package_image_upload.php',
        contentType: false,
        processData: false,
        data: form_data,
        success:function(response) { 
         display_image("image_upliader1",1); 
         loading1("loading1",2); 
         set_image_url("img1",response);
         tp_image_url=response;
         $('#selectfile').val('');
        }
      });
    }
 }

 function tour_itinerary_explorer1(e) { 
    e.preventDefault();
    fileobj = e.dataTransfer.files[0]; 
    tour_itinerary_image_upload(fileobj);  
}
 
function tour_itinerary_explorer2() {
    document.getElementById('selectfile').click();
    document.getElementById('selectfile').onchange = function() {
        fileobj = document.getElementById('selectfile').files[0];
      tour_itinerary_image_upload(fileobj);
    };
}

var ti_image_url="";
  
function tour_itinerary_image_upload(file_obj) {
     loading1("loading1",1);  
   // document.getElementById("loading").style.display="block";
    if(file_obj != undefined) {
        var form_data = new FormData();                  
        form_data.append('file', file_obj);
      $.ajax({
        type: 'POST',
        url: 'control/tour_package_image_upload.php',
        contentType: false,
        processData: false,
        data: form_data,
        success:function(response) { 
         display_image("image_upliader1",1); 
         loading1("loading1",2); 
         set_image_url("img1",response);
         ti_image_url=response;
         $('#selectfile').val('');
        }
      });
    }
 }


function tour_package_explorer1(e) { 
    e.preventDefault();
    fileobj = e.dataTransfer.files[0]; 
    tour_package_image_upload(fileobj);  
}
 
function tour_package_explorer2() {
    document.getElementById('selectfile').click();
    document.getElementById('selectfile').onchange = function() {
        fileobj = document.getElementById('selectfile').files[0];
      tour_package_image_upload(fileobj);
    };
}
  
function tour_package_image_upload(file_obj) {
     loading1("loading1",1);  
      var img_alt=$("#img_alt").val();
     if(img_alt==""){
           error_msg("Please enter keywords ");
            return false; 
     }
   // document.getElementById("loading").style.display="block";
    if(file_obj != undefined) {
        var form_data = new FormData();                  
        form_data.append('file', file_obj);
        form_data.append('img_alt', img_alt);
      $.ajax({
        type: 'POST',
        url: 'control/tour_package_gallery_upload.php',
        contentType: false,
        processData: false,
        data: form_data,
        success:function(response) { 
         loading1("loading1",2); 
         $("#res_tour_package_ig").load("tour-details.9web #res_tour_package_ig");
         $('#selectfile').val('');
         $('#img_alt').val('');
        }
      });
    }
 }


function tour_banner_explorer1(e) { 
    e.preventDefault();
    fileobj = e.dataTransfer.files[0]; 
    tour_banner_image_upload(fileobj);  
}
 
function tour_banner_explorer2() {
    document.getElementById('selectfile').click();
    document.getElementById('selectfile').onchange = function() {
        fileobj = document.getElementById('selectfile').files[0];
      tour_banner_image_upload(fileobj);
    };
}
  
function tour_banner_image_upload(file_obj) {
     loading1("loading1",1);  
      
   // document.getElementById("loading").style.display="block";
    if(file_obj != undefined) {
        var form_data = new FormData();                  
        form_data.append('file', file_obj);
      $.ajax({
        type: 'POST',
        url: 'control/tour_package_banner_upload.php',
        contentType: false,
        processData: false,
        data: form_data,
        success:function(response) { 

         loading1("loading1",2); 
         window.location = "tour_banner.9web";
        }
      });
    }
 }




 function room_type_explorer1(e) { 
    e.preventDefault();
    fileobj = e.dataTransfer.files[0]; 
    room_type_image_upload(fileobj);  
}
 
function room_type_explorer2() {
    document.getElementById('selectfile').click();
    document.getElementById('selectfile').onchange = function() {
        fileobj = document.getElementById('selectfile').files[0];
      room_type_image_upload(fileobj);
    };
}

var rt_image_url="";
  
function room_type_image_upload(file_obj) {
     loading1("loading1",1);  
   // document.getElementById("loading").style.display="block";
    if(file_obj != undefined) {
        var form_data = new FormData();                  
        form_data.append('file', file_obj);
      $.ajax({
        type: 'POST',
        url: 'control/room_type_image_upload.php',
        contentType: false,
        processData: false,
        data: form_data,
        success:function(response) { 
         display_image("image_upliader1",1); 
         loading1("loading1",2); 
         set_image_url("img1",response);
         rt_image_url=response;
         $('#selectfile').val('');
        }
      });
    }
 }



 function room_image_explorer1(e) { 
    e.preventDefault();
    fileobj = e.dataTransfer.files[0]; 
    room_image_upload(fileobj);  
}
 
function room_image_explorer2() {
    document.getElementById('selectfile').click();
    document.getElementById('selectfile').onchange = function() {
        fileobj = document.getElementById('selectfile').files[0];
      room_image_upload(fileobj);
    };
}

var rt_image_url="";
  
function room_image_upload(file_obj) {
     loading1("loading1",1);  
     var id=document.getElementById('rid').value;
   // document.getElementById("loading").style.display="block";
    if(file_obj != undefined) {
        var form_data = new FormData();                  
        form_data.append('file', file_obj);
        form_data.append('rid', id);
      $.ajax({
        type: 'POST',
        url: 'control/room_image_upload.php',
        contentType: false,
        processData: false,
        data: form_data,
        success:function(response) { 
         loading1("loading1",2); 
         success_msg("Rooms image slider added success");
         document.getElementById('res_room_img_slider').innerHTML=response;
         $('#selectfile').val('');
        }
      });
    }
 }






function blog_explorer1(e) { 
    e.preventDefault();
    fileobj = e.dataTransfer.files[0]; 
    blog_image_upload(fileobj);  
}
 
function blog_explorer2() {
    document.getElementById('selectfile').click();
    document.getElementById('selectfile').onchange = function() {
        fileobj = document.getElementById('selectfile').files[0];
      blog_image_upload(fileobj);
    };
}

var blog_image_url="";
  
function blog_image_upload(file_obj) {
     loading1("loading1",1);  
   // document.getElementById("loading").style.display="block";
    if(file_obj != undefined) {
        var form_data = new FormData();                  
        form_data.append('file', file_obj);
      $.ajax({
        type: 'POST',
        url: 'control/blog_image_upload.php',
        contentType: false,
        processData: false,
        data: form_data,
        success:function(response) { 
         display_image("image_upliader1",1); 
         loading1("loading1",2); 
         set_image_url("img1",response);
         blog_image_url=response;
         $('#selectfile').val('');
        }
      });
    }
 }


function gallery_explorer1(e) { 
    e.preventDefault();
    fileobj = e.dataTransfer.files[0]; 
    gallery_image_upload(fileobj);  
}
 
function gallery_explorer2() {
    document.getElementById('selectfile').click();
    document.getElementById('selectfile').onchange = function() {
        fileobj = document.getElementById('selectfile').files[0];
      gallery_image_upload(fileobj);
    };
}


  
function gallery_image_upload(file_obj) {
     loading1("loading1",1);  
     var gtid= $("#gtid").val();
     var img_alt= $("#img_alt").val();
    
     if(img_alt==""){
        error_msg("Sorry... Please Enter Image keywords");
     }

    if(file_obj != undefined) {
        var form_data = new FormData();                  
        form_data.append('file', file_obj);
        form_data.append('gtid', gtid);
        form_data.append('img_alt', img_alt);

      $.ajax({
        type: 'POST',
        url: 'control/gallery_image_upload.php',
        contentType: false,
        processData: false,
        data: form_data,
        success:function(response) { 
          
         loading1("loading1",2); 
          success_msg("Gallery image uploaded success");
         $("#res_gallery").load("image_gallery.9web #res_gallery"); 
         
         $('#selectfile').val('');
         $('#img_alt').val('');
        }
      });
    }
 }


  


function place_explorer1(e) { 
    e.preventDefault();
    fileobj = e.dataTransfer.files[0]; 
    place_image_upload(fileobj);  
}
 
function place_explorer2() {
    document.getElementById('selectfile').click();
    document.getElementById('selectfile').onchange = function() {
        fileobj = document.getElementById('selectfile').files[0];
      place_image_upload(fileobj);
    };
}

var place_image_url="";
  
function place_image_upload(file_obj) {
     loading1("loading1",1);  
   // document.getElementById("loading").style.display="block";
    if(file_obj != undefined) {
        var form_data = new FormData();                  
        form_data.append('file', file_obj);
      $.ajax({
        type: 'POST',
        url: 'control/place_image_upload.php',
        contentType: false,
        processData: false,
        data: form_data,
        success:function(response) { 
         display_image("image_upliader1",1); 
         loading1("loading1",2); 
         set_image_url("img1",response);
         place_image_url=response;
         $('#selectfile').val('');
        }
      });
    }
 }


 function offer_explorer1(e) {  
    e.preventDefault();
    fileobj = e.dataTransfer.files[0]; 
    offer_image_upload(fileobj);  
}
 
function offer_explorer2() { 
    document.getElementById('selectfile').click();
    document.getElementById('selectfile').onchange = function() {
        fileobj = document.getElementById('selectfile').files[0];
      offer_image_upload(fileobj);
    };
}

var offer_image_url1="";
  
function offer_image_upload(file_obj) {
  
     loading1("loading1",1);  
   // document.getElementById("loading").style.display="block";
    if(file_obj != undefined) {
        var form_data = new FormData();                  
        form_data.append('file', file_obj);
      $.ajax({
        type: 'POST',
        url: 'control/offer_image_upload.php',
        contentType: false,
        processData: false,
        data: form_data,
        success:function(response) { 
         display_image("image_upliader1",1); 
         loading1("loading1",2); 
         set_image_url("img1",response);
         offer_image_url1=response;
         $('#selectfile').val('');
        }
      });
    }
 }


 function offer_explorer21(e) {  
    e.preventDefault();
    fileobj = e.dataTransfer.files[0]; 
    offer_image_upload2(fileobj);  
}
 
function offer_explorer22() { 
    document.getElementById('selectfile2').click();
    document.getElementById('selectfile2').onchange = function() {
        fileobj = document.getElementById('selectfile2').files[0];
      offer_image_upload2(fileobj);
    };
}

var offer_image_url2="";
  
function offer_image_upload2(file_obj) {
  
     loading1("loading2",1);  
   // document.getElementById("loading").style.display="block";
    if(file_obj != undefined) {
        var form_data = new FormData();                  
        form_data.append('file', file_obj);
      $.ajax({
        type: 'POST',
        url: 'control/offer_image_upload.php',
        contentType: false,
        processData: false,
        data: form_data,
        success:function(response) { 
         display_image("image_upliader2",1); 
         loading1("loading2",2); 
         set_image_url("img2",response);
         offer_image_url2=response;
         $('#selectfile2').val('');
        }
      });
    }
 }



 function offer_explorer21(e) {  
    e.preventDefault();
    fileobj = e.dataTransfer.files[0]; 
    offer_image_upload2(fileobj);  
}
 
function offer_explorer22() { 
    document.getElementById('selectfile2').click();
    document.getElementById('selectfile2').onchange = function() {
        fileobj = document.getElementById('selectfile2').files[0];
      offer_image_upload2(fileobj);
    };
}

var offer_image_url2="";
  
function offer_image_upload2(file_obj) {
  
     loading1("loading2",1);  
   // document.getElementById("loading").style.display="block";
    if(file_obj != undefined) {
        var form_data = new FormData();                  
        form_data.append('file', file_obj);
      $.ajax({
        type: 'POST',
        url: 'control/offer_image_upload.php',
        contentType: false,
        processData: false,
        data: form_data,
        success:function(response) { 
         display_image("image_upliader2",1); 
         loading1("loading2",2); 
         set_image_url("img2",response);
         offer_image_url2=response;
         $('#selectfile2').val('');
        }
      });
    }
 }


 function banner_explorer1(e) {  
    e.preventDefault();
    fileobj = e.dataTransfer.files[0]; 
    banner_image_upload2(fileobj);  
}
 
function banner_explorer2() { 
    document.getElementById('selectfile').click();
    document.getElementById('selectfile').onchange = function() {
        fileobj = document.getElementById('selectfile').files[0];
      banner_image_upload2(fileobj);
    };
}

var banner_image_url="";
  
function banner_image_upload2(file_obj) {
  
     loading1("loading1",1);  
   // document.getElementById("loading").style.display="block";
    if(file_obj != undefined) {
        var form_data = new FormData();                  
        form_data.append('file', file_obj);
      $.ajax({
        type: 'POST',
        url: 'control/banner_image_upload.php',
        contentType: false,
        processData: false,
        data: form_data,
        success:function(response) { 
         display_image("image_upliader1",1); 
         loading1("loading1",2); 
         set_image_url("img1",response);
         banner_image_url=response;
         $('#selectfile').val('');
        }
      });
    }
 }


function logo_explorer1(e) { 
    e.preventDefault();
    fileobj = e.dataTransfer.files[0]; 
    logo_image_upload(fileobj);  
}
 
function logo_explorer2() {
    document.getElementById('selectfile').click();
    document.getElementById('selectfile').onchange = function() {
        fileobj = document.getElementById('selectfile').files[0];
      logo_image_upload(fileobj);
    };
}

var slider_image_url="";
  
function logo_image_upload(file_obj) {
     loading1("loading1",1);  
    
    if(file_obj != undefined) {
        var form_data = new FormData();                  
        form_data.append('file', file_obj);
      $.ajax({
        type: 'POST',
        url: 'control/logo_upload.php',
        contentType: false,
        processData: false,
        data: form_data,
        success:function(response) { 
          
        
         loading1("loading1",2); 
         success_msg("Logo uploaded success");
        $("#res_logo").load("social.9web #res_logo");  
    
         
         $('#selectfile').val('');
        }
      });
    }
 }

 function why_choose_explorer1(e) { 
    e.preventDefault();
    fileobj = e.dataTransfer.files[0]; 
    why_choose_image_upload(fileobj);  
}
 
function why_choose_explorer2() {
    document.getElementById('selectfile').click();
    document.getElementById('selectfile').onchange = function() {
        fileobj = document.getElementById('selectfile').files[0];
      why_choose_image_upload(fileobj);
    };
}

var wc_image_url="";
  
function why_choose_image_upload(file_obj) {
     loading1("loading1",1);  
   // document.getElementById("loading").style.display="block";
    if(file_obj != undefined) {
        var form_data = new FormData();                  
        form_data.append('file', file_obj);
      $.ajax({
        type: 'POST',
        url: 'control/why_choose_image_upload.php',
        contentType: false,
        processData: false,
        data: form_data,
        success:function(response) { 
         display_image("image_upliader1",1); 
         loading1("loading1",2); 
         set_image_url("img1",response);
         wc_image_url=response;
         $('#selectfile').val('');
        }
      });
    }
 }


 function client_review_explorer1(e) { 
    e.preventDefault();
    fileobj = e.dataTransfer.files[0]; 
    client_review_image_upload(fileobj);  
}
 
function client_review_explorer2() {
    document.getElementById('selectfile').click();
    document.getElementById('selectfile').onchange = function() {
        fileobj = document.getElementById('selectfile').files[0];
      client_review_image_upload(fileobj);
    };
}

var cr_image_url="";
  
function client_review_image_upload(file_obj) {
     loading1("loading1",1);  
   // document.getElementById("loading").style.display="block";
    if(file_obj != undefined) {
        var form_data = new FormData();                  
        form_data.append('file', file_obj);
      $.ajax({
        type: 'POST',
        url: 'control/client-review_image_upload.php',
        contentType: false,
        processData: false,
        data: form_data,
        success:function(response) { 
         display_image("image_upliader1",1); 
         loading1("loading1",2); 
         set_image_url("img1",response);
         cr_image_url=response;
         $('#selectfile').val('');
        }
      });
    }
 }






