const btnProfessor = document.querySelector("#btnProfessor");
const btnAluno     = document.querySelector("#btnAluno");
const container    = document.querySelector(".container");

btnProfessor.addEventListener("click", () => {
    container.classList.add("modo-Professor");
  });
  
btnAluno.addEventListener("click", () => {
    container.classList.remove("modo-Professor");
  });