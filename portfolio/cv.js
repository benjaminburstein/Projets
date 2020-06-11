//prendre chaque lien (mis dans une variable)
let logo = document.querySelector("#logo");
let aboutLink= document.querySelector("#aboutLink");
let skillsLink = document.querySelector("#skillsLink");
let expLink = document.querySelector("#expLink");
let contactLink = document.querySelector("#contactLink");
//prendre toutes les section
let main= document.querySelector("#main");
let about = document.querySelector("#about");
let skills = document.querySelector("#skills");
let exp = document.querySelector("#exp");
let contact = document.querySelector("#contact");
//prendre tous les éléments de la section principale pour l'animation
let mainH1= document.querySelector("#main h1");
let mainH12= document.querySelector("#main h1:nth-child(2)");
let mainPara= document.querySelector("#main p");
let mainAnker= document.querySelector("#main a");
//prendre le reste des éléments de la section pour l'animation
let aboutH1 = document.querySelector("#about h1 ");
let aboutPara= document.querySelector("#about p");
let aboutAnker= document.querySelector("#about a");
//éléments de la sections skills pour l'anim
let skillsH1 = document.querySelector("#skills h1");
let skillsPara = document.querySelector("#skills p");
let skillsCard = document.querySelector("#skills .skills-card");
//élément exp
let expH1 = document.querySelector("#exp h1");
let expPara = document.querySelector("#exp p");
let expCard = document.querySelector("#exp .exp-card");
//éléments de la section contact
let contactH1 = document.querySelector("#contact h1");
let contactForm = document.querySelector("#contact form");
let contactAnker= document.querySelector("#contact a");

let openModal = document.querySelector("#open-modal");


let modal = document.querySelector(".modal")
let trigger = document.querySelector(".open-modal")
let closeButton = document.querySelector(".close-modal")

function handleOpacity(opacityOne, opacityZero1, opacityZero2, opacityZero3, opacityZero4, visibilityZero1){  //fonction qui réduit l'opacité à 0 ou à 1
	opacityOne.style.opacity = 1; 
	opacityZero1.style.opacity = 0;
	opacityZero2.style.opacity = 0;
	opacityZero3.style.opacity = 0;
	opacityZero4.style.opacity = 0;
	visibilityZero1.style.visibility= "hidden";
}
function handleOpacity2(visibilityOne, opacityOne2,opacityZero1, opacityZero2, opacityZero3, opacityZero4){  //fonction qui réduit l'opacité à 0 ou à 1
	visibilityOne.style.visibility= "visible";
	opacityOne2.style.opacity = 1;
	opacityZero1.style.opacity = 0;
	opacityZero2.style.opacity = 0;
	opacityZero3.style.opacity = 0;
	opacityZero4.style.opacity = 0;
	
}
function handleAnimation(){  //fonction qui permet 
	for(let i=0; i<arguments.length; i++){
		arguments[i].classList.remove('main-animation');
		arguments[i].offsetWidth; //renvoie largeur total de l'élement a la place i du tableau argument
		arguments[i].classList.add('main-animation');
		arguments[i].classList.add('main-animation');
		
	}
}

logo.addEventListener("click",function() {
	handleOpacity2(trigger, main, about, skills, exp, contact );
	handleAnimation(mainH1, mainH12, mainPara, mainAnker);
}); 
aboutLink.addEventListener("click",function() {
	handleOpacity(about, main, skills, exp, contact, trigger);
	handleAnimation(aboutH1, aboutPara, aboutAnker);
});
skillsLink.addEventListener("click",function() {
	handleOpacity(skills, main, about, exp, contact, trigger);
	handleAnimation(skillsH1, skillsPara, skillsCard);
});
expLink.addEventListener("click",function() {
	handleOpacity(exp, main, about, skills, contact, trigger);
	handleAnimation(expH1, expPara, expCard);
});
contactLink.addEventListener("click",function() {
	handleOpacity(contact, main, about, skills, exp, trigger);
	handleAnimation(contactH1, contactForm, contactAnker);
});


function toggleModal() {
	modal.classList.toggle("show-modal");
}

function windowOnclick(e) {
	if(e.target === modal){
		toggleModal()
	}
}

trigger.addEventListener("click", toggleModal)
closeButton.addEventListener("click", toggleModal)
window.addEventListener("click", windowOnclick)

