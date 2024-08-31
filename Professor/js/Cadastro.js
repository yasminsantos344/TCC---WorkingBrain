const btnProf  = document.getElementById("btnProfessor");
const btnAluno = document.getElementById("btnAluno");
var resultado  = document.querySelector(".resultado");

// JSON 
// ALUNO
function CadastroAluno(){
   let nome            = document.getElementById("Nome_Aluno").value;
   let nascimento      = document.getElementById("Data_Nascimento_Aluno").value;
   let cpf             = document.getElementById("CPF_Aluno").value;
   let celular         = document.getElementById("Celular_Aluno").value;
   let email           = document.getElementById("Email_Aluno").value;
   let senha           = document.getElementById("Senha_Aluno").value;
   let confirmacao     = document.getElementById("Senha_Aluno").value;
   let cep             = document.getElementById("CEP_Aluno").value;
   let numero_Endereco = document.getElementById("Endereco_Numero_Aluno").value;
   let complemento     = document.getElementById("Endereco_Complemento_Aluno").value;
   

    console.log("passou")

    if(senha == confirmacao){
        const xhttp = new XMLHttpRequest;

        xhttp.onload = function(){
            document.getElementById("resultado").innerHTML = this.responseText;
            resultado.classList.add("ativo");
        }

        xhttp.open("GET", "ContrCadastro.php?Nome_Aluno="+nome+"&Data_Nascimento_Aluno="+nascimento+
        "&CPF_Aluno="+cpf+"&Celular_Aluno="+celular+"&Email_Aluno="+email+
        "&Senha_Aluno="+senha+"&CEP_Aluno="+cep+"Endereco_Numero_Aluno"+numero_Endereco+"&Endereco_Complemento_Aluno="
        +complemento+"&botao=matricular");
        xhttp.send();
    }

    else{
        alert("Senha errada!");
    }
}

// Professor

function CadastroProfessor(){
    let nome            = document.getElementById("Nome_Professor").value;
    let nascimento      = document.getElementById("Data_Nascimento_Professor").value;
    let cpf             = document.getElementById("CPF_Professor").value;
    let celular         = document.getElementById("Celular_Professor").value;
    let email           = document.getElementById("Email_Professor").value;
    let senha           = document.getElementById("Senha_Professor").value;
    let confirmacao     = document.getElementById("Senha_Professor_Confirmacao").value;
    let cep             = document.getElementById("CEP_Professor").value;
    let numero_Endereco = document.getElementById("Endereco_Numero_Professor").value;
    let complemento     = document.getElementById("Endereco_Complemento_Professor").value;

    console.log("passou")

    if(senha == confirmacao){
        const xhttp = new XMLHttpRequest;

        xhttp.onload = function(){
            document.getElementById("resultado").innerHTML = this.responseText;
            resultado.classList.add("ativo");
        }

        xhttp.open("GET", "ContrCadastro.php?Nome_Professor="+nome+"&Data_Nasc_Professor="+nascimento+
        "&CPF_Professor="+cpf+"&Celular_Professor="+celular+"&Email_Professor="+email+
        "&Senha_Professor="+senha+"&CEP_Professor="+cep+"Endereco_Numero_Professor"+numero_Endereco+"&Endereco_Complemento_Professor="+complemento+"&botao=solicitar");
        xhttp.send();
    }

    else{
        alert("Senha errada!");
    }
}