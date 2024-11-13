var btn = document.getElementById('btn');

function troca(){
    if (btn.textContent === "Marcar como Concluído"){
        btn.textContent = "Concluído";
        btn.value = "Concluído"
        cor1.style.color = "#fafca9"
    }
    else {
        btn.textContent = "Marcar como Concluído";
        btn.value = "Marcra como Concluído"
        cor1.style.color = "#878786"
    }
}

btn.addEventListener('click', troca)