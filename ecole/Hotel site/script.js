//la recuperation des elements
const form = document.querySelector("#form");
const username = document.querySelector('#username');
const email = document.querySelector('#email');
const password = document.querySelector('#password');
const password2 = document.querySelector('#password2');

//Evenements
form.addEventListener('submit',e=>{
    e.preventDefault();

    form_verify();
})
//Fonctions
function form_verify(){
  //Obtenir toute les valeurs des inputs
  const uservalue = username.value.trim(); //Enleve les espaces du debut et la fin
  const emailvalue = email.value.trim();
  const pwdvalue = password.value.trim();
  const pwd2value = password2.value.trim();

  //Username verify
  if (uservalue === ""){
    let message ="Username ne peut pas être vide";
    setError(username,message); //gerer l'erreur
  } else if(!uservalue.match(/^[a-zA-Z]/)){
    let message="username doit commencer par une lettre";
    setError(username,message)  

  }
}
function setError(elem,message){
    const formControl = elem.parentElement;
    const small = formControl.querySelector('small');

    //Ajout du message d'erreur
    small.innertText = message

    //Ajout de la classe d'erreur
    formControl.className ="Form-control error";
}