$.ajax({
    url: '../ContrADM.php?Exibir',

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


function CadastrarProfessor(){
    var CPF_Professor = window.prompt("Insira o CPF do professor para confirmar seu cadastro");

    $.ajax({
        method: 'GET',
        url: '../ContrADM.php?Cadastrar&CPF_Professor=' + CPF_Professor,
        //data: CPF_Professor,

        beforeSend: function(){
            alert("Processando...");
        }
    })

    .done(function(dadosPHP){
        alert(dadosPHP);
    })

    .fail(function(){
        alert("Ops! Algo deu errado.");
    })
}


function RejeitarCadastro(){
    var CPF_Professor = window.prompt("Insira o CPF do professor para confirmar seu cadastro");

    $.ajax({
        method: 'DELETE',
        url: '../ContrADM.php?RejeitarCadastro+CPF_Professor?='+CPF_Professor,
        //data: CPF_Professor,

        beforeSend: function(){
            alert("Processando...");
        }
    })

    .done(function(dadosPHP){
        alert(dadosPHP);
    })

    .fail(function(){
        alert("Ops! Algo deu errado.");
    })
}