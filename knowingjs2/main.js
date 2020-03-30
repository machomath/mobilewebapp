var numberOfImages = 5;
var mainImg = document.getElementsByClassName("my-main-img")[0];
var buttons = document.querySelectorAll(".button");
console.log(buttons);
buttons[1].addEventListener("click", function () {
  flipImg(1);
});//right button

buttons[0].addEventListener("click", function () {
  flipImg(-1);
});

var flipImg = function (flipDirection){
  var mainImgSrc = mainImg.src;
  var initMainImgSrc = mainImgSrc.slice(0, -5);
  var midMainImgSrc = mainImgSrc.slice(-5, -4);
  var endMainImgSrc = mainImgSrc.slice(-4);
  midMainImgSrc = ((midMainImgSrc - 0) + flipDirection + numberOfImages)%numberOfImages;
  mainImgSrc = initMainImgSrc + midMainImgSrc + endMainImgSrc;
  mainImg.src = mainImgSrc;
};

// var flipImg = (flipDirection) => {
//   var mainImgSrc = mainImg.src;
//   var initMainImgSrc = mainImgSrc.slice(0, -5);
//   var midMainImgSrc = mainImgSrc.slice(-5, -4);
//   var endMainImgSrc = mainImgSrc.slice(-4);
//   midMainImgSrc = ((midMainImgSrc - 0) + flipDirection + numberOfImages)%numberOfImages;
//   mainImgSrc = initMainImgSrc + midMainImgSrc + endMainImgSrc;
//   mainImg.src = mainImgSrc;
// }
