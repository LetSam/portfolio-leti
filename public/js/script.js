/* OUVERTURE MENU PRINCIPAL **/
var burger = document.querySelector('.btn-burger');

burger.addEventListener('click', () => {
    burger.classList.toggle('active');
})


function toggleMenu(){
    const navbar = document.querySelector('.main-nav');
    const burger = document.querySelector('.btn-burger');
    burger.addEventListener('click',()=>{
      navbar.classList.toggle('show-nav');
    })
  }
  toggleMenu();

/** SCROLL UP **/
function scrollUp(){
	const  scrollUp = document.getElementById('scroll-up');
	if(this.scrollY >= 560){
		scrollUp.classList.add('show-scroll');
	}else{
		scrollUp.classList.remove('show-scroll');
	} 	
}

window.addEventListener('scroll',scrollUp);

/** SWIPER SECTION PROJETS **/
let globalIndex = 1;

showSlides ( globalIndex );

function getSlides ( index ){
    showSlides ( globalIndex += index ); 
}

function currentSlide ( index ){
    showSlides ( globalIndex = index ); 
}

function showSlides ( index ){

    const slides = document.getElementsByClassName('my-slide');
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


/** SCROLL SECTIONS ACTIVE LINK **/
const sections = document.querySelectorAll('section[id]');

window.addEventListener('scroll', scrollActive);

function scrollActive(){
    const scrollY = window.pageYOffset;

    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight;
        const sectionTop = current.offsetTop - 50;
        sectionId = current.getAttribute('id');

        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelector('.main-nav a[href*=' + sectionId + ']').classList.add('active');
        }else{
            document.querySelector('.main-nav a[href*=' + sectionId + ']').classList.remove('active');
        }
    })
}



