//Juste prix

//Définition des tableaux avec les objets
const nomObjet = [
  "Une casserole en cuivre",
  "Une paire de bottines",
  "Un couteau",
  "Un moule à kouglof",
  "Un nain de jardin",
];
const imageObjet = [
  "casserole.jpg",
  "chaussures.jpg",
  "couteau.jpg",
  "kouglof.jpg",
  "nain.jpg",
];
//Déclaration des différentes variables
let prixPropose;
let prixAleatoire;
let nombreAleatoire;
let compteurTentative;
let image = document.getElementById("imageObjet");
let nomImage = document.getElementById("nomObjet");
let validerPrix = document.getElementById("validerPrix");
let reponse = document.getElementById("reponse");

//Fonction permettant de générer un nombre aléatoire pour choisir un objet et définir son prix
function genererChiffre(valeurMax) {
  return Math.floor(Math.random() * Math.floor(valeurMax));
}

prixAleatoire = genererChiffre(100) + 1;
nombreAleatoire = genererChiffre(5);
console.log(prixAleatoire);

function afficherImage(valeur) {
  return (
    '<img src="assets/images/' +
    valeur +
    '" class="card-img-top images-juste-prix m-2 img-fluid img-thumbnail" alt="Objet dont le prix est à deviner"> '
  );
}
image.innerHTML = afficherImage(imageObjet[nombreAleatoire]);
nomImage.innerHTML = nomObjet[nombreAleatoire];
compteurTentative = 10;

//Contrôle du prix proposé
function verificationPrix() {
  prixPropose = document.getElementById("prixPropose").value;
  if (prixPropose < 0 || prixPropose > 100) {
    reponse.innerHTML =
      '<div class="alert alert-danger">Vous devez saisir un prix compris entre 0 et 100.</div>';
  } else {
    if (compteurTentative == 0) {
      reponse.innerHTML =
        '<div class="alert alert-danger">Mauvaise réponse ! Le juste prix était de ' +
        prixAleatoire +
        " euros. Vous avez épuisé toutes vos chances</div>";
      validerPrix.disabled = true;
    } else {
      if (prixPropose > prixAleatoire) {
        compteurTentative--;
        reponse.innerHTML =
          '<div class="alert alert-danger" role="alert">Le prix proposé est trop élevé.<br>Il vous reste ' +
          compteurTentative +
          " tentatives...</div>";
      }
      if (prixPropose < prixAleatoire) {
        compteurTentative--;
        reponse.innerHTML =
          '<div class="alert alert-danger" role="alert">Le prix proposé est trop bas.<br>Il vous reste ' +
          compteurTentative +
          " tentatives...</div>";
      }
      if (prixPropose == prixAleatoire) {
        if (compteurTentative >= 9) {
          reponse.innerHTML =
            '<div class="alert alert-success" role="alert">Félicitations ! Vous avez trouvé le juste prix en ' +
            (10 - compteurTentative) +
            " tentative !</div>";
          document.getElementById("nouvellePartie").innerHTML =
            '<button type="reset" class="btn btn-success rounded m-3" onclick="window.location.reload();">Nouvelle partie</button>';
        } else {
          reponse.innerHTML =
            '<div class="alert alert-success" role="alert">Félicitations ! Vous avez trouvé le juste prix en ' +
            (10 - compteurTentative) +
            " tentatives !</div>";
          document.getElementById("nouvellePartie").innerHTML =
            '<button type="reset" class="btn btn-success rounded m-3" onclick="window.location.reload();">Nouvelle partie</button>';
        }
        validerPrix.disabled = true;
      }
    }
  }
}
validerPrix.addEventListener("click", verificationPrix, false);
