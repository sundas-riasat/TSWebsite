require('../css/index.css');
require('../css/scroll.css');
require('../css/fullpage.css');

// if (window.innerWidth <= 600) {
//   window.location.replace('./mobile/mobile.html')
// }


let mobHeader = document.getElementsByClassName('header-mob')[0];
let mobHeaderTimeout = false;
let isFirstTimeProds = true;
let isFirstTimeServices = true;
let isFirstTimeTeam = true;
let isMainSliderPaused = false;
let isPaused = false;
let isServicePaused = false;
let teamPaused = false;
let teamNumber = 0;
let menuItems = $('.menu-item');


new fullpage('#fullpage', {
  licenseKey: "",
  menu: '#menu',
  navigation: false,
  navigationPosition: 'right',
  showActiveTooltip: false,
  slidesNavigation: false,
  slidesNavPosition: 'bottom',

  css3: true,
  anchors: ['home', 'portfolio', 'services', 'clients', 'team', 'contact'],
  scrollingSpeed: 700,
  autoScrolling: true,
  fitToSection: true,
  fitToSectionDelay: 1000,
  scrollBar: false,
  easing: 'easeInOutCubic',
  easingcss3: 'ease',
  scrollOverflowOptions: null,
  touchSensitivity: 15,
  bigSectionsDestination: null,

  afterLoad: function (origin, destination, direction) {
    if (window.innerWidth < 500 && !mobHeaderTimeout) {
      showMobNav();
    }

    isPaused = false;
    isServicePaused = false;
    for (let i = 0; i < menuItems.length; i++) {
      if (menuItems[i].children[0].hash.split("#")[1] === destination.anchor) {
        menuItems[i].classList.add("active-item");
      } else {
        menuItems[i].classList.remove("active-item");
      }
    }

    let down = document.getElementsByClassName('below')[0];
    let arrow = down.children[0].children;
    if (destination.anchor === 'portfolio') {
      if (isFirstTimeProds) {
        initProds();
      }
    }
    else if (destination.anchor === 'team') {
      arrow[0].style.display = "block";
      arrow[1].style.display = "block";
      arrow[2].style.height = "5px";
      arrow[2].style.marginTop = "0px";
      arrow[2].style.cursor = "default"
      arrow[2].onclick = () => {

      }
      arrow[2].style.width = "5px";
      arrow[2].style.animation = "none";
      arrow[3].children[0].style.display = "block";
      arrow[3].children[1].style.display = "block";
      for (let i = 0; i < arrow.length; i++) {
        arrow[i].style.backgroundColor = "#085ab1";
      }
      arrow[0].style.animation = "1s animate1 infinite";
      arrow[1].style.animation = "1s animate2 infinite";
      arrow[3].children[0].style.animation = "1s animatemea infinite";
      arrow[3].children[1].style.animation = "1s animatemea infinite";
      if (isFirstTimeTeam) {
        initiate();
      }
    }
    else if (destination.anchor === 'services') {
      if (isFirstTimeServices) {
        initServices();
      }
      if (window.innerWidth >= 500) {
        arrow[0].style.display = "block";
        arrow[1].style.display = "block";
        arrow[2].style.height = "5px";
        arrow[2].style.marginTop = "0px";
        arrow[2].style.width = "5px";
        arrow[2].style.animation = "none";
        arrow[3].children[0].style.display = "block";
        arrow[3].children[1].style.display = "block";
        for (let i = 0; i < arrow.length; i++) {
          arrow[i].style.backgroundColor = "white";
        }
        arrow[0].style.animation = "1s animate1a infinite";
        arrow[1].style.animation = "1s animate2a infinite";
        arrow[3].children[0].style.animation = "1s animatemeaa infinite";
        arrow[3].children[1].style.animation = "1s animatemeaa infinite";
      }
    } else if (destination.anchor === 'contact') {
      arrow[0].style.display = "none";
      arrow[1].style.display = "none";
      arrow[2].style.height = "20px";
      arrow[2].style.marginTop = "25px";
      arrow[2].style.width = "20px";
      arrow[2].style.animation = "1s animateDot infinite";
      arrow[2].style.cursor = "pointer"
      arrow[2].onclick = () => {
        fullpage_api.moveTo('home');
      }
      arrow[3].children[0].style.display = "none";
      arrow[3].children[1].style.display = "none";
    } else {
      arrow[0].style.display = "block";
      arrow[1].style.display = "block";
      arrow[2].style.height = "5px";
      arrow[2].style.marginTop = "0px";
      arrow[2].style.cursor = "default"
      arrow[2].onclick = () => {

      }
      arrow[2].style.width = "5px";
      arrow[2].style.animation = "none";
      arrow[3].children[0].style.display = "block";
      arrow[3].children[1].style.display = "block";
      for (let i = 0; i < arrow.length; i++) {
        arrow[i].style.backgroundColor = "#085ab1";
      }
      arrow[0].style.animation = "1s animate1 infinite";
      arrow[1].style.animation = "1s animate2 infinite";
      arrow[3].children[0].style.animation = "1s animatemea infinite";
      arrow[3].children[1].style.animation = "1s animatemea infinite";
    }

  }

});

//methods
fullpage_api.setAllowScrolling(true);

let mainIcons = new Array(...document.getElementsByClassName('main-icon'));
let slides = document.getElementsByClassName('main-slide');
for (let i = 0; i < slides.length; i++) {
  slides[i].style.display = 'none';
}
slides[0].style.display = 'block';
mainIcons[0].style.filter = "contrast(1.1)";
mainIcons[0].style.boxShadow = "0px 0px 10px 3px #A7CBEB";
let inc = 1;
setInterval(() => {
  if (!isMainSliderPaused) {
    mainSlider();
  }
}, 9000);

mainSlideIndicators = $(".main-slide-indicator");
mainSlideIndicators[0].onclick = () => {
  inc = (inc + 2) % 4;
  isMainSliderPaused = true;
  mainSlider();
}
mainSlideIndicators[1].onclick = () => {
  isMainSliderPaused = true;
  mainSlider();
}
mainIcons.filter((e, i) => {
  e.onclick = () => {
    inc = i;
    isMainSliderPaused = true;
    mainSlider();
  }
})

function mainSlider() {
  for (let i = 0; i < slides.length; i++) {
    slides[i].classList.add('animated');
    slides[i].classList.remove('fadeIn');
    slides[i].classList.add('fadeOut');
    slides[i].style.display = 'none';
    mainIcons[i].style.filter = "contrast(0.8)";
    mainIcons[i].style.boxShadow = "none";
  }
  slides[inc].classList.add('animated');
  slides[inc].children[0].children[0].classList.add('animated');
  slides[inc].children[0].children[0].classList.add('slideInLeft');
  slides[inc].children[0].children[1].classList.add('animated');
  slides[inc].children[0].children[1].classList.add('slideInRight');
  slides[inc].classList.add('slow');
  slides[inc].classList.remove('fadeOut');
  slides[inc].classList.add('fadeIn');
  slides[inc].style.display = "block";
  mainIcons[inc].style.filter = "contrast(1)";
  mainIcons[inc].style.boxShadow = "0px 0px 10px 3px #A7CBEB";
  inc++;
  if (inc === slides.length) {
    inc = 0;
  }
}

let y = 1;
let prods = document.getElementsByClassName('prod');
let picons = document.getElementsByClassName('prod-icon');

for (let i = 0; i < prods.length; i++) {
  prods[i].style.display = 'none';
  picons[i].onclick = () => {
    slideProds(i);
    isPaused = true;
    y = i;
  }
}
prods[0].style.display = 'block';
picons[0].style.filter = "hue-rotate(-45deg) contrast(1)";
picons[0].style.boxShadow = "0px 0px 15px 1px #1A9FF9";
picons[0].style.border = "2px solid #1A9FF9";
function initProds() {
  setInterval(() => {
    if (!isPaused) {
      slideProds(y);
      isFirstTimeProds = false;
    }
  }, 5000);
}

function slideProds(x) {
  for (let i = 0; i < prods.length; i++) {
    prods[i].classList.add('animated');
    prods[i].classList.remove('fadeIn');
    prods[i].classList.add('fadeOut');
    prods[i].style.display = 'none';
    picons[i].style.filter = "hue-rotate(-45deg) contrast(0.9)";
    picons[i].style.boxShadow = "none";
    picons[i].style.border = "none";
  }
  prods[x].classList.add('animated');
  picons[x].style.filter = "hue-rotate(-45deg) contrast(1)";
  picons[x].style.boxShadow = "0px 0px 15px 1px #1A9FF9";
  picons[x].style.border = "2px solid #1A9FF9";
  prods[x].children[0].classList.add('animated');
  prods[x].children[0].classList.add('slideInLeft');
  prods[x].children[1].classList.add('animated');
  prods[x].children[1].classList.add('slideInRight');
  prods[x].classList.add('slow');
  prods[x].classList.remove('fadeOut');
  prods[x].classList.add('fadeIn');
  prods[x].style.display = "block";
  y++;
  if (y === prods.length) {
    y = 0;
  }
}




let circles = document.getElementsByClassName("service-icon");
let services = document.getElementsByClassName("right-s");
for (let i = 0; i < services.length; i++) {
  services[i].classList.add("animated");
  circles[i].onclick = () => {
    slideServices(i);
    isServicePaused = true;
    serviceNumber = i;
  }
}
services[0].style.display = "block";
circles[0].style.filter = "contrast(1)";
circles[0].style.boxShadow = "0px 0px 15px 1px #1A9FF9";
circles[0].style.border = "2px solid #1A9FF9";
let serviceNumber = 1;
function initServices() {
  setInterval(() => {
    if (!isServicePaused) {
      slideServices(serviceNumber);
      isFirstTimeServices = false;
    }
  }, 5000);
}

function slideServices(x) {
  for (let i = 0; i < services.length; i++) {
    services[i].style.display = "none";
    circles[i].style.filter = "contrast(0.9)";
    circles[i].style.boxShadow = "none";
    circles[i].style.border = "none";
    services[i].classList.remove("fadeIn");
    services[i].classList.add("fadeOut");
  }
  circles[x].style.filter = "contrast(1)";
  circles[x].style.boxShadow = "0px 0px 15px 1px #1A9FF9";
  circles[x].style.border = "2px solid #1A9FF9";
  services[x].style.display = "block";
  services[x].classList.remove("fadeOut");
  services[x].classList.add("fadeIn");
  serviceNumber++;
  if (serviceNumber === services.length) {
    serviceNumber = 0;
  }
}

let ham = document.getElementsByClassName('ham')[0];
let menu = document.getElementsByClassName('mob-menu')[0];
ham.onclick = () => {
  menu.classList.add("animated");
  menu.classList.remove("slideOutUp");
  menu.classList.add("slideInDown");
  menu.style.display = "block";
}
function closeMenu() {
  menu.classList.add("animated"); 
menu.classList.remove("slideInDown");
menu.classList.add("slideOutUp");
}

let sicons = $('.right-s .icon');
for (let i = 0; i < sicons.length; i++) {
  sicons[i].style.height = Math.floor(Math.random() * (+80 - +50)) + +50 + "px";
}




team = $('.team-holder');
for (let i = 0; i < team.length; i++) {
  team[i].style.display = 'none';
}
team[0].style.display = 'block';

teamNumber = 1;

let tleft = document.querySelector('.left-a');
tleft.onclick = () => {
  teamNumber = Math.abs(teamNumber + 1);
  if (teamNumber === team.length) {
    teamNumber = 0;
  }
  teamSlider()
  teamPaused = true;
}
let tright = document.querySelector('.right-a');
tright.onclick = () => {
  teamSlider()
  teamPaused = true;
}

function initiate() {
  teamInterval = setInterval(() => {
    if (window.innerWidth > 500) {
      if (!teamPaused) {
        teamSlider();
      }
    }
    isFirstTimeTeam = false
  }, 7000)
}

for (let i = 0; i < team.length; i++) {
  team[i].addEventListener('mouseover', () => {
    teamPaused = true;
  });
  team[i].addEventListener('mouseout', () => {
    teamPaused = false;
  })
}


function teamSlider() {
  for (let i = 0; i < team.length; i++) {
    team[teamNumber].classList.add('animated');
    team[teamNumber].classList.add('fadeOut');
    team[teamNumber].classList.remove('fadeIn');
    team[i].style.display = 'none';
  }
  team[teamNumber].classList.add('animated');
  team[teamNumber].classList.add('fadeIn');
  team[teamNumber].classList.remove('fadeOut');
  team[teamNumber].style.display = 'block';
  teamNumber++
  if (teamNumber === team.length) {
    teamNumber = 0;
  }
}

function showMobNav() {
  mobHeader.classList.remove('slideOutUp');
  mobHeader.classList.add('animated');
  mobHeader.classList.add('slideInDown');
  mobHeader.style.display = "block";
  mobHeaderTimeout = true;
  setTimeout(() => {
    hideMobNav();
    mobHeaderTimeout = false;
  }, 5000);
}

function hideMobNav() {
  mobHeader.classList.remove('slideInDown');
  mobHeader.classList.add('slideOutUp');
}

document.onclick = () => {
  if (window.innerWidth < 500) {
    if ("inp" !== document.activeElement.classList[0]) {
      footer.style.display = "block";
    } else {
      footer.style.display = "none";
    }
  }
}
