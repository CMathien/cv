//Monnaie à rendre

function calculMonnaieARendre() {
  //Récupération des valeurs saisies
  let montantDu;
  montantDu = document.getElementById("montantSaisi").value;
  let sommeReglee;
  sommeReglee = document.getElementById("sommeRegleeSaisie").value;
  //Calcul somme restant à payer
  let sommeRestante;
  sommeRestante = montantDu - sommeReglee;
  //Déclaration des pièces et billets
  let billets500;
  billets500 = 0;
  let billets200;
  billets200 = 0;
  let billets100;
  billets100 = 0;
  let billets50;
  billets50 = 0;
  let billets20;
  billets20 = 0;
  let billets10;
  billets10 = 0;
  let billets5;
  billets5 = 0;
  let pieces2;
  pieces2 = 0;
  let pieces1;
  pieces1 = 0;
  let pieces50c;
  pieces50c = 0;
  let pieces20c;
  pieces20c = 0;
  let pieces10c;
  pieces10c = 0;
  let pieces5c;
  pieces5c = 0;
  let pieces2c;
  pieces2c = 0;
  let pieces1c;
  pieces1c = 0;
  //Calcul du nombre de pièces/billets à rendre
  while (sommeRestante >= 500) {
    billets500 += 1;
    sommeRestante -= 500;
  }
  while (sommeRestante >= 200 && sommeRestante < 500) {
    billets200 += 1;
    sommeRestante -= 200;
  }
  while (sommeRestante >= 100 && sommeRestante < 200) {
    billets100 += 1;
    sommeRestante -= 100;
  }
  while (sommeRestante >= 50 && sommeRestante < 100) {
    billets50 += 1;
    sommeRestante -= 50;
  }
  while (sommeRestante >= 20 && sommeRestante < 50) {
    billets20 += 1;
    sommeRestante -= 20;
  }
  while (sommeRestante >= 10 && sommeRestante < 20) {
    billets10 += 1;
    sommeRestante -= 10;
  }
  while (sommeRestante >= 5 && sommeRestante < 10) {
    billets5 += 1;
    sommeRestante -= 5;
  }
  while (sommeRestante >= 2 && sommeRestante < 5) {
    pieces2 += 1;
    sommeRestante -= 2;
  }
  while (sommeRestante >= 1 && sommeRestante < 2) {
    pieces1 += 1;
    sommeRestante -= 1;
  }
  while (sommeRestante >= 0.5 && sommeRestante < 1) {
    pieces50c += 1;
    sommeRestante -= 0.5;
  }
  while (sommeRestante >= 0.2 && sommeRestante < 0.5) {
    pieces20c += 1;
    sommeRestante -= 0.2;
  }
  while (sommeRestante >= 0.1 && sommeRestante < 0.2) {
    pieces10c += 1;
    sommeRestante -= 0.1;
  }
  while (sommeRestante >= 0.05 && sommeRestante < 0.1) {
    pieces5c += 1;
    sommeRestante -= 0.05;
  }
  while (sommeRestante >= 0.02 && sommeRestante < 0.05) {
    pieces2c += 1;
    sommeRestante -= 0.02;
  }
  while (sommeRestante > 0 && sommeRestante < 0.02) {
    pieces1c += 1;
    sommeRestante -= 0.01;
  }
  //Affichage du résultat
  let monnaieRendue;
  monnaieRendue = document.getElementById("monnaieRendue");
  monnaieRendue.innerHTML =
    '<h1 class="my-3 m-auto lead">Monnaie à rendre</h1><br><div class="row text-center"><div class="col"><img src="assets/images/EUR_500.jpg" alt="Billet de 500 euros"><br>' +
    billets500 +
    '</div><div class="col"><img src="assets/images/EUR_200.jpg" alt="Billet de 200 euros"><br>' +
    billets200 +
    '</div><div class="col"><img src="assets/images/EUR_100.jpg" alt="Billet de 100 euros"><br>' +
    billets100 +
    '</div><div class="col"><img src="assets/images/EUR_50.jpg" alt="Billet de 50 euros"><br>' +
    billets50 +
    '</div><div class="col"><img src="assets/images/EUR_20.jpg" alt="Billet de 20 euros"><br>' +
    billets20 +
    '</div><div class="col"><img src="assets/images/EUR_10.jpg" alt="Billet de 10 euros"><br>' +
    billets10 +
    '</div><div class="col"><img src="assets/images/EUR_5.png" alt="Billet de 5 euros"><br>' +
    billets5 +
    '</div></div><div class="row text-center"><div class="col"><img src="assets/images/2_euros.png" alt="Pièce de 2 euros"><br>' +
    pieces2 +
    '</div><div class="col"><img src="assets/images/1_euro.png" alt="Pièce de 1 euro"><br>' +
    pieces1 +
    '</div><div class="col"><img src="assets/images/50_centimes.png" alt="Pièce de 50 centimes"><br>' +
    pieces50c +
    '</div><div class="col"><img src="assets/images/20_centimes.png" alt="Pièce de 20 centimes"><br>' +
    pieces20c +
    '</div><div class="col"><img src="assets/images/10_centimes.png" alt="Pièce de 10 centimes"><br>' +
    pieces10c +
    '</div><div class="col"><img src="assets/images/5_centimes.png" alt="Pièce de 5 centimes"><br>' +
    pieces5c +
    '</div><div class="col"><img src="assets/images/2_centimes.png" alt="Pièce de 2 centimes"><br>' +
    pieces2c +
    '</div><div class="col"><img src="assets/images/1_centime.png" alt="Pièce de 1 centime"><br>' +
    pieces1c +
    "</div></div></div>";
}

//Déclenchement du bouton Calculer
let monnaieCalculer;
monnaieCalculer = document.getElementById("monnaieCalculer");
monnaieCalculer.addEventListener("click", calculMonnaieARendre, false);
