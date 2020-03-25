//var x = 5;
//console.log(x);
//x = "This is a string";
//console.log(x);
//var mainImg = document.querySelector(".img-container img");
//var mainImg = document.querySelector("#main-img");
//var mainImg = document.getElementById("main-img");
var numberOfImages = 5;
var mainImg = document.getElementsByClassName("my-main-img")[0];
var rightButton = document.querySelectorAll(".right-button")[0];
console.log(rightButton);
rightButton.addEventListener("click", function(){
  console.log(mainImg.src);
  var mainImgSrc = mainImg.src;
  var initMainImgSrc = mainImgSrc.slice(0, -5);
  var midMainImgSrc = mainImgSrc.slice(-5, -4);
  var endMainImgSrc = mainImgSrc.slice(-4);
  midMainImgSrc = ((midMainImgSrc - 0) + 1)%numberOfImages;
  // if(midMainImgSrc < numberOfImages){
  //   midMainImgSrc = (midMainImgSrc - 0) + 1;
  // }else{
  //   midMainImgSrc = 0;
  // }

  mainImgSrc = initMainImgSrc + midMainImgSrc + endMainImgSrc;
  mainImg.src = mainImgSrc;
  console.log(initMainImgSrc);
  console.log(midMainImgSrc);
  console.log(endMainImgSrc);
});
