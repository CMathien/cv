//Email

function controleConformiteEmail() {
  //Récupération de l'email saisie
  let emailSaisie;
  let lettres = new RegExp("\\w");
  emailSaisie = document.getElementById("email").value;
  if (emailSaisie.includes("@") && emailSaisie.includes(".")) {
    let positionArobase = emailSaisie.indexOf("@"); //Coupe de l'email avec @ comme premier caractère
    sousChaineEmail = emailSaisie.substring(positionArobase);
    if (sousChaineEmail.includes(".")) {
      let positionPoint = sousChaineEmail.indexOf(".");
      sousChaineApresPoint = sousChaineEmail.substring(positionPoint);
      if (lettres.test(sousChaineApresPoint)) {
        document.getElementById("email").style.backgroundColor = "#4bbf73";
      } else {
        document.getElementById("email").style.backgroundColor = "#d9534f";
      }
    } else {
      document.getElementById("email").style.backgroundColor = "#d9534f";
    }
  } else {
    document.getElementById("email").style.backgroundColor = "#d9534f";
  }
}

//Déclenchement de la vérification
document
  .getElementById("email")
  .addEventListener("keyup", controleConformiteEmail, false);
