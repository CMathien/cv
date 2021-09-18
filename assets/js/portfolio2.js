//Mot de passe

//Déclaration des expressions régulières et variables
let scoreMotDePasse;
let motDePasseSaisi;
const minuscules = new RegExp("[a-z]");
const majuscules = new RegExp("[A-Z]");
const chiffres = new RegExp("[0-9]");
const caracteresSpeciaux = new RegExp("\\W");
let champMotDePasse = document.getElementById("motDePasse");
let champIndicationSecurite = document.getElementById(
  "indicationForceMotDePasse"
);
//Définition des classes de sécurité
function verificationMotDePasse() {
  scoreMotDePasse = 0;
  motDePasseSaisi = champMotDePasse.value;
  //Vérification des différentes conditions
  if (motDePasseSaisi.length < 8) {
    scoreMotDePasse -= 1;
  }
  if (minuscules.test(motDePasseSaisi)) {
    scoreMotDePasse += 1;
  }
  if (majuscules.test(motDePasseSaisi)) {
    scoreMotDePasse += 1;
  }
  if (
    (minuscules.test(motDePasseSaisi) || majuscules.test(motDePasseSaisi)) &&
    chiffres.test(motDePasseSaisi)
  ) {
    scoreMotDePasse += 1;
  }
  if (caracteresSpeciaux.test(motDePasseSaisi)) {
    scoreMotDePasse += 1;
  }
  //Calcul score
  switch (scoreMotDePasse) {
    case 4:
      champMotDePasse.style.backgroundColor = "#1f9bcf";
      champIndicationSecurite.innerHTML = "Mot de passe très sécurisé";
      break;
    case 3:
      champMotDePasse.style.backgroundColor = "#4bbf73";
      champIndicationSecurite.innerHTML = "Mot de passe sécurisé";
      break;
    case 2:
      champMotDePasse.style.backgroundColor = "#f0ad4e";
      champIndicationSecurite.innerHTML = "Mot de passe faible";
      break;
    case 1:
      champMotDePasse.style.backgroundColor = "#fd7e14";
      champIndicationSecurite.innerHTML = "Mot de passe très faible";
      break;
    case 0:
      champMotDePasse.style.backgroundColor = "#d9534f";
      champIndicationSecurite.innerHTML = "Mot de passe dangereux";
      break;
    default:
  }
}

//Déclenchement du contrôle
champMotDePasse.addEventListener("keyup", verificationMotDePasse, false);
