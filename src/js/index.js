import _ from 'lodash';
import '../sass/main.scss';
import './custom-navbar';
import './owl-options';
import './owl.carousel.min';
// import 'simplebar'; // or "import SimpleBar from 'simplebar';" if you want to use it manually.
// import 'simplebar/dist/simplebar.css';
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);
import search from './search';
import {searchResult} from './searchResult';


const searchInput = document.getElementById('search');
const frontOverlay = document.querySelector('.frontoverlay');
const form = document.querySelector('.frontoverlay__form');
const frontContent = document.querySelector('.frontoverlay__content');
const loadIcon = document.querySelector('.loadicon');   
const cancelIcon = document.querySelector('.cancelicon');     
const searchIcon = document.querySelector('.nav__search');
const inputFocus = document.querySelectorAll('input, textarea');

// Opening Search 
searchIcon.addEventListener('click',() =>{

    animateFrontoverlay();


})

// Closing Search 
cancelIcon.addEventListener('click',() =>{

    animateCloseFront()

})

// Function To Close Animate FrontOverlay

const animateCloseFront = () => {

    gsap.to('.frontoverlay', {opacity: 0, display: 'none', duration: 1.3,y: "-100%"});

}


// Function To Animate FrontOverlay

const animateFrontoverlay = () =>{

    frontOverlay.style.display = 'grid';

            gsap.to('.frontoverlay', {

                opacity:1,
                y:"0%",
                duration:1.3
            });
            searchInput.focus();

}

// Closing and Opening Search By Keys
document.addEventListener('keyup', (e) =>{



    if(e.keyCode == 83){
        

           

        const inputF = document.activeElement.tagName;
             
        if(inputF == 'TEXTAREA' ||  inputF == 'INPUT'){
            
            
        }else{

            animateFrontoverlay()
            
        }

    }
    if(e.keyCode == 27){


        
        animateCloseFront()
        // frontOverlay.style.display = 'none';

    }

})

let inputLetters;

form.addEventListener('submit', (e) => {

    e.preventDefault();
});

// SearchResult Control
const searchResultControl = async (e) =>{


    e.preventDefault();

    let searchValu = searchInput.value;


    if(searchValu == ''){
            
        frontContent.innerHTML = '';
            
        return
    }
    if(inputLetters == searchValu)  return;


    try{
        
        inputLetters = searchValu;
        loadIcon.style.display = 'block';
        await search(searchValu).then(data => {
            
            if(data.length != 0){

                loadIcon.style.display = 'none';

                searchResult(data);
            }else{

                loadIcon.style.display = 'none';
                loadIcon.insertAdjacentHTML('afterend', '');
                const noResult = document.querySelector('.noresult');
                frontContent.innerHTML = ''; 
                
                const frontResult = `<p class="noresult">للاسف, لا يوجد نتائج.</p>`;
                frontContent.insertAdjacentHTML('beforeend', frontResult);


            }
            
            
    
            
        })

    }
    catch(err){
        console.log(err)
    }

}




// SearchInput Eventlistener
searchInput.addEventListener('keyup', searchResultControl);
