var range = document.getElementById("horas");
var valor = document.getElementById("span");

range.addEventListener('input', function(){
    valor.textContent = this.ariaValueMax;
})

function Redirecionar(){
    var personalizado = document.getElementById("personalizado");
    var comum         = document.getElementById("comum");

    if(personalizado.checked){
        window.location.replace(" Endereco");
    }

    else if(comum.checked){
        window.location.replace("Endereco");
    }
}

function Cronograma(){
    var qtdDias = document.getElementById("QtdDias").value;
    var diasSemana;
    var objetivo = document.getElementById("Objetivo").value;
    var nivel = document.getElementById("Nivel").value;
    var horas = document.getElementById("horas").value;

    /*if()[

    ]*/// Checkbox semana

    const xhttp = new XMLHttpRequest();
    xhttp.onload = function (){
        document.getElementById("resposta").innerHTML = this.responseText;
    }
    xhttp.open("GET", "Contr?qtdDias="+qtdDias+"&diasSemana="+diasSemana+"&Objetivo="+objetivo+
        "&Nivel="+nivel+"&horas="+horas+"&botao=cronograma"
    );
    xhttp.send();
}

function CronogramaC(){
    var qtdDias = 5;
    var diasSemana = "Seg"+"Ter"+"Qua"+"Qui"+"Sex";
    var objetivo = document.getElementById("Objetivo").value;
    var nivel = document.getElementById("Nivel").value;
    var horas = document.getElementById("horas").value;
}