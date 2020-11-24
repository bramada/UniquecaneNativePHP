// TRANSLATE PAGE
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,id,it,fr,zh-CN,sv',
    layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}

(function(){var gtConstEvalStartTime = new Date();
  
 function d(b){var a=document.getElementsByTagName("head")[0];a||(a=document.body.parentNode.appendChild(document.createElement("head")));a.appendChild(b)}function _loadJs(b){var a=document.createElement("script");a.type="text/javascript";a.charset="UTF-8";a.src=b;d(a)}function _loadCss(b){var a=document.createElement("link");a.type="text/css";a.rel="stylesheet";a.charset="UTF-8";a.href=b;d(a)}function _isNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)if(!(a=a[b[c]]))return!1;return!0}
 function _setupNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)a.hasOwnProperty?a.hasOwnProperty(b[c])?a=a[b[c]]:a=a[b[c]]={}:a=a[b[c]]||(a[b[c]]={});return a}window.addEventListener&&"undefined"==typeof document.readyState&&window.addEventListener("DOMContentLoaded",function(){document.readyState="complete"},!1);
 if (_isNS('google.translate.Element')){return}(function(){var c=_setupNS('google.translate._const');c._cest = gtConstEvalStartTime;gtConstEvalStartTime = undefined;c._cl='en';c._cuc='googleTranslateElementInit';c._cac='';c._cam='';c._ctkk='442456.2586365853';var h='translate.googleapis.com';var s=(true?'https':window.location.protocol=='https:'?'https':'http')+'://';var b=s+h;c._pah=h;c._pas=s;c._pbi=b+'/translate_static/img/te_bk.gif';c._pci=b+'/translate_static/img/te_ctrl3.gif';c._pli=b+'/translate_static/img/loading.gif';c._plla=h+'/translate_a/l';c._pmi=b+'/translate_static/img/mini_google.png';c._ps=b+'/translate_static/css/translateelement.css';c._puh='translate.google.com';_loadCss(c._ps);_loadJs(b+'/translate_static/js/element/main.js');})();})();
// END TRANSLATE PAGE

// VIDEO
var myvid = $('#myVid')[0];
$(window).scroll(function(){
  var scroll = $(this).scrollTop();
  scroll > 200 ? myvid.pause() : myvid.play()
})
// END VIDEO

// LIGHTBOX
lightbox.option({
  'wrapAround': true,
  'disableScrolling': true,
  'positionFromTop': 10
})
// END LIGHTBOX

//AOS
AOS.init();
// END AOS

//SEARCH
function mySearch() {
  var x = document.getElementById("mySeIn");
  if (x.style.display === "none") {
    x.style.display = "block";
    document.getElementById("navbar").style.display = "none";
    document.getElementById("icSearch").className = "fa fa-close"; 
    document.forms['fSearch'].elements['inSearch'].focus();
  } else {
    x.style.display = "none";
    document.getElementById("navbar").removeAttribute("style");
    document.getElementById("icSearch").className = "fa fa-search"; 
  }
  
}
// END SEARCH

// SCROOLTOP & FIXED NAV SCROLL
var mybutton = document.getElementById("myBtnSc");
var logo = document.getElementById("logo"); 
var jt = document.getElementById("jt");        
//Saat scroll kebawah 20px dari atas, tampilkan button scrolltop
window.onscroll = function() {scrollFunction()};   
function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    mybutton.style.display = "block"; //scroll
    logo.style="height:40px"; //logo
    logo.src="img/logo-2.png"; //logo
    jt.style="background-position: 0 64px"; //jumbotron
  } else {
    mybutton.style.display = "none";
    logo.style="height:70px";
    logo.src="img/logo-2.png";
    jt.style="background-position: 0 86px"; //jumbotron
  }
}  
//klik button
function topFunction() {
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
}
// END SCROOLTOP

//HOVER HOME PRODUCT
function hover(hImg) {   
  hImg.src = hImg.src.replace(".jpg", "-2.jpg");
}
function unhover(hImg) {  
  hImg.src = hImg.src.replace("-2.jpg", ".jpg");
}
//END HOVER HOME PRODUCT

// DRIFT ZOOM
var jml=$(".jumlah").length;
var i;
  for (i = 1; i <= jml; i++) {
  new Drift(document.querySelector('.drift-demo-trigger'+i), {
    paneContainer: document.querySelector('.detail'),
    inlinePane: 767,
    inlineOffsetY: -85,
    containInline: true,
    hoverBoundingBox: true
  });
}
// END DRIFT ZOOM

// PRODUCT THUMBNAIL
var slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
  showSlides(slideIndex += n);
}
function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demox");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
// END PRODUCT THUMBNAIL

