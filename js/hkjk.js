$("#menu-item-10,#menu-item-11,#menu-item-12").hasClass("current-menu-item") ? $("#menu-item-10,#menu-item-11,#menu-item-12").removeClass("current-menu-item") : console.log("asdadasdasdasdasd"), $(".gotop").click(function () {
    $("html,body").animate({scrollTop: $("header").offset().top}, "fast")
});
var url = window.location.href;

function hoverFunction() {
    var e = this.getElementsByClassName("img"), n = url + "wp-content/themes/GDC/images/" + e[0].dataset.imghover;
    e[0].setAttribute("src", n)
}

function nonhoverFunction() {
    var e = this.getElementsByClassName("img"), n = url + "wp-content/themes/GDC/images/" + e[0].dataset.imgnonhover;
    e[0].setAttribute("src", n)
}

for (var imgdiv = document.querySelectorAll(".office-information-boxshadow"), i = 0; i < imgdiv.length; i++) imgdiv[i].addEventListener("mouseover", hoverFunction, !1), imgdiv[i].addEventListener("mouseout", nonhoverFunction, !1);
$(window).on("scroll", function () {
    $(window).scrollTop() > 1350 && ($(".right").addClass("animate__animated animate__lightSpeedInRight"), $(".left").addClass("animate__animated animate__lightSpeedInLeft"), $("#show-more").addClass("animate__animated animate__rotateIn")), $(window).scrollTop() > 2e3 && $(".zoom").addClass("animate__animated animate__zoomInUp animate__fast"), $(window).scrollTop() > 3700 && $(".down").addClass("animate__animated animate__backInUp")
}), $("#top-menu li").hover(function () {
    $(this).addClass("hvr-hang")
}), $(document).ready(function () {
    $("#carousel1").owlCarousel()
}), $("#carousel1").owlCarousel({
    loop: !0,
    nav: !0,
    dots: !1,
    responsiveClass: !0,
    responsive: {0: {items: 1}, 600: {items: 3}, 1000: {items: 3, nav: !0}}
}), $(document).ready(function () {
    $("#carousel2").owlCarousel()
}), $("#carousel2").owlCarousel({
    loop: !0,
    margin: 10,
    nav: !1,
    dots: !0,
    responsiveClass: !0,
    responsive: {0: {items: 3, margin: 130}, 600: {items: 3, nav: !1}, 1000: {items: 5, nav: !0, loop: !1}}
});
var btns = document.getElementsByClassName("read_more");
for (i = 0; i < btns.length; i++) btns[i].addEventListener("click", changeClass);

function changeClass() {
    for (var e = this.previousSibling.previousSibling.childNodes, n = 0; n < e.length; n++) if (null != e[n].className && e[n].className.includes("extra_content")) {
        e = e[n];
        break
    }
    e.classList.toggle("show"), e.classList.contains("show") ? this.innerHTML = "Show Less" : this.innerHTML = "Show More"
}