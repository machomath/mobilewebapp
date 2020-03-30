(function () {
  var numberOfImages = 5;
  var autoFlipDirection = 1;
  var mainImg = document.getElementsByClassName("my-main-img")[0];
  var buttons = document.querySelectorAll(".button");
  var autoFlip;
  console.log(buttons);
  buttons[1].addEventListener("click", function () {
    flipImg(1);
  });//right button

  buttons[0].addEventListener("click", function () {
    flipImg(-1);
  });

  function flipImg(flipDirection){
    var mainImgSrc = mainImg.src;
    var initMainImgSrc = mainImgSrc.slice(0, -5);
    var midMainImgSrc = mainImgSrc.slice(-5, -4);
    var endMainImgSrc = mainImgSrc.slice(-4);
    midMainImgSrc = ((midMainImgSrc - 0) + flipDirection + numberOfImages)%numberOfImages;
    mainImgSrc = initMainImgSrc + midMainImgSrc + endMainImgSrc;
    mainImg.src = mainImgSrc;
  };


  autoFlip = setInterval(function () {
    flipImg(autoFlipDirection);
  }, 3000, autoFlipDirection);

  mainImg.addEventListener("click", function () {
    autoFlipDirection = (autoFlipDirection + 2)%3 -1;
    if(mainImg.style.opacity == "0"){
      mainImg.style.opacity = "1";
    }else{
      mainImg.style.opacity = "0";
    }

    //The above single line is replacing the following if else structure
    // if(autoFlipDirection == 1){
    //   autoFlipDirection = -1;
    // }else if(autoFlipDirection == -1){
    //   autoFlipDirection = 0;
    // } else{
    //   autoFlipDirection = 1;
    // }
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
