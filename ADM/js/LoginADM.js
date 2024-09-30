function FLoginADM(){
    var LogADM = $("#LoginADM").serialize();

    $.ajax({
     method: 'GET',
     url: 'ContrADM.php?LoginADM',
     data: LogADM,
    })
 
    .done(function(dadosPHP){
         if(dadosPHP == 'Sucesso'){
             window.location.replace("http://localhost/TCC---WorkingBrain-main/ADM/perfil.html");
             
         }
         else{
             alert(dadosPHP);
         }
         
    })
 
    .fail(function(){
         alert("Ocorreu um problema!");
    })
}