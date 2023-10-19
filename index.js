// Variables pour le popup authentification
let ouvrirpopup = document.querySelector('.ouvrirpopupauthentification');
let authentification = document.getElementById('popup_authentification');
let fermeture = document.querySelector('.fermeture_popup');

ouvrirpopup.addEventListener('click', function(event) {
    authentification.style.display = 'block';
    fermeture.style.display = 'block';
});

//console.log(fermeture);

fermeture.addEventListener('click', function(event){
    authentification.style.display = 'none';
    fermeture.style.display = 'none';
});
alert("allo")