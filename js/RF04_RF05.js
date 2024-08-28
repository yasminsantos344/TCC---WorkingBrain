function Login(){
    var email = document.getElementById("email").value;
    var senha = document.getElementById("senha").value;
    var ocupacao;

    if(document.getElementById("aluno").checked){
        ocupacao = "aluno";
    }
    else if(document.getElementById("professor").checked){
        ocupacao = "professor";
    }

    const xhttp = new XMLHttpRequest();

    xhttp.onload = function(){
        
    }
    xhttp.open("POST","Contr?email="+email+"&senha="+senha+"&ocupacao="+ocupacao+"&botao=login");
    xhttp.send();
}

function Redirecionamento(){
    window.location.replace(/* Local de recuperar senha */)
}

function Recuperacao(){
    var senha = document.getElementById("nomedocampo").value;
    var confirmsenha = document.getElementById("nomedocampo").value;

    if(senha == confirmsenha){
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
            document.getElementById("").innerHTML = this.responseText;

        }
        xhttp.open("GET", "Contr?novaSenha="+senha+"&botao=recuperacao");
        xhttp.send();
    }
}