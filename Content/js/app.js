const form = document.querySelector("form");
const errorSpan = document.querySelector("#error");
errorSpan.style.color = "red";

form.addEventListener("submit", function (e) {
  const fields = [
    { input: document.getElementById("inom"), min: 2, max: 30 },
    { input: document.getElementById("iprenom"), min: 2, max: 30 },
    { input: document.getElementById("imail"), min: 8, max: 30 },
    { input: document.getElementById("ipassword"), min: 8, max: 30 },
  ];

  for (const field of fields) {
    if (field.input.value.length < field.min || field.input.value.length > field.max) {
      errorSpan.innerHTML = "Un ou plusieurs champs sont mal remplis ou incorrects";
      console.error(
        "Soumission du formulaire annulée, tout les champs ne sont pas correctement remplis, veuillez réessayer"
      );
      e.preventDefault();
      return;
    }
  }
});
