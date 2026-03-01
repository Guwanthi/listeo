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


function tour_mail() { 

 
   
    var c1=document.getElementById("name").value;
    var c2=document.getElementById("email").value; 
    var c3=document.getElementById("country").value; 
    var c4=document.getElementById("message1").value;   
    var c5=document.getElementById('mtype').value;    

    if(c1=="" || c2=="" || c3=="" || c4==""  ){
        document.getElementById("success").style.display="none";
        document.getElementById("error").style.display="block";
        setTimeout(function(){
           document.getElementById("error").style.display="none";
        }, 3000);
       
        return false;
    }
        
    document.getElementById("send_btn").disabled=true;
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
        
                document.getElementById("error").style.display="none";
                document.getElementById("success").style.display="block";
                document.getElementById("send_btn").disabled=false;
                clear_tour_mail();
                setTimeout(function(){
                    document.getElementById("success").style.display="none";
                }, 3000); 
            
              
            }
        }

        xmlHttp.open("POST", "control/tours_mail.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3+ "&c4=" + c4+ "&c5=" + c5);

    }

}

function clear_tour_mail(){
     document.getElementById("name").value="";
     document.getElementById("email").value="";
     document.getElementById("country").value="";     
     document.getElementById("message1").value="";
}



function contact_mail() { 
 
    var c1=document.getElementById("name").value;
    var c2=document.getElementById("email").value; 
    var c3=document.getElementById("subject").value;   
    var c4=document.getElementById("comments").value;   
   

    if(c1=="" || c2=="" || c4==""  ){
        document.getElementById("success").style.display="none";
        document.getElementById("error").style.display="block";
        setTimeout(function(){
           document.getElementById("error").style.display="none";
        }, 3000);
       
        return false;
    }
        
    document.getElementById("send_btn").disabled=true;
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
           
                document.getElementById("error").style.display="none";
                document.getElementById("success").style.display="block";
                document.getElementById("send_btn").disabled=false;
                clear_contact_mail();
                setTimeout(function(){
                    document.getElementById("success").style.display="none";
                }, 3000); 
            
              
            }
        }

        xmlHttp.open("POST", "control/contact_mail.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3+ "&c4=" + c4);

    }

}

function clear_contact_mail(){
     document.getElementById("name").value="";
     document.getElementById("email").value="";
     document.getElementById("subject").value="";     
     document.getElementById("comments").value="";
}


function send_taxi_mail() { 
   
    var c1=document.getElementById("name").value;
    var c2=document.getElementById("email").value;
    var c3=document.getElementById("country").value;
    var c4=document.getElementById("contact").value;
    var c5=document.getElementById('adults').value;
    var c6=document.getElementById('child').value;
    var c7=document.getElementById('infant').value;


    var c8=document.getElementById('pickup').checked;
    var c9=document.getElementById('plocation1').value;
    var c10=document.getElementById('dlocation1').value;
    var c11=document.getElementById('pdate1').value;
    var c12=document.getElementById('ptime1').value;

    var c13=document.getElementById('drop').checked;
    var c14=document.getElementById('plocation2').value;
    var c15=document.getElementById('dlocation2').value;
    var c16=document.getElementById('pdate2').value;
    var c17=document.getElementById('ptime2').value;

    var c18=document.getElementById('roundtour').checked;
    var c19=document.getElementById('plocation3').value;
    var c20=document.getElementById('adate3').value;
    var c21=document.getElementById('time3').value;
    var c22=document.getElementById('ddate3').value;

    // var c23=document.getElementById('execution').checked;
    // var c24=document.getElementById('plocation4').value;
    // var c25=document.getElementById('adate4').value;
    // var c26=document.getElementById('time4').value;
    // var c27=document.getElementById('ddate4').value;

    var c28=document.getElementById('message1').value;
   
    if(c1=="" || c2=="" || c3=="" || c4=="" || c5==""){
        document.getElementById("success").style.display="none";
        document.getElementById("error").style.display="block";
        setTimeout(function(){
            document.getElementById("error").style.display="none";
        }, 3000);

        return false;
    }else{
    if(c8==true){

            if(c9==""|| c10==""  || c11==""  || c12==""){
                document.getElementById("success").style.display="none";
                document.getElementById("error").style.display="block";
                setTimeout(function(){
                    document.getElementById("error").style.display="none";
                }, 3000);

                return false;
            }

        }

        if(c13==true){

            if(c14==""|| c15==""  || c16==""  || c17==""){
                document.getElementById("success").style.display="none";
                document.getElementById("error").style.display="block";
                setTimeout(function(){
                    document.getElementById("error").style.display="none";
                }, 3000);

                return false;
            }

        }

        if(c18==true){

            if(c19==""|| c20==""  || c21==""  || c22==""){
                document.getElementById("success").style.display="none";
                document.getElementById("error").style.display="block";
                setTimeout(function(){
                    document.getElementById("error").style.display="none";
                }, 3000);

                return false;
            }

        }

    }
        
    document.getElementById("send_btn").disabled=true;
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
                document.getElementById("error").style.display="none";
                document.getElementById("success").style.display="block";
                document.getElementById("send_btn").disabled=false;
               
                setTimeout(function(){
                    document.getElementById("success").style.display="none";
                }, 3000); 

                 clear_taxi_mail();
            
              
            }
        }

        xmlHttp.open("POST", "control/taxi_mail.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3+ "&c4=" + c4+ "&c5=" + c5+ "&c6=" + c6+ "&c7=" + c7+ "&c8=" + c8+ "&c9=" + c9+
            "&c10=" + c10+ "&c11=" + c11+ "&c12=" + c12+ "&c13=" + c13+ "&c14=" + c14+ "&c15=" + c15+ "&c16=" + c16+
            "&c17=" + c17+ "&c18=" + c18+ "&c19=" + c19+ "&c20=" + c20+ "&c21=" + c21+ "&c22=" + c22+ "&c28=" + c28);

    }

}

function set_visible(visible, type){
     // alert(visible);
     // alert(type);

    if(type==1){
        if(visible==true){
            document.getElementById('pickupdiv').style.display="block";
        }else{
            document.getElementById('pickupdiv').style.display="none";
        }

    }

    if(type==2){
        if(visible==true){
            document.getElementById('dropdiv').style.display="block";
        }else{
            document.getElementById('dropdiv').style.display="none";
        }

    }

    if(type==3){
        if(visible==true){
            document.getElementById('roundtourdiv').style.display="block";
        }else{
            document.getElementById('roundtourdiv').style.display="none";
        }

    }

}

function clear_taxi_mail(){
    document.getElementById("name").value="";
    document.getElementById("email").value="";
    document.getElementById("country").value="";
    document.getElementById("contact").value="";
    document.getElementById('adults').value="";
    document.getElementById('child').value="";
    document.getElementById('infant').value="";
    document.getElementById('pickup').checked=false;
    document.getElementById('plocation1').value="";
    document.getElementById('dlocation1').value="";
    document.getElementById('pdate1').value="";
    document.getElementById('ptime1').value="";
    document.getElementById('drop').checked=false;
    document.getElementById('plocation2').value="";
    document.getElementById('dlocation2').value="";
    document.getElementById('pdate2').value="";
    document.getElementById('ptime2').value="";
    document.getElementById('roundtour').checked=false;
    document.getElementById('plocation3').value="";
    document.getElementById('adate3').value="";
    document.getElementById('time3').value="";
    document.getElementById('ddate3').value="";
    // document.getElementById('execution').checked=false;
    // document.getElementById('plocation4').value="";
    // document.getElementById('adate4').value="";
    // document.getElementById('time4').value="";
    // document.getElementById('ddate4').value="";
    document.getElementById('message1').value="";
}


function send_package_mail() { 
   
    var c1=document.getElementById("name").value;
    var c2=document.getElementById("email").value; 
    var c3=document.getElementById("country").value;
    var c4=document.getElementById("message").value;   
    var c5=document.getElementById('budget').value;       
    var c6=document.getElementById("nod").value;
    var c7=document.getElementById("ad").value;   
    var c8=document.getElementById('dd').value; 
    var c9=document.getElementById('child').value;
    var c10=document.getElementById('adult').value;
    var c11=document.getElementById('hotel').value;
    var c12=document.getElementById('vehi').value;
    var c13=document.getElementById('as').value;    
    var c14=document.getElementById('c').value;    
    var c15=document.getElementById('ve').value;    
    var c16=document.getElementById('w').value;    
    var c17=document.getElementById('nm').value;    
    var c18=document.getElementById('wa').value;    
    var c19=document.getElementById('b').value;    
    var c20=document.getElementById('wsp').value;    
    var c21=document.getElementById('ad').value;    
    var c22=document.getElementById('tre').value;
    
    

    if(c1=="" || c2=="" || c3=="" || c4==""  ){
        document.getElementById("success").style.display="none";
        document.getElementById("error").style.display="block";
        setTimeout(function(){
           document.getElementById("error").style.display="none";
        }, 3000);
       
        return false;
    }
        
    document.getElementById("send_btn").disabled=true;
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
             
                document.getElementById("error").style.display="none";
                document.getElementById("success").style.display="block";
                document.getElementById("send_btn").disabled=false;
                clear_send_mail();
                setTimeout(function(){
                    document.getElementById("success").style.display="none";
                }, 3000); 
            
              
            }
        }

        xmlHttp.open("POST", "control/mail1.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3+ "&c4=" + c4+ "&c5=" + c5+ "&c6=" + c6+ "&c7=" + c7+ "&c8=" + c8+ "&c9=" + c9+ "&c10=" + c10+ "&c11=" + c11+ "&c12=" + c12+ "&c13=" + c13+ "&c14=" + c14+ "&c15=" + c15+ "&c16=" + c16+ "&c17=" + c17+ "&c18=" + c18+ "&c19=" + c19+ "&c20=" + c20+ "&c21=" + c21+ "&c22=" + c22);

    }

}


function send_handcrafted() { 
    
    
    var c1=""; 
    var c2=document.getElementById("name").value; 
    var c4=document.getElementById("country").value; 
    var c3=document.getElementById("email").value;  
    var c4=document.getElementById("contact").value;
    var c5=document.getElementById("days").value;   
    var c6=document.getElementById('arrival_date').value;
    var c7=document.getElementById('departure_date').value; 
    var c8=document.getElementById('adults').value;    
    var c9=document.getElementById('child').value;
    var c10=document.getElementById('infant').value;  
    var c11=document.getElementById('message1').value; 
    
    
   

    if(c2=="" || c3=="" || c4=="" || c5=="" || c6=="" || c7=="" || c8=="" || c11==""  ){
        document.getElementById("success").style.display="none";
        document.getElementById("error").style.display="block";
        setTimeout(function(){
           document.getElementById("error").style.display="none";
        }, 3000);
       
        return false;
    }
    
    document.getElementById("send_btn").disabled=true;
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
            
                document.getElementById("error").style.display="none";
                document.getElementById("success").style.display="block";
                document.getElementById("send_btn").disabled=false;
               
                setTimeout(function(){
                    document.getElementById("success").style.display="none";
                }, 3000); 

                 clear_send_handcrafted();
            
              
            }
        }

        xmlHttp.open("POST", "control/tailor_maid_mails.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3+ "&c4=" + c4+ "&c5=" + c5+ "&c6=" + c6+ "&c7=" + c7+ "&c8=" + c8+ "&c9=" + c9+ "&c10=" + c10+ "&c11=" + c11);

    }

}

function clear_send_handcrafted(){
    document.getElementById("name").value="";
    document.getElementById("country").value="";
    document.getElementById("email").value="";
    document.getElementById('contact').value="";
    document.getElementById("days").value="";
    document.getElementById('arrival_date').value="";
    document.getElementById('departure_date').value="";
    document.getElementById('adults').value="";
    document.getElementById('child').value="";  
    document.getElementById('infant').value="";
    document.getElementById('message1').value="";
   
  
         
}



