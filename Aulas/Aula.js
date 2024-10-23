function SolicitaAula(){
    var Link = $("#FormLink").serialize();

   $.ajax({
    method: 'GET',
    url: 'ContrAula.php?LinkAula',
    data: Link,
   })

   .done(function(dadosPHP){
        alert(dadosPHP)
        
   })

   .fail(function(){
        alert("Ocorreu um problema!");
   })
}



