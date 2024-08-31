const btnPasso1 = document.getElementById("passo1");
const btnPasso2 = document.getElementById("passo2");
const btnPasso3 = document.getElementById("passo3");
const etapa1    = document.querySelector(".form-etapa1");
const etapa2    = document.querySelector(".form-etapa2");
const etapa3    = document.querySelector(".form-etapa3");
const etapa4    = document.querySelector(".form-etapa4");
const bola2     = document.querySelector(".bola-etapa2");
const bola3     = document.querySelector(".bola-etapa3");
const bola4     = document.querySelector(".bola-etapa4");
const linha2    = document.querySelector(".linha");
const linha3    = document.querySelector(".linha-etapa3");
const linha4    = document.querySelector(".linha-etapa4");
const voltar2   = document.getElementById("voltar2");
const voltar3   = document.getElementById("voltar3");
const voltar4   = document.getElementById("voltar4");

btnPasso1.addEventListener("click", () =>{
    etapa1.classList.add("modo-etapa2");
    etapa2.classList.add("modo-etapa2");
    bola2.classList.add("modo-etapa2");
    linha2.classList.add("modo-etapa2");
});

btnPasso2.addEventListener("click", () =>{
    etapa2.classList.remove("modo-etapa2");
    etapa2.classList.add("modo-etapa3")
    etapa3.classList.add("modo-etapa3");
    bola3.classList.add("modo-etapa3");
    linha3.classList.add("modo-etapa3");
});

btnPasso3.addEventListener("click", () =>{
    etapa3.classList.remove("modo-etapa3");
    etapa3.classList.add("modo-etapa4")
    etapa4.classList.add("modo-etapa4");
    bola4.classList.add("modo-etapa4");
    linha4.classList.add("modo-etapa4");
});

voltar2.addEventListener("click", () => {
    etapa1.classList.remove("modo-etapa2");
    etapa2.classList.remove("modo-etapa2");
    bola2.classList.remove("modo-etapa2");
    linha2.classList.remove("modo-etapa2");
})

voltar3.addEventListener("click", () =>{
    etapa2.classList.add("modo-etapa2");
    etapa2.classList.remove("modo-etapa3")
    etapa3.classList.remove("modo-etapa3");
    bola3.classList.remove("modo-etapa3");
    linha3.classList.remove("modo-etapa3");
});

voltar4.addEventListener("click", () =>{
    etapa3.classList.add("modo-etapa3");
    etapa3.classList.remove("modo-etapa3")
    etapa2.classList.remove("modo-etapa4");
    bola2.classList.remove("modo-etapa4");
    linha2.classList.remove("modo-etapa4");
});