setTimeout(slideShow, 7000);

var index = 0;
function slideShow(){
    // creates my grand array of pictures
    var images = document.getElementsByClassName('landing-image');

    /*
    Sets the current and next index to properly set the zindexes
    of the current and next slides so the current shows on top of
    the next slide.
    */
    var currentIndex = index;
    var nextIndex = index + 1;
    if(nextIndex >= images.length){
        nextIndex = 0;
    }
    images[currentIndex].style.zIndex = '2';
    images[nextIndex].style.zIndex = '1';

    /*
    Gives the current slide the slide-left class to initiate the CSS
    animation. Then after 1.5 seconds (duration of the animation)
    it removed the slide-left class and sets the z-index to 0 so
    it shows behind the slides that are on deck and currently active.
    */
    images[currentIndex].getElementsByClassName("slide-image")[0].classList.remove("image-zoom");
    images[currentIndex].classList.add("slide-left");
    images[nextIndex].getElementsByClassName("slide-image")[0].classList.add("image-zoom");
    setTimeout(function(){
        images[currentIndex].classList.remove("slide-left");
        images[currentIndex].style.zIndex = '0';
    }, 2000);

    // Increments index to prep the next slide
    index++;
    if(index >= images.length){
        index = 0;
    }

    // calls function again in 5 seconds
    setTimeout(slideShow, 7000);
}
