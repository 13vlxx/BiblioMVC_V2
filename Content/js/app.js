// Récupération des éléments du formulaire
const form = document.querySelector("form");
error.style.color = "red";

form.addEventListener("submit", (e) => {
  const nom = document.getElementById("inom");
  const prenom = document.getElementById("iprenom");
  const email = document.getElementById("imail");
  const password = document.getElementById("ipassword");
  const error = document.getElementById("error");
  e.preventDefault;

  if (!password.value) {
    errorMessage = "Veuillez renseigner votre mot de passe";
  }
  if (!email.value) {
    errorMessage = "Veuillez renseigner votre email";
  }
  if (!prenom.value) {
    errorMessage = "Veuillez renseigner votre prénom";
  }
  if (!nom.value) {
    errorMessage = "Veuillez renseigner votre nom";
  }

  if (error) {
    e.preventDefault;
    error.innerHTML = errorMessage;
    return false;
  } else {
    alert("Forumulaire envoyé");
  }
});
