import './bootstrap';
import "bootstrap/dist/js/bootstrap.min.js";


//! SCROLL NAVBAR

let navbar = document.querySelector("#navbar");
let links = document.querySelectorAll(".nav-link")
// console.log(window)


window.addEventListener('scroll', ()=>{
    console.log(window.scrollY)
    let scrolled = window.scrollY;



    if(scrolled > 100){
        navbar.classList.add('navbar-blur' ,'bg-1')
        links.forEach((link) => {
            link.style.color = " burlywood";
            link.addEventListener('mouseenter', ()=>{
                link.style.color = 'black'
                link.style.borderBottom = '2px solid black'
            })
            link.addEventListener('mouseleave', ()=>{
                link.style.color = 'burlywood';
                link.style.borderBottom = "none";
            })

            });
    }
    else{
        navbar.classList.remove('navbar-blur' ,'bg-1')
        links.forEach((link) => {
            link.style.color = "black";

            link.addEventListener('mouseenter', ()=>{
                link.style.color = 'burlywood'
                link.style.borderBottom = '2px solid burlywood'
            })
            link.addEventListener('mouseleave', ()=>{
                link.style.color = 'black';
                link.style.borderBottom = "none";
            })
            });

    }


});



//! SCROLL SECTION


// elements
var elements_to_watch = document.querySelectorAll('.watch');
// callback
var callback = function(items){
  items.forEach((item) => {
    if(item.isIntersecting){
      item.target.classList.add("in-page");
    } else{
      item.target.classList.remove("in-page");
    }
  });
}
// observer
var observer = new IntersectionObserver(callback, { threshold: 0.6 } );
// apply
elements_to_watch.forEach((element) => {
  observer.observe(element);
});
