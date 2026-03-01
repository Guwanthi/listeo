 
 function loading1(id,st){

    if(st==1){
        document.getElementById(id).classList.remove("display_none");
        document.getElementById(id).classList.add("display_block");
    }else{
         document.getElementById(id).classList.add("display_none");
         document.getElementById(id).classList.remove("display_block");
    }
    
 }

  function loading2(val,st){
      var id1="btn_loading"+val;
      var id2="btn"+val;
      if(st==1){
        document.getElementById(id1).classList.remove("display_none");
        document.getElementById(id1).classList.add("display_block");
        document.getElementById(id2).disabled=true;
      }else{

        document.getElementById(id1).classList.add("display_none");
        document.getElementById(id1).classList.remove("display_block");
        document.getElementById(id2).disabled=false;
      }
 }

 function display_image(id,st){
    if(st==1){ 
        document.getElementById(id).classList.remove("display_none");
        document.getElementById(id).classList.add("display_block");
    }else{
         document.getElementById(id).classList.add("display_none");
         document.getElementById(id).classList.remove("display_block");
    }
 }

 function set_image_url(id,res){
    document.getElementById(id).src=res;  
 }





 function success_msg(msg){
             toastr.success("", msg, {
                    positionClass: "toast-top-full-width",
                    timeOut: 5e3,
                    closeButton: !0,
                    debug: !1,
                    newestOnTop: !0,
                    progressBar: !0,
                    preventDuplicates: !0,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: !1
                })
        }

        function error_msg(msg){
             toastr.error("", msg, {
                    positionClass: "toast-top-full-width",
                    timeOut: 5e3,
                    closeButton: !0,
                    debug: !1,
                    newestOnTop: !0,
                    progressBar: !0,
                    preventDuplicates: !0,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: !1
                })
        }