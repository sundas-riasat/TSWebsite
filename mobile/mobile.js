



var txt = document.getElementById("loadTxt");
var c = 1;
let ldr = document.getElementsByClassName('preloader')[0];
c = 58;
txt.innerText = "[" + c + "%]";
window.addEventListener('load', function () {
  txt.innerText = "[100%]";
  ldr.classList.add("animated");
  ldr.classList.add("fadeOut");
  ldr.style.display = "none";
});

let ham = document.getElementsByClassName('ham')[0];
let menu = document.getElementsByClassName('mob-menu')[0];
ham.onclick = () => {
  menu.style.top = (window.pageYOffset) + 'px';
  menu.classList.add("animated");
  menu.classList.remove("slideOutUp");
  menu.classList.add("slideInDown");
  menu.style.display = "block";
  menu.style.top = window.pageYOffset;
}

function closeMenu() {
  let menu = document.getElementsByClassName('mob-menu')[0];
  menu.classList.add("animated");
  menu.classList.remove("slideInDown");
  menu.classList.add("slideOutUp");
}


let mainSlides = document.getElementsByClassName('main-slide');
Array.prototype.forEach.call(mainSlides, (e) => {
  e.style.display = 'none';
})
mainSlides[0].style.display = 'block';
setSlider(mainSlides)

// ************Slider Functions*****************


function setSlider(slides) {
  let prog = 1;
  var progBar = document.getElementsByClassName('progress-bar')[0];
  var inc = 1;
  setInterval(() => {
    prog = 0;
    slideshow(slides, inc)
    inc++;
    if (inc === slides.length) {
      inc = 0;
    }
  }, 9000);
  setInterval(() => {
    progBar.style.width = (prog + 1) + '%';
    prog = (prog + 1)
  }, 80)
}
function slideshow(slides, inc) {
  for (let i = 0; i < slides.length; i++) {
    slides[i].classList.add('animated');
    slides[i].classList.remove('fadeIn');
    slides[i].classList.add('fadeOut');
    slides[i].style.display = 'none';
  }
  slides[inc].classList.add('animated');
  slides[inc].children[0].classList.add('animated');
  slides[inc].children[0].classList.add('slideInLeft');
  slides[inc].children[1].classList.add('animated');
  slides[inc].children[1].classList.add('slideInRight');
  slides[inc].classList.add('slow');
  slides[inc].classList.remove('fadeOut');
  slides[inc].classList.add('fadeIn');
  slides[inc].style.display = "block";
}
var firstTime = [true, true, true, true];
var $animation_elements = $('.card__image');
var $animation_elements2 = $('.card__content');
var $window = $(window);

$window.on('scroll', check_if_in_view);

function check_if_in_view() {
  if (firstTime.indexOf(true) !== -1) {
    var window_height = $window.height();
    var window_top_position = $window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);

    $.each($animation_elements, function (index) {

      var $element = $(this);
      var element_height = $element.outerHeight();
      var element_top_position = $element.offset().top;
      var element_bottom_position = (element_top_position + element_height);

      //check to see if this current container is within viewport
      if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position && firstTime[index] == true)) {
        firstTime[index] = false;
        $element.css('animation', 'ImageFadeIn .8s forwards');
        $animation_elements2[index].style.animation = 'ContentFadeIn .8s forwards';
      }
      else {
        // $element.css('animation', 'none');
        // $animation_elements2[index].style.animation = 'none';
      }
    });
  }
}


