/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
}

// go-top button
$(document).ready(function() {
    // Animate the scroll to top
    $('.go-top').click(function(event) {
        event.preventDefault();
        
        $('html, body').animate({scrollTop: 0}, 1000);
    });
});

$(document).ready(function(){
    
    jQuery(".down-arrow").effect("bounce", {distance: 10, times: 1}, 2000);
    
    var interval = setInterval(function(){ 
        jQuery(".down-arrow").effect("bounce", {distance: 10, times: 1}, 2000);
    }, 2000); // every half second
});