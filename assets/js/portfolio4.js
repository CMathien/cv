//Pendu

//Déclaration des différentes variables
let motADeviner = new Array(
  "AUTOBIOGRAPHIE",
  "BERGERONNETTES",
  "CONSTELLATIONS",
  "DACTYLOGRAPHIE",
  "ENVAHISSEMENTS",
  "FRAGMENTATIONS",
  "GESTICULATIONS",
  "HORTICULTRICES",
  "INTERNATIONAUX",
  "JOURNALISTIQUE",
  "KILOWATTHEURES",
  "LAMENTABLEMENT",
  "MONOCELLULAIRE",
  "NUTRITIONNISTE",
  "OPHTALMOLOGUES",
  "PYROTECHNIQUES",
  "QUESTIONNEMENT",
  "RAVITAILLEMENT",
  "SYNCHRONISABLE",
  "TAMBOURINEMENT",
  "UNIVERSITAIRES",
  "VIOLONCELLISTE",
  "WELTANSCHAUUNG",
  "XYLOGRAPHIQUES",
  "ZOOTECHNICIENS"
);
let indice = new Array(
  "vie de quelqu'un écrite par lui-même.",
  "petit passereau.",
  "groupe d'étoiles voisines sur la sphère céleste.",
  "technique d'utilisation de la machine à écrire.",
  "action d'envahir un lieu.",
  "réduction de la dimension des blocs de roches à l'explosif ou dans des concasseurs.",
  "faire beaucoup ou trop de gestes.",
  "personne qui pratique l'horticulture.",
  "qui intéresse des groupes de personnes appartenant à diverses nations.",
  "relatif au journal, au journalisme ou aux journalistes.",
  "unité d'énergie.",
  "en inspirant de la pitié.",
  "une seule cellule.",
  "spécialiste des troubles et des maladies de la nutrition.",
  "médecin qui s'occupe des yeux.",
  "relatif à la science des explosifs.",
  "fait d'être interpellé par quelque chose qui pose problème.",
  "mise à la disposition des troupes des ressources matérielles qui leur sont nécessaires.",
  "relatif à deux ou plusieurs choses qui se peuvent se produire dans le même temps.",
  "action de tambouriner sur une surface.",
  "enseignant dans l'enseignement supérieur.",
  "musicien qui joue un instrument à cordes frottées.",
  "concept philosophique allemand, souvent traduit par <em>vision du monde</em>.",
  "qui est imprimé au moyen de blocs de bois sur lesquels sont taillés des textes et des illustrations.",
  "scientifique qui s'occupe de l'élevage et de la reproduction des animaux domestiques."
);

let motTireAuSortEntier;
let motTireAuSortDecompose;
let indiceMot;
let lettreChoisie;
let nombreAleatoire;
let nombreErreur;
let compteurTentative;
let nombreLettresADeviner;

let imagePendu = document.getElementById("image-pendu");
let affichageMot = document.getElementById("mot-pendu");
let affichageMessage = document.getElementById("message-pendu");
let activationClavier = document.getElementById("clavier");

//Fonction de tirage au sort
function tirerChiffreAuSort(valeurMax) {
  return Math.floor(Math.random() * Math.floor(valeurMax));
}

nombreAleatoire = tirerChiffreAuSort(motADeviner.length);
motTireAuSortEntier = motADeviner[nombreAleatoire];
motTireAuSortDecompose = motTireAuSortEntier.split("");
indiceMot = indice[nombreAleatoire];

//Affichage des tirets représentant le mot à deviner et de l'indice
for (let i = 0; i < motTireAuSortDecompose.length; i++) {
  affichageMot.innerHTML += "<td>_</td>";
}
document.getElementById("indice").innerHTML =
  "<strong>Indice</strong> : " + indiceMot;

//Initialisation du nombre de tentatives et d'erreurs
compteurTentative = 9;
nombreErreur = 0;
nombreLettresADeviner = motTireAuSortEntier.length;

console.log(motTireAuSortEntier);

//Fonction pour vérifier la lettre cliquée
function verificationLettre() {
  if (motTireAuSortEntier.includes(lettreChoisie)) {
    document.getElementById(lettreChoisie).disabled = true;
    document.getElementById(lettreChoisie).style.backgroundColor = "#20c997";
    for (let i = 0; i < motTireAuSortDecompose.length; i++) {
      if (motTireAuSortDecompose[i] == lettreChoisie) {
        affichageMot.cells[i].innerHTML = "<td>" + lettreChoisie + "</td>";
        nombreLettresADeviner -= 1;
        console.log(nombreLettresADeviner);
      }
    }
    if (nombreLettresADeviner == 0) {
      if (nombreErreur > 1) {
        affichageMessage.innerHTML =
          "Gagné avec " + nombreErreur + " propositions incorrectes !";
        activationClavier.innerHTML =
          '<button type="reset" class="btn btn-outline-info rounded m-1 p-2" onclick="window.location.reload();">Nouvelle partie</button>';
      } else {
        affichageMessage.innerHTML =
          "Gagné avec " + nombreErreur + " proposition incorrecte !";
        activationClavier.innerHTML =
          '<button type="reset" class="btn btn-outline-info rounded m-1 p-2" onclick="window.location.reload();">Nouvelle partie</button>';
      }
    }
  } else {
    compteurTentative -= 1;
    nombreErreur += 1;
    document.getElementById(lettreChoisie).disabled = true;
    document.getElementById(lettreChoisie).style.backgroundColor = "#d9534f";
    imagePendu.innerHTML =
      '<img src="assets/images/pendu' +
      nombreErreur +
      '.png" class="animate__animated animate__fadeIn img-fluid img-thumbnail" alt="pendu"></img>';
    if (compteurTentative === 0) {
      affichageMessage.innerHTML =
        "Perdu ! La bonne réponse était : " + motTireAuSortEntier + ".";
      activationClavier.innerHTML =
        '<button type="reset" class="btn btn-outline-info rounded m-1 p-2" onclick="window.location.reload();">Nouvelle partie</button>';
    }
  }
}

//Programmation de tous les boutons de l'alphabet
document.getElementById("A").addEventListener("click", () => {
  lettreChoisie = "A";
  verificationLettre();
});
document.getElementById("B").addEventListener("click", () => {
  lettreChoisie = "B";
  verificationLettre();
});
document.getElementById("C").addEventListener("click", () => {
  lettreChoisie = "C";
  verificationLettre();
});
document.getElementById("D").addEventListener("click", () => {
  lettreChoisie = "D";
  verificationLettre();
});
document.getElementById("E").addEventListener("click", () => {
  lettreChoisie = "E";
  verificationLettre();
});
document.getElementById("F").addEventListener("click", () => {
  lettreChoisie = "F";
  verificationLettre();
});
document.getElementById("G").addEventListener("click", () => {
  lettreChoisie = "G";
  verificationLettre();
});
document.getElementById("H").addEventListener("click", () => {
  lettreChoisie = "H";
  verificationLettre();
});
document.getElementById("I").addEventListener("click", () => {
  lettreChoisie = "I";
  verificationLettre();
});
document.getElementById("J").addEventListener("click", () => {
  lettreChoisie = "J";
  verificationLettre();
});
document.getElementById("K").addEventListener("click", () => {
  lettreChoisie = "K";
  verificationLettre();
});
document.getElementById("L").addEventListener("click", () => {
  lettreChoisie = "L";
  verificationLettre();
});
document.getElementById("M").addEventListener("click", () => {
  lettreChoisie = "M";
  verificationLettre();
});
document.getElementById("N").addEventListener("click", () => {
  lettreChoisie = "N";
  verificationLettre();
});
document.getElementById("O").addEventListener("click", () => {
  lettreChoisie = "O";
  verificationLettre();
});
document.getElementById("P").addEventListener("click", () => {
  lettreChoisie = "P";
  verificationLettre();
});
document.getElementById("Q").addEventListener("click", () => {
  lettreChoisie = "Q";
  verificationLettre();
});
document.getElementById("R").addEventListener("click", () => {
  lettreChoisie = "R";
  verificationLettre();
});
document.getElementById("S").addEventListener("click", () => {
  lettreChoisie = "S";
  verificationLettre();
});
document.getElementById("T").addEventListener("click", () => {
  lettreChoisie = "T";
  verificationLettre();
});
document.getElementById("U").addEventListener("click", () => {
  lettreChoisie = "U";
  verificationLettre();
});
document.getElementById("V").addEventListener("click", () => {
  lettreChoisie = "V";
  verificationLettre();
});
document.getElementById("W").addEventListener("click", () => {
  lettreChoisie = "W";
  verificationLettre();
});
document.getElementById("X").addEventListener("click", () => {
  lettreChoisie = "X";
  verificationLettre();
});
document.getElementById("Y").addEventListener("click", () => {
  lettreChoisie = "Y";
  verificationLettre();
});
document.getElementById("Z").addEventListener("click", () => {
  lettreChoisie = "Z";
  verificationLettre();
});
document
  .getElementById("nouvelle-partie")
  .addEventListener("click", window.location.reload(), false);
