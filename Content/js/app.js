alert("hello");

const form = document.querySelector("#form");

form.addEventListener("submit", function (e) {
  const nom = document.getElementById("inom");
  const prenom = document.getElementById("iprenom");
  const email = document.getElementById("imail");
  const password = document.getElementById("ipassword");

  if (nom.value.length < 2 || nom.value.length > 30) {
    alert("Le nom doit contenir entre 2 et 30 caractères.");
    e.preventDefault();
  }
  if (prenom.value.length < 2 || prenom.value.length > 30) {
    alert("Le prénom doit contenir entre 2 et 30 caractères.");
    e.preventDefault();
  }
  if (email.value.length < 8 || email.value.length > 30) {
    alert("Le mail doit contenir entre 8 et 30 caractères.");
    e.preventDefault();
  }
  if (password.value.length < 8 || password.value.length > 30) {
    alert("Le mot de passe doit contenir entre 8 et 30 caractères.");
    e.preventDefault();
  }
});
