
// Professor

function FSolicitaProfessor(){
    

    if(verificacaoCPF() == 'válido'){
        var resposta = document.querySelector('.resultado');
        var DadosProfessor = $('#CadastroProf').serialize();

        $.ajax({
            method: 'GET',
            url: 'ContrProfessor.php?Solicitar',
            data: DadosProfessor,
    
            beforeSend: function(){
                resposta.classList.add("ativo");
                $("#resultado").html("Enviando solicitação");
            }
        })
    
        .done(function(dadosPHP){
            
            resposta.classList.add("ativo");
            $("#resultado").html(dadosPHP);

        })
    
        .fail(function(){
            resposta.classList.add("ativo");
            $("#resultado").html("Falha na Solicitação");
        })

    }

    else{
        alert("CPF inválido!");
    }
}

function Exibir(){

    $.ajax({
    url: '../Professor/ContrProfessor.php?Exibir',

        beforeSend: function(){
            $("#box-solicitacoes").html("Buscando solicitações...");
        }
    })

    .done(function(dadosPHP){
        let DadosProf = JSON.parse(dadosPHP);

        var bloco = '';
        for(i = 0; i < DadosProf.length; i++ ){
            bloco += '<div class="DivSolicitacao">';
            bloco += "<b>Nome:</b> " + DadosProf[i].Nome_Professor + "<br>";
            bloco += "<b>Data de Nascimento:</b> " + DadosProf[i].Data_Nascimento_Professor + "<br>";
            bloco += "<b>CPF:</b> " + DadosProf[i].CPF_Professor + "<br>";
            bloco += "<b>Email:</b> " + DadosProf[i].Email_Professor + "<br>";
            bloco += "<b>Celular:</b> " + DadosProf[i].Celular_Professor + "<br>";
            bloco += "<b>CEP:</b> " + DadosProf[i].CEP_Professor + "<br>";
            bloco += "<b>Endereco:</b> " + DadosProf[i].Endereco_Professor + "<br>";
            bloco += "<b>Bairro:</b> " + DadosProf[i].Bairro_Professor + "<br>";
            bloco += "<b>Cidade:</b> " + DadosProf[i].Bairro_Professor + "<br>";
            bloco += "<b>UF:</b> " + DadosProf[i].UF_Professor + "<br>";
            bloco += "<b>Numero: </b>" + DadosProf[i].Endereco_Numero_Professor + "<br>";
            bloco += "<b>Complemento:</b> " + DadosProf[i].Endereco_Complemento_Professor + "<br>";
            bloco += '<input type="button" class="botao-div" name="Cadastrar" id="Cadastrar" value="Aceitar" onclick="CadastrarProfessor()">';
            bloco += '<input type="button" class="botao-div" name="NegarCadastro" id="Negar" value="Negar" onclick="RejeitarCadastro()">';
            bloco += "</div>";
            
        }


        $("#box-solicitacoes").html(bloco);
        console.log(bloco);

    })

    .fail(function(){
        $("#box-solicitacoes").html("Falha na Exibição");
    })
}


function CadastroProfessor(){



    var DadosProfessor = $('#Cadastro').serialize();

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

    let CPF_Professor = document.querySelector('#CPF_Professor').value;   
    let myFunc = num => Number(num);
  
    let CpfArray = Array.from(String(CPF_Professor), myFunc);

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

   let soma1  = v1_1+v1_2+v1_3+v1_4+v1_5+v1_6+v1_7+v1_8+v1_9;
   let resto1 = soma1 % 11;
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

    let soma2  = v2_1+v2_2+v2_3+v2_4+v2_5+v2_6+v2_7+v2_8+v2_9+v2_10;
    let resto2 = soma2 % 11;
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
