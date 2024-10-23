function FLoginADM(){
    var LogADM = $("#LoginADM").serialize();

    $.ajax({
     method: 'GET',
     url: '../ContrADM.php?LoginADM',
     data: LogADM,
    })
 
    .done(function(dadosPHP){
         if(dadosPHP == 'Sucesso'){
             window.location.replace("http://localhost/TCC---WorkingBrain-main/ADM/Perfil/perfil.php");
             
         }
         else{
             alert(dadosPHP);
         }
         
    })
 
    .fail(function(){
         alert("Ocorreu um problema!");
    })
}

function MudarSenha(){
    var Email_ADM      = document.querySelector("#Email_ADM").value;
    var Senha_ADM      = document.querySelector("#Senha_ADM").value; 
    var Senha_Confirma = document.querySelector("#Confirmacao").value;

    if(Senha_ADM == Senha_Confirma){
        $.ajax({
            method: 'GET',
            url: '../ContrADM.php?AlterarSenha&Email_ADM='+Email_ADM+'&Senha_ADM='+Senha_ADM,
            //data: Senha_ADM,
           })
        
           .done(function(dadosPHP){
            alert(Email_ADM + Senha_ADM)
                alert(dadosPHP)
            //window.location.replace("http://localhost/TCC---WorkingBrain-main/ADM/Login/LoginADM.html");                                   
                
           })
        
           .fail(function(){
                alert("Ocorreu um problema!");
           })
    }

}