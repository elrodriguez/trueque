
// ========= Preloader
window.onload = function () {
  window.setTimeout(fadeout, 500);
}

function fadeout() {
  document.querySelector('.preloader').style.opacity = '0';
  document.querySelector('.preloader').style.display = 'none';
}

// ========= main-menu 10  activation
let menuToggle10 = document.querySelector('.menu-style-10 .menu-toggle');
menuToggle10.addEventListener('click', () => {
  menuToggle10.classList.toggle('active');
})

// =========== select-item-5 active
selectItem5=document.querySelectorAll("#select-item-5 .single-item");
for(var i=0; i<selectItem5.length; i++){
    selectItem5[i].onclick=function(){
    var el=selectItem5[0];
    while(el){
        if(el.tagName==="DIV"){
        el.classList.remove("active");
        }
        el=el.nextSibling;
    }
    this.classList.add("active");
    };
}

// =========== select-color-5 active
selectColor5=document.querySelectorAll("#select-color-5 li");
for(var i=0; i<selectColor5.length; i++){
    selectColor5[i].onclick=function(){
    var el=selectColor5[0];
    while(el){
        if(el.tagName==="LI"){
        el.classList.remove("active");
        }
        el=el.nextSibling;
    }
    this.classList.add("active");
    };
}

//======== tiny slider for content-card-style-7
tns({
  autoplay: true,
  autoplayButtonOutput: false,
  mouseDrag: true,
  gutter: 0,
  container: ".content-card-style-7",
  center: true,
  nav: true,
  controls: false,
  speed: 400,
  controlsText: [
      '<i class="lni lni-arrow-left-circle"></i>',
      '<i class="lni lni-arrow-right-circle"></i>',
  ],
  responsive: {
      0: {
          items: 1,
      },
  }
});

//====== counter up 
var cu = new counterUp({
  start: 0,
  duration: 2000,
  intvalues: true,
  interval: 100,
  append: " ",
});
cu.start();