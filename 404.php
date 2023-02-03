<!DOCTYPE html>
<html lang="en">
<head>
<title>JobVersify</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" type="image/x-icon" href="favicon.png"> 
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div style="overflow-x:hidden; width: 100%;">
   
    
 <section class="thank">
    <div class="container">
        <div class="row">
        <div class="col-lg-12 text-center">
            <h2>404 Page not found</h2>
            <a class="dfltBtn mt-5" href="./">Homepage <span></span></a>
            </div>
        
        </div> 
        </div>    
    </section>   
    

</div>
<script src="js/jquery-3.4.1.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/wow.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script>
$(document).ready(function(){
    $(".navbar-toggler").click(function(){
        $(".navbar-collapse1").css("right","0");
        
    });
    $(".navbar-collapse1 .nav-link").click(function(){
        $(".navbar-collapse1").css("right","-350px");
    });
    $(".navbar-collapse1 .shut").click(function(){
        $(".navbar-collapse1").css("right","-350px");
    });
});     
$(document).ready(function(){
    
    //Animations
         wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
      }
      }
    );
    wow.init(); 
        
  //Phone functionality
    $("#shoSld1").click(function(){ $(".phone span").css("left","100%"); $("#sld1").css("left","0"); });     
    $("#shoSld2").click(function(){ $(".phone span").css("left","100%"); $("#sld2").css("left","0"); });     
    $("#shoSld3").click(function(){$(".phone span").css("left","100%"); $("#sld3").css("left","0");  });    
    $("#shoSld4").click(function(){ $(".phone span").css("left","100%"); $("#sld4").css("left","0"); });   
    $("#shoSld5").click(function(){ $(".phone span").css("left","100%"); $("#sld5").css("left","0"); });     
    $("#shoSld6").click(function(){ $(".phone span").css("left","100%"); $("#sld6").css("left","0"); });     
    $("#shoSld7").click(function(){$(".phone span").css("left","100%"); $("#sld7").css("left","0");  });    
    $("#shoSld8").click(function(){ $(".phone span").css("left","100%"); $("#sld8").css("left","0"); });   
    
    $("#shoSld1").mouseenter(function(){ $(".phone span").css("left","100%"); $("#sld1").css("left","0"); });     
    $("#shoSld2").mouseenter(function(){ $(".phone span").css("left","100%"); $("#sld2").css("left","0"); });     
    $("#shoSld3").mouseenter(function(){$(".phone span").css("left","100%"); $("#sld3").css("left","0");  });    
    $("#shoSld4").mouseenter(function(){ $(".phone span").css("left","100%"); $("#sld4").css("left","0"); });    
    $("#shoSld5").mouseenter(function(){ $(".phone span").css("left","100%"); $("#sld5").css("left","0"); });     
    $("#shoSld6").mouseenter(function(){ $(".phone span").css("left","100%"); $("#sld6").css("left","0"); });     
    $("#shoSld7").mouseenter(function(){$(".phone span").css("left","100%"); $("#sld7").css("left","0");  });    
    $("#shoSld8").mouseenter(function(){ $(".phone span").css("left","100%"); $("#sld8").css("left","0"); });    
    
    
//Sticky nav    
  $(window).scroll(function() {    
    var scroll = $(window).scrollTop();

     
    if (scroll >= 300) {
        $("header").addClass("fix");
    }
      if (scroll <= 300) {
        $("header").removeClass("fix");
    }
});    
    
    
    
    
    
    
    
     });
    
  


    
    
    
</script>
</body>
</html>