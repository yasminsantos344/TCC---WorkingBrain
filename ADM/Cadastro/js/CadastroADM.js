function FCadastroADM(){
    var DadosADM = $('#FormADM').serialize();
    var Senha_ADM = document.querySelector("#Senha_ADM").value;
    var Confirmacao = document.querySelector("#Confirmacao").value;

        
    $.ajax({
        method: 'GET',
        url:    '../ContrADM.php?CadastroADM',
        data:   DadosADM,

    }) 

    .done(function(dadosPHP){

        if(Senha_ADM == Confirmacao){
            setTimeout(function(){
            window.location.replace("http://localhost/TCC---WorkingBrain-main/ADM/Perfil/perfil.html");
        }, 1000);

        }

        
    })

    .fail(function(){
        $("#resultado").html("Falha na matrícula");
        resposta.classList.add("ativo");  
    })
    


}