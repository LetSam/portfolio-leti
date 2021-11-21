let globalIndex = 1;

showSlides ( globalIndex );

function getSlides ( index ){
    showSlides ( globalIndex += index ); 
}

function currentSlide ( index ){
    showSlides ( globalIndex = index ); 
}

function showSlides ( index ){
    const slides = document.getElementsByClassName('mySlide');
    const dots = document.getElementsByClassName('dot');

    if ( index > slides.length ){globalIndex = 1;}
    if ( index < 1 ){globalIndex = slides.length;}

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";       
    }

    for (let i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("active", '');
    }

    slides[globalIndex - 1].style.display = "block";
    dots[globalIndex - 1].className += "active";

}

