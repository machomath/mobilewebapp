var numberOfImages = 5;
var mainImg = document.getElementsByClassName("my-main-img")[0];
var buttons = document.querySelectorAll(".button");
console.log(buttons);
buttons[1].addEventListener("click", function(){
  var mainImgSrc = mainImg.src;
  var initMainImgSrc = mainImgSrc.slice(0, -5);
  var midMainImgSrc = mainImgSrc.slice(-5, -4);
  var endMainImgSrc = mainImgSrc.slice(-4);
  midMainImgSrc = ((midMainImgSrc - 0) + 1)%numberOfImages;
  mainImgSrc = initMainImgSrc + midMainImgSrc + endMainImgSrc;
  mainImg.src = mainImgSrc;
});

buttons[0].addEventListener("click", function(){
  var mainImgSrc = mainImg.src;
  var initMainImgSrc = mainImgSrc.slice(0, -5);
  var midMainImgSrc = mainImgSrc.slice(-5, -4);
  var endMainImgSrc = mainImgSrc.slice(-4);
  midMainImgSrc = ((midMainImgSrc - 0) - 1 + numberOfImages)%numberOfImages;
  mainImgSrc = initMainImgSrc + midMainImgSrc + endMainImgSrc;
  mainImg.src = mainImgSrc;
});
