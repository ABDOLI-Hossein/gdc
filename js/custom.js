
/*var first = owlCarouselActive[0]; //get first item
var last = owlCarouselActive[owlCarouselActive.length - 1]; //get last item*/
/*
first.style.opacity = 0.2;
last.style.opacity = 0.2;*/





/*
$("#card").hover(function(){
    alert($(document).scrollTop() );
});
*/

    if($("#menu-item-16").hasClass("current-menu-item")){
        $(this).removeClass("current-menu-item")
    }else {
        console.log("asdadasdasdasdasd")
    }




var url = window.location.href;
function hoverFunction(){

    var img = this.getElementsByClassName("img");
    var urlpath = url+"wp-content/themes/GDC/images/";
    var hoverimg = img[0].dataset.imghover;
    var srctoset = urlpath + hoverimg;
    img[0].setAttribute("src",srctoset)
}

function nonhoverFunction() {

    var img = this.getElementsByClassName("img");
    var urlpath = url+"wp-content/themes/GDC/images/";
    var hoverimg = img[0].dataset.imgnonhover;
    var srctoset = urlpath + hoverimg;
    img[0].setAttribute("src",srctoset)
}

var  imgdiv = document.querySelectorAll(".office-information-boxshadow")
for (var i=0;i<imgdiv.length;i++){
    imgdiv[i].addEventListener("mouseover",hoverFunction,false)
    imgdiv[i].addEventListener("mouseout",nonhoverFunction,false)
}











$(window).on("scroll", function() {

    if($(window).scrollTop() > 1350) {
        $(".right").addClass("animate__animated animate__lightSpeedInRight");
        $(".left").addClass("animate__animated animate__lightSpeedInLeft");
        $("#show-more").addClass("animate__animated animate__rotateIn");


    }
    if($(window).scrollTop() > 2000) {
        $(".zoom").addClass("animate__animated animate__zoomInUp animate__fast");
    }

    if($(window).scrollTop() > 3700) {
        $(".down").addClass("animate__animated animate__backInUp");
    }



});





$("#top-menu li").hover(function () {
    $(this).addClass("hvr-hang");
})





$(document).ready(function(){
    $("#carousel1").owlCarousel();
});
$('#carousel1').owlCarousel({
    loop:true,
    nav:true,
    dots: false,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,

        },
        600:{
            items:3
        },
        1000:{
            items:3,
            nav:true,
        }
    }
});


$(document).ready(function(){
    $("#carousel2").owlCarousel();
});
$('#carousel2').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots: true,
    responsiveClass:true,
    responsive:{
        0:{
            items:3,
            margin: 60
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
})



var btns = document.getElementsByClassName("read_more");
for(var i=0;i<btns.length;i++){
    btns[i].addEventListener( 'click' , changeClass);
}
function changeClass() {
    var content = this.previousSibling.previousSibling.childNodes;

    for (var i = 0; i < content.length; i++) {
        if(content[i].className!= undefined){
            if (content[i].className.includes("extra_content") ) {
                content = content[i];
                break;
            }
        }
    }
    var btn =this;
    content.classList.toggle('show');

    if (content.classList.contains("show")) {
        btn.innerHTML = "Show Less";
    } else {
        btn.innerHTML = "Show More";
    }
}


