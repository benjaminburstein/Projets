let nombre; //variable des nombres
let compteur = 0;  //variable compteur
let proposition; //variable pour proposer un nombre
let msg = "je pense a un nombre entre 1 et 100"; //variable message avec un message dès le début
let solution = Math.floor(Math.random() * 100) +1; //variable qui génère aléatoirement un chiffre
while(proposition != solution){ //boucle tant que proposition différent sollution
  	proposition = prompt(msg); //permet au joueur de proposer un nombre 
	compteur++ // à chaque tour le compteur fais +1
	
	if(proposition > 0 && proposition < 101 ){


		if(compteur > 7){ // si compteur dépasse 7 
			alert(msg = "Dommage la solution était " + solution);
		// alors message de défait
     //et stop la boucle
		break;
		}
		if (proposition < solution){ // si proposition inférieur solution
			alert(msg = "c'est plus.Il te reste " +  (8 - compteur )  + "coups. "); //+ typeof proposition) //alors message d'indication pour indiquer que le nombre est plus élevé
		}else if (proposition > solution){ //sinon si la proposition est supérieur à la solution 
			alert(msg = "c'est moins.Il te reste " + (8 - compteur ) + "coups. ");// + typeof proposition) //alors indication pour indiquer que le nombre est plus faible
		}
		}
		else{
		alert("ERREUR. Entrez un nombre compris entre 1 et 100");
	}
		if (proposition == solution){ //si proposition est égal à la solution
			alert(msg = "c'est gagné tu à gagné en "+ compteur+"coup"); // alors message indiquand la victoire

		}
	
	
}
		alert( msg = "replay"); //message proposant de rejouer
 		location.reload() ; //recharge la page
