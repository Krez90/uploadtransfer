var formValid = document.getElementById("envoyer");

var destinataire = document.getElementById("destinataire");
var missDest = document.getElementById("missDest");
var destValid = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;

var expediteur = document.getElementById("expediteur");
var missExp = document.getElementById("missExp");
var expValid = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;

// var message = document.getElementById("message");
// var missMess = document.getElementById("missMess");

console.log("click",validation)
formValid.addEventListener("click",validation);

function validation(event){
    //si le champ est vide
    if (destinataire.validity.valueMissing){
        event.preventDefault();
        missDest.style.fontSize = "17px";
        missDest.textContent = "Champ obligatoire";
        missDest.style.color = "white";

        // missDest.style.paddingTop = "50px"
    //Si le format de données est incorrect
    }
    else if (destValid.test(destinataire.value) == false){
            event.preventDefault();
            missDest.style.fontSize = "17px";
            missDest.textContent = 'Format incorrect';
            missDest.style.color = 'white';
        }else{
    }

    if (expediteur.validity.valueMissing){
        event.preventDefault();
        missExp.style.fontSize = "17px";
        missExp.textContent = "Champ obligatoire";
        missExp.style.color = "white";
        //Si le format de données est incorrect
    }else if (expValid.test(expediteur.value) == false){
            event.preventDefault();
            missExp.style.fontSize = "17px";
            missExp.textContent = 'Format incorrect';
            missExp.style.color = 'white';
        }else{
    }

    // if (nom.validity.valueMissing){
    //     event.preventDefault();
    //     missMess.textContent = "Message manquant";
    //     missMess.style.color = "red";
    // }
}





// function verifMail(champ) { //on prépare une fonction de vérification du mail
//     var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
//     if (!regex.test(champ.value)) {
//         return false;
//     }

//     else {
//         return true;
//     }
// }

// var form = document.getElementById("contact"); //on récupère la totalité du formulaire dans une variable

// form.addEventListener("submit", function (monEvenement) { //On ajoute un écouteur d'évènement sur le formulaire : Quand le formulaire est envoyé, on exécute le code contenu dans les accolades de "function() {}""

//     monEvenement.preventDefault(); //On bloque le comportement par défaut du formulaire qui est normalement de s'envoyer.

//     var email = document.getElementById("destinataire");
//     var mail= document.getElementById("expediteur");
//     var message = document.getElementById("message"); //On stock les 3 champs à vérifier dans des variables différentes

//     if (email.value.length <= 0) { //on vérifie que le email n'est pas vide

//         var errorMessageBlock = email.parentNode.getElementsByClassName("errorMessage"); //on remonte d'un noeud avec "parentNode" puis on sélectionne l'élement ayant pour classe "errorMessage" dans ce noeud parent, du coup ça ne sélectionne que le p qui est frère de l'input "email" et pas tous les p ayant cette classe. Si on avait fait un document.getElementsByClassName(), on aurait eu les 3.

//         //getElementsByClassName renvoie un tableau d'élements vu qu'il peut y en avoir plusieurs. On sait qu'il n'y en a qu'un donc on peut directement viser la première case du tableau : 
//         var errorMessageBlock = errorMessageBlock[0];

//         errorMessageBlock.innerHTML = "Ce champs est obligatoire"; //on place le message entre <p> et </p>
//         errorMessageBlock.style.display = "block"; //on affiche le <p> concerné.

//     }
//     else if (email.value.length <= 0) {
//         //idem que le bloc précedent mais pour l'email vide
//         var errorMessageBlock = email.parentNode.getElementsByClassName("errorMessage");
//         var errorMessageBlock = errorMessageBlock[0];
//         errorMessageBlock.innerHTML = "Ce champs est obligatoire";
//         errorMessageBlock.style.display = "block";
//     }
    
//     else if (message.value.length <= 0) {
//         //idem que le bloc précedent mais pour le message vide
//         var errorMessageBlock = message.parentNode.getElementsByClassName("errorMessage");
//         var errorMessageBlock = errorMessageBlock[0];
//         errorMessageBlock.innerHTML = "Ce champs est obligatoire";
//         errorMessageBlock.style.display = "block";
//     }
//     else if (!verifMail(email)) { //Vérification que l'email est valide
//         var errorMessageBlock = email.parentNode.getElementsByClassName("errorMessage");
//         var errorMessageBlock = errorMessageBlock[0];
//         errorMessageBlock.innerHTML = "Veuillez entrer un email valide";
//         errorMessageBlock.style.display = "block";
//     }
//     else {
//         //Sinon, si aucun champ vide et email valide, on envoie le formulaire.
//         form.submit();
//     }
// });

// function affiche_bouton()
// {
// var isChecked=false;
// for (i=0; i<document.getElementsByTagName("input").length; i++)
// if (document.getElementsByTagName("input")[i].type=="checkbox")
// if (document.getElementsByTagName("input")[i].checked)
// isChecked=true;
// if (isChecked)
// {
// document.getElementById('submite').disabled='';
// } else {
// document.getElementById('submite').disabled='disabled';
// }
// }