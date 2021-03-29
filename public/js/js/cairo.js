

 var thumbnails = document.getElementsByClassName('thumbnail');
 var activeImages = document.getElementsByClassName('active');
  for (var i=0; i<thumbnails.length; i++){
      thumbnails[i].addEventListener('mousehover',function(){
          console.log(activeImages);
          if (activeImages.length >0){
              activeImages[0].classList.remove('active')
          }
          this.classList.add('active');
          document.getElementById('selected').src = this.src
      })
  }
  for (var i=0; i<thumbnails.length; i++){
      thumbnails[i].addEventListener('click',function(){
          console.log(activeImages);
          if (activeImages.length >0){
              activeImages[0].classList.remove('active')
          }
          this.classList.add('active');
          document.getElementById('selected').src = this.src
      })
  }
  
  var buttonRight = document.getElementById('slideRight');
  var buttonLeft = document.getElementById('slideLeft');


  function left(){
      document.getElementById('slider').scrollLeft -= 180;
  }
  function right() {
      document.getElementById('slider').scrollLeft += 180
  }

  function readmore() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less";
      moreText.style.display = "inline";
    }
  }

