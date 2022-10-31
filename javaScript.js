
var index = 0;
slideShows();
function slideShows() {
    let i;
    const slides = document.querySelectorAll(".slide")
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    index++;
    if (index > slides.length) {
        index = 1;
    }
    slides[index - 1].style.display = "block";
    setTimeout(slideShows, 2000); // Change image every 2 seconds
}


function Hamburger_Call(){
    var items=document.querySelector(".items");
    if(items.style.display=="block"){
        items.style.display="none";
    }
    else{
        items.style.display="block";
    }
}
