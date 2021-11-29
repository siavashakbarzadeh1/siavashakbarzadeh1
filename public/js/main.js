// cursor point
function cursor(){
var myElement=document.querySelectorAll("a");
for(var i=0;i<myElement.length;i++){
    myElement[i].style.cursor="url(//s3-us-west-2.amazonaws.com/s.cdpn.io/3174/cursor.png), auto";
    
}
document.getElementById("body").style.cursor="url(//s3-us-west-2.amazonaws.com/s.cdpn.io/3174/cursor.png), auto";
};

// default cursor
function defaultCursor(){
    var myElement=document.querySelectorAll("a");
    for(var i=0;i<myElement.length;i++){
        myElement[i].style.cursor="pointer";
    }
    document.getElementById("body").style.cursor="default";

}


// sfondo_nero
function sfondo_nero() {
    document.querySelector("html").style.filter="invert(1)";
    document.getElementById("html").style.backgroundColor="black";
};

// gray scale
function scala_grigi() {
    document.getElementById("body").style.filter="grayscale(200%)";
    document.getElementById("body").style.backgroundColor="white";
}
// default them
function defaults_them() {
    document.getElementById("body").style.filter="invert(0)";
    document.getElementById("body").style.filter="grayscale(0)";
    document.getElementById("body").style.backgroundColor="white";
}
// zoom part
function zoom(value1) {
    document.getElementById("body").style.zoom=value1+"%";
    document.getElementById("showper").innerHTML=value1+"%";
    document.getElementById("showper").style.fontSize=14+"px";
    document.getElementById("showper").style.paddingLeft=3+"px";
    const randomColor = Math.floor(Math.random()*16777215).toString(16);
    document.getElementById("showper").style.color="#"+randomColor;
    $(function() {
        var rangePercent = $('[type="range"]').val();
        $('[type="range"]').on('change input', function() {
            rangePercent = $('[type="range"]').val();

            $('[type="range"]').css('filter', 'hue-rotate(-' + rangePercent/10 + 'turn)');
        });
    });
    
};
// default zoom
function default_zoom() {
    document.getElementById("body").style.zoom="100%";
    document.getElementById("showper").innerHTML="100%";
    document.getElementById("myrange").value="100%";

}


// select from stato of residenza
// function open_provincia(){
//      var x=document.getElementById("select");
    
//      var y=x.options[x.selectedIndex].value;
  
//     if(y=="Italy"){
        
//         document.getElementById("res_provincia").style.visibility="visible";
//         document.getElementById("res_provincia").style.display="block";
//     }else{
//         // document.getElementById("main1").style.visibility="hidden";
//         // document.getElementById("main1").style.display="none";
//         document.getElementById("res_provincia").style.visibility="hidden";
//         document.getElementById("res_provincia").style.display="none";

//     }
  
// }
// select from stato of domicilio
// function provincia_dom() {
//     var m=document.getElementById("selectdom");
//     var n=m.options[m.selectedIndex].value;
//     // alert(n);
//     if(n=="Italy"){
//         document.getElementById("dom_provincia").style.visibility="visible";
//         document.getElementById("dom_provincia").style.display="block";
//     }else{
//         document.getElementById("dom_provincia").style.visibility="hidden";
//         document.getElementById("dom_provincia").style.display="none";
//     }
    
// }



// for open all the parts
// function open_part(id) {
//     document.getElementById(id).style.visibility="visible";
//     document.getElementById(id).style.display="block";
// };

// for close the part of domicilio
function close_dom() {
    var checkbox=document.getElementById("domicilio");
    // alert(checkbox.checked);
    if(checkbox.checked==true){
        document.getElementById("close").style.visibility="hidden";
        document.getElementById("close").style.display="none";

    }else{
        document.getElementById("close").style.visibility="visible";
        document.getElementById("close").style.display="block";

    }
   }



//    $(document).ready(function(){
//        $("#select").select2();
//    });

//    $(document).ready(function(){
//     $("#privincia").select2();
//    });

//    $(document).ready(function(){
//     $("#selectdom").select2();
//    });
//    $(document).ready(function(){
//        $("#provinciadom").select2();
//    });
// empty upload file

// TYPE AND SIZE OF THE FILE
function getupload(){
    var val=document.getElementById("upload1").value;
    var split=val.split("\\").pop();
    var ex=split.split(".").pop();
    var sizefilebyte=document.getElementById("upload1").files[0].size;
    var size=Math.ceil(sizefilebyte/1024/1024);
    // alert(size);
 
    
    if(ex=="png" || ex=="jpeg" || ex== "jpg" || ex=="pdf")  {
        document.getElementById("show").innerHTML=split;
        document.getElementById("show").style.color="#158741";
        document.getElementById("show").style.fontSize="14px";

        if(size<=3){
            document.getElementById("size").innerHTML="<span>"+size+"MB"+"</span>";
            document.getElementById("size").style.color="#158741";
        }
        else{
            document.getElementById("size").innerHTML="il file deve essere inferiore a 3 mb";
            document.getElementById("size").style.color="red";
        }
    }
    else{
        document.getElementById("show").innerHTML="<span>devi solo caricare pdf o jpeg o jpg e png</span>";
        document.getElementById("show").style.color="red";
        document.getElementById("show").style.fontSize="14px";
     
    }

}

// CLEAR INPUT IN UPLOAD PART
 function clearinput(){
      document.getElementById("show").innerHTML="inserisci il tuo file";
      document.getElementById("size").innerHTML="";
      document.getElementById("show").style.fontSize="16px";
      document.getElementById("show").style.color="#3c4d69";

 }
 
    function resizeFunc(){
        var widthb=document.body.clientWidth;
      
        if(widthb<= 800){
          document.getElementById("tables").style.visibility="hidden";
          document.getElementById("tables").style.display="none";
          document.getElementById("cards").style.visibility="visible";
          document.getElementById("cards").style.display="block";
        }
         else if(widthb>=801){
             document.getElementById("cards").style.visibility="hidden";
             document.getElementById("cards").style.display="none";
             document.getElementById("tables").style.visibility="visible";
          document.getElementById("tables").style.display="block";
         }
    }



// close ham menu in full size
function openHamMenu(){
    var id1=document.getElementById("menuHam");
    var widthScreen=document.documentElement.clientWidth;

    if(widthScreen>=800){
        id1.style.visibility="hidden";
        id1.style.display="none";
    }
}




function brdClr(){
    var status= 0;
    if(status==0){
        ddocument.getElementById("card1").style.border="solid";
        document.getElementById("card1").style.borderBottomColor="red";
        document.getElementById("card2").style.borderBottomColor="red";
    }else if(status==1){
        document.getElementById("card1").style.borderBottomColor="green";
        document.getElementById("card2").style.borderBottomColor="green";
    }
}

function ShowAlert(){
   
    var Status=0;

    if(Status==0){
        
        document.getElementById("alertDanger").style.visibility="visible";
        document.getElementById("alertDanger").style.display="block";
        // document.getElementById("alertDanger").style.position="fixed";
        document.getElementById("alertSuccess").style.visibility="hidden";
        document.getElementById("alertSuccess").style.display="none";
    }
    else{
        document.getElementById("alertSuccess").style.visibility="visible";
        document.getElementById("alertSuccess").style.display="block";
        document.getElementById("alertDanger").style.visibility="hidden";
        document.getElementById("alertDanger").style.display="none";
    }
    
    
}
// close btn in admin
 function closeNav(){
     document.getElementById("mySideNav").style.display="none";
     document.getElementById("sidebar").style.width="0";
     document.getElementById("mySideNav").style.visibility="hidden";
     document.getElementById("complete").className="col-md-12";
     document.getElementById("complete").style.margin="auto";
 }
 function openNav(){
    document.getElementById("mySideNav").style.display="block";
    document.getElementById("mySideNav").style.visibility="visible";
    document.getElementById("complete").className="col-md-10";
    document.getElementById("sidebar").className="col-md-2";
 }

// next week i will complete!!!!
// function putBorder(){
    
// }