
// Professor

function SolicitaProfessor(){


    if(verificacaoCPF() == 'válido'){
        var resultado = document.querySelector('.resultado');

                try{

                    var DadosProfessor = JSON.stringify({
                        Nome                 : document.querySelector("#Nome_Professor").value,
                        Data_Nascimento_Professor      : document.querySelector("#Data_Nascimento_Professor").value,
                        CPF_Professor                  : document.querySelector("#Celular_Professor").value,
                        Celular_Professor              : document.querySelector("#Celular_Professor").value,
                        Email_Professor                : document.querySelector("#Email_Professor").value,
                        CEP_Professor                  : document.querySelector("#CEP_Professor").value,
                        Endereco_Professor             : document.querySelector("#Endereco_Professor").value,
                        Bairro_Professor               : document.querySelector("#Bairro_Professor").value,
                        Cidade_Professor               : document.querySelector("#Cidade_Professor").value,
                        UF_Professor                   : document.querySelector("#UF_Professor").value,
                        Endereco_Numero_Professor      : document.querySelector("#Endereco_Numero_Professor").value,
                        Endereco_Complemento_Professor : document.querySelector("#Endereco_Complemento_Professor").value


                    })

                    localStorage.setItem("storage", JSON.stringify(dados));

                    resultado.classList.add("ativo");
                    resultado.innerHTML = 'Solicitação realizada com sucesso!';
                    

                    /*var Nome_Professor             = document.querySelector("#Nome_Professor").value;
                    var Data_Nascimento_Professor  = document.querySelector("#Data_Nascimento_Professor").value;
                    var CPF_Professor              = document.querySelector("#CPF_Professor").value;
                    var Celular_Professor          = document.querySelector("#Celular_Professor").value;
                    var Email_Professor            = document.querySelector("#Email_Professor").value;
        
                    
        
                    var DivSolicitacao = `<div class="DivSolicitao">
                        <h4>${Nome_Professor}</h4><br>
                        <p>${Data_Nascimento_Professor}</p><br>
                        <p>${Data_Nascimento_Professor}</p><br>
                        <p>${CPF_Professor}</p><br>
                        <p>${Celular_Professor}</p><br>
                        <p>${Email_Professor}</p><br>
                    </div>`;
        
                    
        
                    
        
                    var dadosProfessor =  localStorage.getItem('valueText', DivSolicitacao);*/
                    
                }
        
                catch(error){
                    resultado.classList.add("ativo");
                    resultado.innerHTML = 'Ocorreu algum problema!'
                    resultado.innerHTML = '<br>' + error;
                }  
        
                console.log(dadosProfessor);
                return(dadosProfessor);
    }

    else{
        alert("CPF inválido!");
    }
}



function CadastroProfessor(){



    var DadosAluno = $('#Cadastro').serialize();

$.ajax({
            method: 'GET',
            url: 'ContrProfessor.php?Matricula',
            data: DadosAluno,
    
            beforeSend: function(){
                $("#resultado").html("...");
            }
        })
    
        .done(function(dadosPHP){
            $("#resultado").html("Cadastro realizada com sucesso!");
        })
    
        .fail(function(){
            $("#ressultado").html("Falha no Cadastro");
        })
}

//API CEP

const CEP_Professor      = document.querySelector('#CEP_Professor');
const Endereco_Professoe = document.querySelector('#Endereco_Professor');
const Bairro_Professor   = document.querySelector('#Bairro_Professor');
const Cidade_Professor   = document.querySelector('#Cidade_Professor');
const UF_Professor       = document.querySelector('#UF_Professor');
const spamCEP            = document.querySelector('#cpf_spam');

CEP_Professor.addEventListener('focusout', async () => {

    try{
        const apenasNumero = /^[0-9]+$/; //Regex
        const cepValido = /^[0-9]{8}$/;

    if(!apenasNumero.test(CEP_Professor.value) || !cepValido.test(CEP_Professor.value)){
        throw{cep_error:'CEP inválido!'};
    }

    const resposta = await fetch(`https://viacep.com.br/ws/${CEP_Professor.value}/json/`);
        if(!resposta.ok){
            throw await resposta.json();
        }

        const respostaCep = await resposta.json();

        Endereco_Professoe.value = respostaCep.logradouro;
        Bairro_Professor.value   = respostaCep.bairro;
        Cidade_Professor.value   = respostaCep.localidade;
        UF_Professor.value       = respostaCep.uf;

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

    var CPF_Professor = document.querySelector('#CPF_Professor').value;   
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
