var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
//init modal toast parallax carousel slider
 $(document).ready(function(){
     $('.slider').slider({
           full_width: true,
            Height: 400,
       });
     $('.carousel.carousel-slider').carousel({full_width: true});
     $('.parallax').parallax();
     $('.tooltipped').tooltip({delay: 50});
     // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
     
  });
//toasts
    function workIn(message, duration){
        Materialize.toast('test', 400);
    }
//show -dis when clicked
    $(document).ready(
    function(){
        $("#event").click(function () {
            $("#event-dis").slideToggle();
            $("#about-dis").slideUp()
            $("#members-dis").slideUp()
            $("#sponsor-dis").slideUp()
            $("#join-dis").slideUp()
             $("#media-dis").slideUp()
            
             
        });

    });
     $(document).ready(
    function(){
        $("#about").click(function () {
            $("#about-dis").slideToggle();
            $("#event-dis").slideUp()
            $("#members-dis").slideUp()
            $("#sponsor-dis").slideUp()
            $("#join-dis").slideUp()
             $("#media-dis").slideUp()
            
        });

    });
     $(document).ready(
    function(){
        $("#members").click(function () {
            $("#members-dis").slideToggle();
            $("#about-dis").slideUp()
            $("#event-dis").slideUp()
            $("#sponsor-dis").slideUp()
            $("#join-dis").slideUp()
             $("#media-dis").slideUp()
           
        });

    });
        $(document).ready(
    function(){
        $("#join").click(function () {
            $("#join-dis").slideToggle();
            $("#event-dis").slideUp()
            $("#about-dis").slideUp()
            $("#members-dis").slideUp()
            $("#sponsor-dis").slideUp()
             $("#media-dis").slideUp()
          
        });

    });
        $(document).ready(
    function(){
        $("#sponsor").click(function () {
            $("#sponsor-dis").slideToggle();
            $("#about-dis").slideUp()
            $("#members-dis").slideUp()
            $("#join-dis").slideUp()
            $("#event-dis").slideUp()
             $("#media-dis").slideUp()
           
        });

    });
 $(document).ready(
    function(){
        $("#media").click(function () {
            //$("#media-dis").slideToggle();
            //$("#about-dis").slideUp()
            //$("#members-dis").slideUp()
            //$("#join-dis").slideUp()
            //$("#event-dis").slideUp()
            //$("#sponsor-dis").slideUp()
            Materialize.toast('Sorry! This is not completed yet!', 4000);
        });

    });
//init tabs
      $(document).ready(function(){
    $('ul.tabs').tabs();       
  });

$(function() {
   $('.teachers').on('click', function() {
       $('.teachers-cards').addClass('animated slideInLeft').one('animationEnd', function() {
          $(this).removeClass('animated slideInLeft') 
       });
                                                                 
                    
    }); 
});

function loginOpen() {
    $('#modal2').modal('open');
}
//Interpret GET variable from url
function getUrlVars() {
var vars = {};
var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
vars[key] = value;
});
return vars;
}
//open the login modal if the username or passowrd was incorrect
if (getUrlVars()["result"]==1) {
    $(document).ready(function(){
    $('#modal2').modal('open');
  });
    
    
};

if (getUrlVars()["em"]>0) {
    $(document).ready(function(){
    $('#modal1').modal('open');
  });
    
    
};