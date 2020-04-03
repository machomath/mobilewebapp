(function () {
  var numberOfImages = 5;
  var autoFlipDirection = -1;
  var mainImgs = document.getElementsByClassName("my-main-img");
  var onlyImgDiv = document.querySelector(".only-images");
  var buttons = document.querySelectorAll(".button");
  var autoFlip;
  var currentImgIndex = 1;
  console.log(mainImgs[currentImgIndex]);

  buttons[1].addEventListener("click", function () {
    flipImg(1);
  });//right button

  buttons[0].addEventListener("click", function () {
    flipImg(-1);
  });

  function flipImg(flipDirection){
    if(flipDirection != 0){
      mainImgs[(currentImgIndex + 1*flipDirection + 3)%3].style.zIndex = "5";
      mainImgs[currentImgIndex].style.left = (flipDirection == 1) ? "100%" : "-100%";//this line is sliding the image
      mainImgs[currentImgIndex].addEventListener("transitionend", function resettingDeck() {
        mainImgs[currentImgIndex].removeEventListener("transitionend", resettingDeck);
        mainImgs[(currentImgIndex + 1*flipDirection + 3)%3].style.zIndex = "10";
        mainImgs[currentImgIndex].style.zIndex = "0";
        mainImgs[currentImgIndex].style.left = "0";
      });
      currentImgIndex = (currentImgIndex + 1*flipDirection + 3)%3;
    }
  };


  autoFlip = setInterval(function () {
    flipImg(autoFlipDirection);
  }, 3000, autoFlipDirection);

  onlyImgDiv.addEventListener("click", function () {
    autoFlipDirection = (autoFlipDirection + 2)%3 -1;
  });

  buttons.forEach(function (item, i){
    item.addEventListener("mouseover", function () {
      autoFlipDirection = 0;
    });
    item.addEventListener("mouseout", function () {
      autoFlipDirection = 1;
    });
    item.addEventListener("click", function () {
      autoFlipDirection = 0;
    });
  });







})();

var mainImgSrc = mainImg.src;
var initMainImgSrc = mainImgSrc.slice(0, -5);
var midMainImgSrc = mainImgSrc.slice(-5, -4);
var endMainImgSrc = mainImgSrc.slice(-4);
midMainImgSrc = ((midMainImgSrc - 0) + flipDirection + numberOfImages)%numberOfImages;
mainImgSrc = initMainImgSrc + midMainImgSrc + endMainImgSrc;
mainImg.src = mainImgSrc;
