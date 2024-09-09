
// Professor
function SolicitaProfessor(){
    var resultado  = document.querySelector(".resultado");
        
    try{
        var Nome_Professor            = document.querySelector("#Nome_Professor").value;
        var Data_Nascimento_Professor = document.querySelector("#Data_Nascimento_Professor").value;
        var CPF_Professor             = document.querySelector("#CPF_Professor").value;
        var Celular_Professor         = document.querySelector("#Celular_Professor").value;
        var Email_Professor           = document.querySelector("#Email_Professor").value;

        const solicitacao              = document.createElement("div");
        const conteudoSolicitacao      = document.createTextNode(
                                      `<h4>${Nome_Professor}</h4><br>
                                       <p>${Data_Nascimento_Professor}</p><br>
                                       <p>${Data_Nascimento_Professor}</p><br>
                                       <p>${CPF_Professor}</p><br>
                                       <p>${Celular_Professor}</p><br>
                                       <p>${Email_Professor}</p><br>
                                       <p>${Email_Professor}</p><br>`
        );
    
        solicitacao.appendChild(conteudoSolicitacao);
        document.getElementsById("solicitacao").appendChild(solicitacao);
         resultado.classList.add("ativo");
        resultado.innerHTML = 'Solicitação realizada com sucesso!'
    }

    catch(error){
        resultado.classList.add("ativo");
        resultado.innerHTML = 'Ocorreu algum problema!'
    }  
   
}

/*
var DadosAluno = $('#Cadastro').serialize();

$.ajax({
            method: 'GET',
            url: 'ContrAluno.php?Matricula',
            data: DadosAluno,
    
            beforeSend: function(){
                $("#resultado").html("Carregando matrículs...");
            }
        })
    
        .done(function(dadosPHP){
            $("#resultado").html("Matrícula realizada com sucesso!");
        })
    
        .fail(function(){
            $("#ressultado").html("Falha na matrícula");
        })*/