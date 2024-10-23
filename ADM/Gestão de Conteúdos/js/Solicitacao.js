
    $.ajax({
        url: '../ContrADM.php?ExibirAula',
    
            beforeSend: function(){
                $("#box-solicitacoes").html("Buscando solicitações...");
            }
        })
    
        .done(function(dadosPHP){
            let Aulas = JSON.parse(dadosPHP);
    
            var bloco = '';
            for(i = 0; i < Aulas.length; i++ ){
                bloco += "<b>Código da Aula:</b> " + Aulas[i].ID_Solicitacao + "<br>";
                bloco += `<iframe width="560" height="315" src="${Aulas[i].Link_Aula}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>` + "<br>" ;                  
                bloco += '<input type="button" class="botao-div" name="Cadastrar" id="Cadastrar" value="Aceitar" onclick="AceitarAula()">';
                bloco += '<input type="button" class="botao-div" name="NegarCadastro" id="Negar" value="Rejeitar" onclick="RejeitarAula()">' + "<br>";
                bloco += "</div>";
                
            }
    
    
            $("#box-solicitacoes").html(bloco);
            console.log(bloco);
    
        })
    
        .fail(function(){
            $("#box-solicitacoes").html("Falha na Exibição");
        })


function AceitarAula(){
    var ID_Solicitacoes = window.prompt("Insira o Código da aula");

    $.ajax({
        
        method: 'GET',
        url: '../ContrADM.php?Aprovar&ID_Solicitacoes=' + ID_Solicitacoes,
        
        beforeSend: function(){
            alert(ID_Solicitacoes);
        }
    })

    .done(function(dadosPHP){
        alert(dadosPHP);
    })

    .fail(function(){
        alert("Ops! Algo deu errado.");
    })
}

function RejeitarAula(){
    var ID_Solicitacoes = window.prompt("Insira o Código da aula");

    $.ajax({
        method: 'Delete',
        url: '../ContrADM.php?Rejeitar&ID_Solicitacoes=' + ID_Solicitacoes,

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
