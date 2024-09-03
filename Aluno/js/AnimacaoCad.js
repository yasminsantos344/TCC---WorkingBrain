const btnPasso1 = document.getElementById("passo1");
const etapa1    = document.querySelector(".form-etapa1");
const etapa2    = document.querySelector(".form-etapa2");
const bola2     = document.querySelector(".bola-etapa2");
const linha2    = document.querySelector(".linha");
const voltar2   = document.getElementById("voltar2");

btnPasso1.addEventListener("click", () =>{
    etapa1.classList.add("modo-etapa2");
    etapa2.classList.add("modo-etapa2");
    bola2.classList.add("modo-etapa2");
    linha2.classList.add("modo-etapa2");
});

voltar2.addEventListener("click", () => {
    etapa1.classList.remove("modo-etapa2");
    etapa2.classList.remove("modo-etapa2");
    bola2.classList.remove("modo-etapa2");
    linha2.classList.remove("modo-etapa2");
})

