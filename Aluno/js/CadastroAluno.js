//Sending data to controller

function FCadastroAluno (){

    var senha       = document.getElementById("Senha_Aluno").value;
    var confirmacao = document.getElementById("Senha_Aluno_Confirmacao").value;


    if(verificacaoCPF() == 'válido'){
        var resposta = document.querySelector('.resultado');

        if(senha == confirmacao){
            var DadosAluno = $('#Cadastro').serialize();
        
            $.ajax({
                method: 'GET',
                url:    'ContrAluno.php?Matricula',
                data:   DadosAluno,
        
                beforeSend: function(){
                    resposta.classList.add("ativo");
                    $("#resultado").html("Carregando matrículas...");
                }
            }) 
        
            .done(function(dadosPHP){
                $("#resultado").html(dadosPHP);
                resposta.classList.add("ativo");

                setTimeout(function(){
                    window.location.replace("http://localhost/Cronogramas/Opcoes.html");
                }, 5000);
            })
        
            .fail(function(){
                $("#resultado").html("Falha na matrícula");
                resposta.classList.add("ativo");  
            })
            
            return false;
        }

        else{
            alert("Senha incorreta!");
            
        }
    }

    else{
        alert("CPF inválido!");
    }
        
    
        
}

function Exclusao(){
    console.log('passou!!!');
        var DadosAluno = $('#CPF_Aluno').serialize();
    
        $.ajax({
            method: 'Delete',
            url: 'ContrAluno.php?Exclusao&CPF_Aluno',
            data: DadosAluno,
    
            beforeSend: function(){
                $("#resultado").html("Carregando matrículas...");
            }
        }) 
    
        .done(function(dadosPHP){
            
            $("#resultado").html(dadosPHP);
        })
    
        .fail(function(){
            $("#resultado").html("Falha na matrícula");
        })
        
    console.table(DadosAluno)
}


//API CEP

const CEP_Aluno      = document.querySelector('#CEP_Aluno');
const Endereco_Aluno = document.querySelector('#Endereco_Aluno');
const Bairro_Aluno   = document.querySelector('#Bairro_Aluno');
const Cidade_Aluno   = document.querySelector('#Cidade_Aluno');
const UF_Aluno       = document.querySelector('#UF_Aluno');
const spamCEP        = document.querySelector('#cpf_spam');

CEP_Aluno.addEventListener('focusout', async () => {

    try{
        const apenasNumero = /^[0-9]+$/; //Regex
        const cepValido = /^[0-9]{8}$/;

    if(!apenasNumero.test(CEP_Aluno.value) || !cepValido.test(CEP_Aluno.value)){
        throw{cep_error:'CEP inválido!'};
    }

    const resposta = await fetch(`https://viacep.com.br/ws/${CEP_Aluno.value}/json/`);
        if(!resposta.ok){
            throw await resposta.json();
        }

        const respostaCep = await resposta.json();

        Endereco_Aluno.value = respostaCep.logradouro;
        Bairro_Aluno.value   = respostaCep.bairro;
        Cidade_Aluno.value   = respostaCep.localidade;
        UF_Aluno.value       = respostaCep.uf;

    }

    catch(error){
        if(error?.cep_error){
            spamCEP.textContent = 'CEP inválido!';
            setTimeout(() => {
                spamCEP.textContent = '';
            }, 5000);
        }
    }
   
})

//CPF Verify

function verificacaoCPF(){
    //484.943.238-73 (11 dígitos)

    var CPF_Aluno = document.querySelector('#CPF_Aluno').value;   
    let myFunc = num => Number(num);
  
    var CpfArray = Array.from(String(CPF_Aluno), myFunc);

    v1_1 = CpfArray[0] * 10;// Parte 1
    v1_2 = CpfArray[1] * 9;
    v1_3 = CpfArray[2] * 8;
    v1_4 = CpfArray[3] * 7;
    v1_5 = CpfArray[4] * 6;
    v1_6 = CpfArray[5] * 5;
    v1_7 = CpfArray[6] * 4;
    v1_8 = CpfArray[7] * 3;
    v1_9 = CpfArray[8] * 2;

    console.log(CpfArray);

   var soma1  = v1_1+v1_2+v1_3+v1_4+v1_5+v1_6+v1_7+v1_8+v1_9;
   var resto1 = soma1 % 11;
   var digito_verificador1 = 11 - resto1;

   if(digito_verificador1 >= 10){
    digito_verificador1 = 0;
   }
   else{
    digito_verificador1 = 11 - resto1;;
   }

   if(digito_verificador1 == CpfArray[9]){//Parte 2 
    v2_1 = CpfArray[0] * 11;
    v2_2 = CpfArray[1] * 10;
    v2_3 = CpfArray[2] * 9;
    v2_4 = CpfArray[3] * 8;
    v2_5 = CpfArray[4] * 7;
    v2_6 = CpfArray[5] * 6;
    v2_7 = CpfArray[6] * 5;
    v2_8 = CpfArray[7] * 4;
    v2_9 = CpfArray[8] * 3;
    v2_10 = CpfArray[9] * 2;

    var soma2  = v2_1+v2_2+v2_3+v2_4+v2_5+v2_6+v2_7+v2_8+v2_9+v2_10;
    var resto2 = soma2 % 11;
    var digito_verificador2 = 11 - resto2;

    if(digito_verificador2 >= 10){
        digito_verificador2 = 0;
       }
       else{
        digito_verificador2 = 11 - resto2;;
       }
   }
   else{
    var verificacao = 'inválido!';
   }

   if(digito_verificador2 == CpfArray[10]){
    verificacao = 'válido';
   }
   else{
    verificacao = 'inválido'
   }

   return(verificacao);

}