function SolicitaAula(){
    var Link = $("#FormLink").serialize();

   $.ajax({
    method: 'GET',
    url: '../ContrProfessor.php?LinkAula',
    data: Link,
   })

   .done(function(dadosPHP){
        alert(dadosPHP)
        
   })

   .fail(function(){
        alert("Ocorreu um problema!");
   })
}



