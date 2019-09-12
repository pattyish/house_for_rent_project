const current = document.querySelector('#current_image');
const imgs = document.querySelectorAll('.imags img');
const opacity = 0.6;
// set opacity to first image
imgs[0].style.opacity = opacity;
imgs.forEach( imgs => 
   imgs.addEventListener('click', imgclick));

function imgclick(e){
    
    // rest opacity
    imgs.forEach(img => (img.style.opacity = 1));
    
    // change current image src
     current.src = e.target.src
    //add fadin class
    current.classList.add('fade-in');
    
    // set time out
    setTimeout(() => current.classList.remove('fade-in'), 500);
    //c chnage opacity
    
    e.target.style.opacity = opacity;
}
           