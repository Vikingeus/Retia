$(document).ready( function() {
   $("#slider").load("slider/about.html") 
});
function slider(arg){
    var slider = $("#slider");
    slider.fadeOut(200, function(){
        slider.load("slider/"+arg+".html", function(){
            slider.fadeIn();    
        });    
    });
}