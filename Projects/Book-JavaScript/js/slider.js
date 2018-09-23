


let sliderImg    = document.querySelectorAll(".image"),
  	arrowLeft    = document.getElementById("arrowLeft"),
    arrowRight   = document.getElementById("arrowRight"),
 	  current      = 0;




function clear() {
  for (let i = 0; i < sliderImg.length; i++) {
    sliderImg[i].style.display = "none";
  }
}


function init() {
  clear();
  sliderImg[0].style.display = "block";
}

arrowLeft.addEventListener("click", function() {
  if (current === 0) {
    current = sliderImg.length;
  }
  imageLeft();
});




function imageLeft() {
  clear();
  sliderImg[current - 1].style.display = "block";
  current--;
}



arrowRight.addEventListener("click", function() {
  if (current === sliderImg.length - 1) {
    current = -1;
  }
  imageRight();
});

function imageRight() {
  clear();
  sliderImg[current + 1].style.display = "block";
  current++;
}




init();


