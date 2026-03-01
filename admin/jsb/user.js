function getXmlHttpRequest() {
    var xmlhttp;

    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    } else {
        alert("Browser Doesnt Support Ajax!");
    }

    return xmlhttp;
}




function login() {  

   
    var c1 = document.getElementById('username').value;
    var c2 = document.getElementById('password').value;

    if(login_validation(c1,c2)==0){ 
        return false;
    }
   
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
             
               login_res_validation(res);
            }
        }

        xmlHttp.open("POST", "control/login_ch.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2);

    }

}

function login_verification() {  

   
    var c1 = document.getElementById('code').value;
   
    if(verification_validation(c1)==0){ 
        return false;
    }
    
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
               verification_res_validation(res);
               
              
            }
        }

        xmlHttp.open("POST", "control/login_verification.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1);

    }

}

function video_slider_create() { 
   
    var c1 = document.getElementById('video_url').value;
   
    if(video_slider_create_validation(c1)==0){ 
        return false;
    }
    
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
                loading2(3,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
              
               video_slider_create_res_validation();  
            }
        }

        xmlHttp.open("POST", "control/video_slider_create.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1);

    }

}



function image_slider_create(st,id) { 
   
    var c1 = document.getElementById('slider_title').value;
    var c2 = slider_image_url;
    var a=document.getElementById("ch_gs").checked;
    var c3=1;
    if(a==true){
        c3=0;
    }
    var c4 = st;
    var c5=id;
  

    if(image_slider_validation(c1,c2,st)==0){ 
        return false;
    }
    
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
                loading2(1,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
               image_slider_res_validation(res,st);  
            }
        }

        xmlHttp.open("POST", "control/image_slider_create.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3+ "&c4=" + c4+ "&c5=" + c5);

    }

}




function image_slider_uploaded_ing_delete() {  
    var c1 = slider_image_url;
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
               display_image("image_upliader1",2); 
               slider_image_url="";   
            }
        }

        xmlHttp.open("POST", "control/image_slider_uploaded_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1);

    }

}

function dispay_image_slider(st){
    if(st==1){
         document.getElementById('main_img_slider').style.display="block";
         document.getElementById('video_slider').style.display="none";
    }else{
         document.getElementById('main_img_slider').style.display="none";
         document.getElementById('video_slider').style.display="block";
    }
}




var img_sld_id=0;
function image_slider_delete_for(id){
    img_sld_id=id;
}


function image_slider_delete() { 
  
    var c1 = img_sld_id;
  
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
             
               image_slider_delete_res_validation(res);     
            }
        }

        xmlHttp.open("POST", "control/image_slider_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 );

    }

}

function image_slider_type_change(ty) { 
    var c1=ty;
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
             
               image_slider_type_change_res();     
            }
        }

        xmlHttp.open("POST", "control/image_slider_type_change.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 );

    }

}


function about_section_create() { 
   
    var c1 = document.getElementById('about_title').value;
    var des = document.getElementById('about_description').value;
    var c2=text_replace(des);
   
    if(about_section_validation(c1,c2)==0){ 
        return false;
    }
    
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(2,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
               about_section_res();  
            }
        }

        xmlHttp.open("POST", "control/about_section_save.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2);

    }

}




function services_type_uploaded_image_delete() {  
    var c1 = st_image_url;
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
              
               display_image("image_upliader1",2); 
               st_image_url="";   
            }
        }

        xmlHttp.open("POST", "control/uploaded_image_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1);

    }

}


function services_type(st,id) { 
    
   
    var c1 = document.getElementById('st_title').value;
    var c2 = st_image_url;
    var c3= st;
    var c4= id;
    var c5 = document.getElementById('s_url').value;
   
    if(services_type_validation(c1,c2,c3,st)==0){ 
        return false;
    }
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(1,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
            
               services_type_res_validation(st);  
            }
        }

        xmlHttp.open("POST", "control/services_type_create.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3+ "&c4=" + c4+ "&c5=" + c5);

    }

}

var st_id=0;
function services_type_delete_for(id){
    st_id=id;
}


function services_type_delete() { 
  
    var c1 = st_id;
  
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
             
               services_type_delete_res_validation(res);     
            }
        }

        xmlHttp.open("POST", "control/services_type_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 );

    }

}


var ci_id=0;

function client_images_kw_edit_for(id,alt){ 
    ci_id=id;
    document.getElementById("img_alt2").value=alt;
}

function client_img_kw_edit() { 
   
  
    var c1 = document.getElementById('img_alt2').value;
    var c2 = ci_id;
    
    if(client_images_kw_edit_validation(c1)==0){ 
        return false;
    }
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               //loading2(2,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
               
               client_images_kw_edit_res_validation();  
            }
        }

        xmlHttp.open("POST", "control/client_image_keyword_edit.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2);

    }

}

function client_images_delete_for(id){ 
    ci_id=id;
}

function client_images_delete() { 
    var c1 = ci_id;
  
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
               client_images_delete_res_validation(res);     
            }
        }

        xmlHttp.open("POST", "control/client_images_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 );

    }

}

function client_description(){

    var c1 = document.getElementById('c_title').value;
    var des = document.getElementById('cdescription').value;
    var c2=text_replace(des);
     
    if(client_description_validation(c1,c2)==0){ 
        return false;
    }
  
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(1,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
               client_description_res_validation();  
            }
        }

        xmlHttp.open("POST", "control/client_description_create.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2);

    }

}


function hotel_uploaded_image_delete(i) {  
    var c1 = h_image_url[i];
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
                 h_image_url.splice(i, 1); 
                 hotel_image_delete_view();    
               //display_image("image_upliader1",2); 
              // h_image_url="";   
            }
        }

        xmlHttp.open("POST", "control/uploaded_image_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1);

    }

}


function hotels_create(st,id) { 
    
   
    var c1 = document.getElementById('htype').value;
    var c2 = document.getElementById('hname').value;
    var c3 = h_image_url;
    var c4= st;
    var c5= id;
   
    if(hotel_validation(c1,c2,c3,st)==0){ 
        return false;
    }
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(1,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
               hotel_res_validation(st);  
               h_image_url.length=0;
            }
        }

        xmlHttp.open("POST", "control/hotel_create.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3+ "&c4=" + c4+ "&c5=" + c5);

    }

}

var h_id=0;
function hotel_delete_for(id){
    h_id=id;
}


function hotel_delete() { 
  
    var c1 = h_id;
  
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
             
               hotel_delete_res_validation(res);     
            }
        }

        xmlHttp.open("POST", "control/hotel_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 );

    }

}
var hiid=0; hid=0;
function hotel_image_delete_for(a,b){
        hiid=a;
        hid=b;
}

function hotel_image_delete() { 
  
    var c1 = hiid;
    var c2 = hid;

    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
             
               hotel_image_delete_res_validation(res);     
            }
        }

        xmlHttp.open("POST", "control/hotel_image_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2);

    }

}

function event_uploaded_image_delete() {  
    var c1 = event_image_url;
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
              
               display_image("image_upliader1",2); 
               event_image_url="";   
            }
        }

        xmlHttp.open("POST", "control/uploaded_image_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1);

    }

}

function event_create(st,id) { 
    
   
    var c1 = document.getElementById('etitle').value;
    var c2 = document.getElementById('edate').value;
    var des = document.getElementById('edescription').value;
    var c3=text_replace(des);
    var c4 = event_image_url;
    var c5= st;
    var c6= id;
   
    if(event_validation(c1,c2,c3,c4,st)==0){ 
        return false;
    }
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(1,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
               event_res_validation(st);  
            }
        }

        xmlHttp.open("POST", "control/event_create.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3+ "&c4=" + c4+ "&c5=" + c5+ "&c6=" + c6);

    }

}

var event_id=0;
function event_delete_for(id){
    event_id=id;
}


function event_delete() { 
  
    var c1 = event_id;
  
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
             
               event_delete_res_validation(res);     
            }
        }

        xmlHttp.open("POST", "control/event_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 );

    }

}

function special_event(id) { 
  
    var c1 = id;
  
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
             
               event_special_res_validation(res);     
            }
        }

        xmlHttp.open("POST", "control/event_special.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 );

    }

}

function destinations_uploaded_image_delete() {  
    var c1 = destinations_image_url;
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
              
               display_image("image_upliader1",2); 
               destinations_image_url="";   
            }
        }

        xmlHttp.open("POST", "control/uploaded_image_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1);

    }

}

function destinations_create(st,id) { 
    
   
    var c1 = document.getElementById('country').value;
    var c2 = document.getElementById('dtitle').value;
    var des = document.getElementById('ddescription').value;
    var c3=text_replace(des);
    var c4 = destinations_image_url;
    var c5= st;
    var c6= id;
    var c7 = document.getElementById('img_alt').value;
   
    if(destinations_validation(c1,c2,c3,c4,st,c7)==0){ 
        return false;
    }
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(1,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
               destinations_res_validation(st);  
            }
        }

        xmlHttp.open("POST", "control/destinations_create.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3+ "&c4=" + c4+ "&c5=" + c5+ "&c6=" + c6+ "&c7=" + c7);

    }

}

var destinations_id=0;
function destinations_delete_for(id){
    destinations_id=id;
}


function destinations_delete() { 
  
    var c1 = destinations_id;
  
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
             
               destinations_delete_res_validation(res);     
            }
        }

        xmlHttp.open("POST", "control/destinations_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 );

    }

}

function tour_package_uploaded_image_delete() {  
    var c1 = tp_image_url;
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
              
               display_image("image_upliader1",2); 
               tp_image_url="";   
            }
        }

        xmlHttp.open("POST", "control/uploaded_image_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1);

    }

}

function tour_package_create(st,id) { 
    
    var c1 = document.getElementById('ptype').value;  
    var c2 = document.getElementById('ptitle').value; 
    var c3 = document.getElementById('pdays').value;  
    var des = document.getElementById('pdescription').value;  
    var c4=text_replace(des);  
    var c5 = tp_image_url;  
    var c6= st; 
    var c7= id;
    var c8 = document.getElementById('img1_alt').value;  
   
    if(tour_package_validation(c1,c2,c3,c4,c5,st,c8)==0){ 
        return false;
    }
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(1,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText;
              
               tour_package_res_validation(st);  
            }
        }

        xmlHttp.open("POST", "control/tour_package_create.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3+ "&c4=" + c4+ "&c5=" + c5+ "&c6=" + c6+ "&c7=" + c7+ "&c8=" + c8);

    }

}

var tour_package_id=0;
function tour_package_delete_for(id){
    tour_package_id=id;
}


function tour_package_delete() { 
  
    var c1 = tour_package_id;
  
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
             
               tour_package_delete_res_validation(res);     
            }
        }

        xmlHttp.open("POST", "control/tour_package_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 );

    }

}

function tour_itinerary_uploaded_image_delete() {  
    var c1 = ti_image_url;
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
              
               display_image("image_upliader1",2); 
               tp_image_url="";   
            }
        }

        xmlHttp.open("POST", "control/uploaded_image_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1);

    }

}

function tour_itinerary_create(st,id,tpid) { 
    
    var c1 = document.getElementById('iday').value;  
    var c2 = document.getElementById('iloaction').value; 
    var des = document.getElementById('idescription').value;  
    var c3=text_replace(des);  
    var c4 = ti_image_url;  
    var c5= st; 
    var c6= id;
    var c7= tpid;  
    var c8 = document.getElementById('img_alt').value;  

    if(itinerary_validation(c1,c2,c3,c4,st,c8)==0){ 
        return false;
    }
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(1,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText;
              
               itinerary_res_validation(st);  
            }
        }

        xmlHttp.open("POST", "control/tour_itinerary_create.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3+ "&c4=" + c4+ "&c5=" + c5+ "&c6=" + c6+ "&c7=" + c7+ "&c8=" + c8);

    }

}

var itinerary_id=0;
function itinerary_delete_for(id){
    itinerary_id=id;
}


function itinerary_delete() { 
  
    var c1 = itinerary_id;
  
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
             
               itinerary_delete_res_validation(res);     
            }
        }

        xmlHttp.open("POST", "control/tour_itinerary_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 );

    }

}

function tour_include_update(tpid) { 
    
    var des1= document.getElementById('idescription').value;
    var c1=text_replace(des1);
    var c2=  tpid;
  
    if(tour_include_update_validation(c1)==0){ 
        return false;
    }
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(1,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
                loading2(1,2);
               tour_include_update_res_validation();  
            }
        }

        xmlHttp.open("POST", "control/tour_include_save.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2 );

    }

}

function tour_exclude_update(tpid) { 
    
    var des1= document.getElementById('edescription').value;
    var c1=text_replace(des1);
    var c2=  tpid;
  
    if(tour_exclude_update_validation(c1)==0){ 
        return false;
    }
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(2,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
                loading2(2,2);
               tour_exclude_update_res_validation();  
            }
        }

        xmlHttp.open("POST", "control/tour_exclude_save.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2 );

    }

}

function tour_special_offers(tpid) { 
   
    var des1= document.getElementById('tspecial_offer').value; 
    var c1=text_replace(des1); 
    var c2=  tpid;
  
    if(tour_special_offers_validation(c1)==0){ 
        return false;
    }
   
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(2,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
              
                loading2(2,2);
               tour_special_offers_res_validation();  
            }
        }

        xmlHttp.open("POST", "control/tour_special_offers_save.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2 );

    }

}

var tpig_id=0;

function tour_package_image_gallery_kw_edit_for(id,kw){

    tpig_id=id;
    document.getElementById("img_alt2").value=kw;
}

function tour_package_image_gallery_kw_edit() { 
   
  
    var c1 = document.getElementById('img_alt2').value;
    var c2 = tpig_id;
    
    if(tour_package_image_gallery_kw_edit_validation(c1)==0){ 
        return false;
    }
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(2,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
               
               tour_package_image_gallery_edit_res_validation();  
            }
        }

        xmlHttp.open("POST", "control/tour_package_gallery_image_keyword_edit.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2);

    }

}



function tour_package_image_gallery_delete_for(id){
    tpig_id=id;
}


function tour_package_image_gallery_delete() { 
  
    var c1 = tpig_id;
  
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
             
               tour_package_image_gallery_delete_res_validation(res);     
            }
        }

        xmlHttp.open("POST", "control/tour_package_gallery_image_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 );

    }

}


function testimonial_display_hide(id,st) { 
    
    var c1= id;
    var c2= st;

   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(1,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
              
               testimonial_display_hide_res_validation();  
            }
        }

        xmlHttp.open("POST", "control/testimonial_display_hide_update.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2 );

    }

}



function blog_uploaded_image_delete() {  
    var c1 = blog_image_url;
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
              
               display_image("image_upliader1",2); 
               blog_image_url="";   
            }
        }

        xmlHttp.open("POST", "control/uploaded_image_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1);

    }

}

function blog_create(st,id) { 
    
   
    var c1 = document.getElementById('bl_title').value;
    var des = document.getElementById('bldescription').value;
    var c2= text_replace(des);
    var c3 = blog_image_url;
    var c4 = st;
    var c5 = id;
    var c6 = document.getElementById('img_alt').value;  

    if(blog_validation(c1,c2,c3,st,c6)==0){ 
        return false;
    }
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(2,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
               blog_res_validation(res,st);  
            }
        }

        xmlHttp.open("POST", "control/blog_create.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3+ "&c4=" + c4+ "&c5=" + c5+ "&c6=" + c6);

    }

}

var blog_id=0;
function blog_delete_for(id){
    blog_id=id;
}


function blog_delete() { 
  
    var c1 = blog_id;
  
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
               blog_delete_res_validation();     
            }
        }

        xmlHttp.open("POST", "control/blog_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 );

    }

}


function blog_contents_create(st,id) { 
   
  
    var c1 = document.getElementById('bl_title').value;
    var des = document.getElementById('bldescription').value;
    var c2= text_replace(des);
    var c3 = blog_image_url;
    var c4 = st;
    var c5 = id;  
    var c6 = document.getElementById('hbid').value;
    var c7 = document.getElementById('img_alt').value; 

    if(blog_validation(c1,c2,c3,st,c7)==0){ 
        return false;
    }
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(2,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
               
               blog_content_res_validation(res,st);  
            }
        }

        xmlHttp.open("POST", "control/blog_contents_create.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3+ "&c4=" + c4+ "&c5=" + c5+ "&c6=" + c6+ "&c7=" + c7);

    }

}

var blog_content_id=0;
function blog_content_delete_for(id){
    blog_content_id=id;
}


function blog_content_delete() { 
  
    var c1 = blog_content_id;
  
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
               blog_content_delete_res_validation();     
            }
        }

        xmlHttp.open("POST", "control/blog_content_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 );

    }

}


var gallery_id=0;

function gallery_img_kw_edit_for(id,kw){
    gallery_id=id;
    document.getElementById("img_alt2").value=kw;
}

function gallery_img_kw_edit() { 
   
  
    var c1 = document.getElementById('img_alt2').value;
    var c2 = gallery_id;
    
    if(gallery_img_kw_edit_validation(c1)==0){ 
        return false;
    }
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(2,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
               
               gallery_img_kw_edit_res_validation();  
            }
        }

        xmlHttp.open("POST", "control/gallery_image_keyword_edit.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2);

    }

}

function gallery_delete_for(id){
    gallery_id=id;
}


function gallery_delete() { 
  
    var c1 = gallery_id;
  
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
               gallery_delete_res_validation();     
            }
        }

        xmlHttp.open("POST", "control/gallery_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 );

    }

}



function gallery_type_add(id,st){ 
   
    var c1 = document.getElementById('g_type').value;
    var c2 = id;
    var c3= st;

    if(gallery_type_add_validation(c1)==0){ 
        return false;
    }

    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(2,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText;
               gallery_type_add_res_validation(st,res);  
            }
        }

        xmlHttp.open("POST", "control/gallery_type_create.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3);

    }

}
var gtid=0;
function  gallery_type_delete_for(id){
    gtid=id;
}

function gallery_type_delete() {  
    var c1 = gtid;
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
              
               gallery_type_delete_res_validation();
              
            }
        }

        xmlHttp.open("POST", "control/gallery_type_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1);

    }

}

function video_gallery_create(st,id) { 
    
    var c1 = document.getElementById('vurl').value;
    var c2= st;
    var c3= id;
   
    if(video_gallery_create_validation(c1)==0){ 
        return false;
    }
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(1,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
               video_gallery_create_res_validation(st);  
            }
        }

        xmlHttp.open("POST", "control/video_gallery_create.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3);

    }

}

var vg_id=0;
function video_gallery_delete_for(id){
    vg_id=id;
}


function video_gallery_delete() { 
  
    var c1 = vg_id;
  
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
             
               video_gallery_delete_res_validation();     
            }
        }

        xmlHttp.open("POST", "control/video_gallery_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 );

    }

}







function place_uploaded_image_delete() {  
    var c1 = place_image_url;
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
              
               display_image("image_upliader1",2); 
               place_image_url="";   
            }
        }

        xmlHttp.open("POST", "control/uploaded_image_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1);

    }

}


function place_create(st,id) { 
    
   
    var c1 = document.getElementById('title').value;
    var c2 = document.getElementById('img_alt').value;
    var des = document.getElementById('description').value;
    var c3=text_replace(des);
    var c4 = place_image_url;
    var c5 = st;
    var c6 = id;
   
    if(place_create_validation(c1,c2,c3,c4,st)==0){ 
        return false;
    }
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(2,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 

               place_create_res_validation(res,st);  
            }
        }

        xmlHttp.open("POST", "control/place_create.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3+ "&c4=" + c4+ "&c5=" + c5+ "&c6=" + c6);

    }

}

var place_id=0;
function place_delete_for(id){
    place_id=id;
}


function place_delete() { 
  
    var c1 = place_id;
  
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
               place_delete_res_validation();     
            }
        }

        xmlHttp.open("POST", "control/place_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 );

    }

}
var pi_id=0; var place_inc_id=0;
function get_place_includes(id) { 
    pi_id=id;
    var c1 = id;
  
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
              document.getElementById("res_place_includes").innerHTML=res; 
            }
        }

        xmlHttp.open("POST", "control/place_package_includes_list.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 );

    }

}


function place_include_create(st) { 
  
    var c1 = document.getElementById('pincludes').value;
    var c2 = pi_id;
    var c3 = place_inc_id;
    var c4 = st;
   
    if(place_include_validation(c1,st)==0){ 
        return false;
    }
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(2,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 

               place_include_res_validation(res,st);  
            }
        }

        xmlHttp.open("POST", "control/place_include_create.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3+ "&c4=" + c4);

    }

}


function place_include_edit_for(piid,val){
    place_inc_id=piid;
    document.getElementById('pincludes').value=val;
    document.getElementById('btn2').name='2';
}



function place_include_delete(piid,pid) { 
    
   
    var c1 = piid;
    var c2 = pid;
  
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
             
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 

               place_include_delete_res_validation(res);  
            }
        }

        xmlHttp.open("POST", "control/place_include_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2);

    }

}


function pleac_display(id,dh) { 
    var c1 = id;
    var c2 = dh;

    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
             pleac_display_res_validation();
            }
        }

        xmlHttp.open("POST", "control/place_display_update.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2);

    }

}

function offer_uploaded_image_delete() {  
    var c1 = offer_image_url1;
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
              
               display_image("image_upliader1",2); 
               offer_image_url1="";   
            }
        }

        xmlHttp.open("POST", "control/uploaded_image_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1);

    }

}

function offer_uploaded_image_delete2() {  
    var c1 = offer_image_url2;
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
              
               display_image("image_upliader2",2); 
               offer_image_url2="";   
            }
        }

        xmlHttp.open("POST", "control/uploaded_image_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1);

    }

}


function offer_create(st,id) { 
  
    var c1 = document.getElementById('off_name').value;
    var c2 = document.getElementById('off_price').value;
    var c3 = document.getElementById('off_title').value;
    var des = document.getElementById('offdescription').value;
    var c4= text_replace(des);
    var c5 = offer_image_url1;
    var c6 = offer_image_url2;
    var c7 = st;
    var c8 = id;
   
    if(offer_validation(c1,c2,c3,c4,c5,c6,st)==0){ 
        return false;
    }
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(2,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
              
               offer_res_validation(res,st);  
            }
        }

        xmlHttp.open("POST", "control/offer_create.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3+ "&c4=" + c4+ "&c5=" + c5+ "&c6=" + c6+ "&c7=" + c7+ "&c8=" + c8);

    }

}

var offer_id=0;
function offer_delete_for(id){
    offer_id=id;
}


function offer_delete() { 
  
    var c1 = offer_id;
  
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
               offer_delete_res_validation();     
            }
        }

        xmlHttp.open("POST", "control/offer_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 );

    }

}


var oi_id=0;  var offer_inc_id=0;
function get_offer_includes(id) { 
    oi_id=id;
    var c1 = id;
  
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
              document.getElementById("res_offer_includes").innerHTML=res; 
            }
        }

        xmlHttp.open("POST", "control/offer_includes_list.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 );

    }

}


function offer_include_create(st) { 
    
   
    var c1 = document.getElementById('pincludes').value;
    var c2 = oi_id;
    var c3 = offer_inc_id;
    var c4 = st;
   
    if(offer_include_validation(c1,st)==0){ 
        return false;
    }
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(2,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 

               offer_include_res_validation(res,st);  
            }
        }

        xmlHttp.open("POST", "control/offer_include_create.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3+ "&c4=" + c4);

    }

}

function offer_include_edit_for(piid,val){
    offer_inc_id=piid;
    document.getElementById('pincludes').value=val;
    document.getElementById('btn2').name='2';
}



function offer_include_delete(piid,pid) { 
    
   
    var c1 = piid;
    var c2 = oi_id;
  
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
             
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 

               offer_include_delete_res_validation(res);  
            }
        }

        xmlHttp.open("POST", "control/offer_include_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2);

    }

}


function banner_uploaded_image_delete() {  
    var c1 = banner_image_url;
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
              
               display_image("image_upliader1",2); 
               blog_image_url="";   
            }
        }

        xmlHttp.open("POST", "control/uploaded_image_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1);

    }

}


function banner_create(st,id) { 
  
    var c1 = document.getElementById('pid').value;
    var c2 = document.getElementById('b_title').value;
    var c3 = banner_image_url;
    var c4 = st;
    var c5 = id;
   
    if(banner_validation(c1,c2,c3,st)==0){ 
        return false;
    }
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(2,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
              
               banner_res_validation(res,st);  
            }
        }

        xmlHttp.open("POST", "control/banner_create.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3+ "&c4=" + c4+ "&c5=" + c5);

    }

}

var banner_id=0;
function banner_delete_for(id){
    banner_id=id;
}


function banner_delete() { 
  
    var c1 = banner_id;
  
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
               banner_delete_res_validation();     
            }
        }

        xmlHttp.open("POST", "control/banner_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 );

    }

}


function keywords_create() { 
  
    var c1 = document.getElementById('kwords').value;
    
   
    if(keyword_validation(c1)==0){ 
        return false;
    }
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(2,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
              
               keyword_res_validation(res);  
            }
        }

        xmlHttp.open("POST", "control/keywords_create.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 );

    }

}


var keyword_id=0;
function keyword_delete_for(id){
    keyword_id=id;
}


function keyword_delete() { 
  
    var c1 = keyword_id;
  
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
               keyword_delete_res_validation();     
            }
        }

        xmlHttp.open("POST", "control/keyword_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 );

    }

}

var md_id=0;
function meta_description(st) { 
  
    var c1 = document.getElementById('pid').value;
    var c2 = document.getElementById('mdescription').value;
    var c3=st;
    var c4=md_id;

    if(meta_description_validation(c2)==0){ 
        return false;
    }
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(2,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
               md_id=0;
               meta_description_res_validation(res);  
            }
        }

        xmlHttp.open("POST", "control/meta_description_create.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2 + "&c3=" + c3 + "&c4=" + c4);

    }

}

function meta_description_edit_for(id,val){
    md_id=id;
    document.getElementById('mdescription').value=val;
    document.getElementById('btn2').name='2';
}

function meta_description_delete_for(id){
    md_id=id;
}

function meta_description_delete() { 
  
    var c1 = md_id;
  
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
               meta_description_delete_res_validation();     
            }
        }

        xmlHttp.open("POST", "control/meta_description_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 );

    }

}



function social_media() { 
  
    var c1 = document.getElementById('facebook').value;
    var c2 = document.getElementById('twitter').value;
    var c3 = document.getElementById('linkedin').value;
    var c4 = document.getElementById('youtube').value;
    var c5 = document.getElementById('tripadvisor').value;
  
    if(social_media_validation(c1,c2,c3,c4,c5)==0){ 
        return false;
    }
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(1,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
         
               social_media_res_validation(res);  
            }
        }

        xmlHttp.open("POST", "control/social_media_create.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3+ "&c4=" + c4+ "&c5=" + c5);

    }

}


function social_media_chats() { 
  
    var c1 = document.getElementById('whatsapp').value;
    var c2 = document.getElementById('messanger').value;
    var c3 = document.getElementById('telegram').value;
    var c4 = document.getElementById('line').value;
    var c5 = document.getElementById('other').value;
  
    if(social_media_validation(c1,c2,c3,c4,c5)==0){ 
        return false;
    }
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(2,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
               social_media_chat_res_validation(res);  
            }
        }

        xmlHttp.open("POST", "control/social_media_chats_create.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3+ "&c4=" + c4+ "&c5=" + c5);

    }

}

function conact_details() { 
  
    var c1 = document.getElementById('contact1').value;
    var c2 = document.getElementById('contact2').value;
    var c3 = document.getElementById('address').value;
    var c4 = document.getElementById('email1').value;
    var c5 = document.getElementById('email2').value;
    var c6 = document.getElementById('contact3').value;
  
    if(social_media_validation(c1,c2,c3,c4,c5)==0){ 
        return false;
    }
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(3,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 

               contact_details_res_validation(res);  
            }
        }

        xmlHttp.open("POST", "control/contact_details_create.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3+ "&c4=" + c4+ "&c5=" + c5+ "&c6=" + c6);

    }

}


function faq_create(st,id) { 
  
    var c1 = document.getElementById('question').value;
    var des = document.getElementById('answers').value;
    var c2= text_replace(des);
    var c3 = st;
    var c4 = id;
   
  
    if(faq_validation(c1,c2)==0){ 
        return false;
    }
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(1,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
               faq_res_validation(res,st);  
            }
        }

        xmlHttp.open("POST", "control/faq_create.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3+ "&c4=" + c4);

    }

}
var faq_id=0;
function faq_delete_for(id){
    faq_id=id;
}

function faq_delete() { 
  
    var c1 = faq_id;
  
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
              
               faq_delete_res_validation();     
            }
        }

        xmlHttp.open("POST", "control/faq_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 );

    }

}


function profile_data_edit() { 
  
    var c1 = document.getElementById('u_name').value;
    var c2 = document.getElementById('u_contact').value;
    var c3 = document.getElementById('u_email').value;
    
    if(profile_data_validation(c1,c2,c3)==0){ 
        return false;
    }
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(3,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
               profile_data_res_validation();  
            }
        }

        xmlHttp.open("POST", "control/profile_data_update.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3);

    }

}

function profile_login_edit() { 
  
    var c1 = document.getElementById('u_un').value;
    var c2 = document.getElementById('u_lpw').value;
    var c3 = document.getElementById('u_npw').value;
    
    if(profile_login_validation(c1,c2,c3)==0){ 
        return false;
    }
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(3,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
               
               profile_login_res_validation(res);  
            }
        }

        xmlHttp.open("POST", "control/profile_login_update.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3);

    }

}

function tnc_save() { 
    
    var des = document.getElementById('tnc').value;
    var c1= text_replace(des);
    if(tnc_validation(c1)==0){ 
        return false;
    }
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(2,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
               tnc_res_validation();  
            }
        }

        xmlHttp.open("POST", "control/tnc_create.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1);

    }

}


function travel_tipes_save() { 
    
    var des = document.getElementById('tipes').value;
    var c1= text_replace(des);
    if(travel_tipes_validation(c1)==0){ 
        return false;
    }
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(2,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
               
               travel_tipes_res_validation();  
            }
        }

        xmlHttp.open("POST", "control/travel_tipes_create.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1);

    }

}


function why_choose_create(st,id) { 
    
   
    var c1 = document.getElementById('wc_title').value;
    var des = document.getElementById('wcdescription').value;
    var c2=text_replace(des);
    var c3 = wc_image_url;
    var c4= st;
    var c5= id;
   
    if(why_choose_validation(c1,c2,c3,st)==0){ 
        return false;
    }
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(2,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
               why_choose_res_validation(st);  
            }
        }

        xmlHttp.open("POST", "control/why_choose_create.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3+ "&c4=" + c4+ "&c5=" + c5);

    }

}

var wc_id=0;
function why_choose_delete_for(id){
    wc_id=id;
}


function why_choose_delete() { 
  
    var c1 = wc_id;
  
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
             
               why_choose_delete_res_validation(res);     
            }
        }

        xmlHttp.open("POST", "control/why_choose_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 );

    }

}


function client_review_uploaded_image_delete() {  
    var c1 = cr_image_url;
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
              
               display_image("image_upliader1",2); 
               cr_image_url="";   
            }
        }

        xmlHttp.open("POST", "control/uploaded_image_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1);

    }

}

function client_review_create(st,id) { 
    
    var c1 = document.getElementById('cname').value;  
    var c2 = document.getElementById('country').value; 
    var des = document.getElementById('description').value;  
    var c3=text_replace(des);  
    var c4 = cr_image_url;  
    var c5= st; 
    var c6= id;

   
    if(client_review_validation(c1,c2,c3)==0){ 
        return false;
    }
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               loading2(1,1);
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText;
            
               client_reviewe_res_validation(st);  
            }
        }

        xmlHttp.open("POST", "control/client_review_create.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3+ "&c4=" + c4+ "&c5=" + c5+ "&c6=" + c6);

    }

}

var cr_id=0;
function client_review_delete_for(id){
    cr_id=id;
}


function client_review_delete() { 
  
    var c1 = cr_id;
  
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
             
               client_review_delete_res_validation(res);     
            }
        }

        xmlHttp.open("POST", "control/client_review_delete.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 );

    }

}
