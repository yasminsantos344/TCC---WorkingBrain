function FCadastroADM(){
    var DadosADM = $('#FormADM').serialize();
        
    $.ajax({
        method: 'GET',
        url:    'ContrADM.php?CadastroADM',
        data:   DadosADM,

    }) 

    .done(function(dadosPHP){

        if(dadosPHP = 'sucesso'){
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