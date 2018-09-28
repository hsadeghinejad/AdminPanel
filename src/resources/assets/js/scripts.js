$(document).ready(function(){
    resizeWindow(); 
});

$(window).resize(function(){
    resizeWindow();
});

function resizeWindow(){
    if ($(window).width() >= 768)
        $('#sidebar').collapse('show');
    else
        $('#sidebar').collapse('hide');
}

$('#sidebar').on('hide.bs.collapse', function(e){
    if (e.target == this)
        $('#main').removeClass('col-md-10');
});

$('#sidebar').on('shown.bs.collapse', function () {
    $('#main').addClass('col-md-10');
});