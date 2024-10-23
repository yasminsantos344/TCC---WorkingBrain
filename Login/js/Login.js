function Redirecionamento(){
    window.location.replace(/* Local de recuperar senha */)
}

function Recuperacao(){
    var senha = document.getElementById("nomedocampo").value;
    var confirmsenha = document.getElementById("nomedocampo").value;

    if(senha == confirmsenha){
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
            document.getElementById("").innerHTML = this.responseText;

        }
        xhttp.open("GET", "Contr?novaSenha="+senha+"&botao=recuperacao");
        xhttp.send();
    }
}

function FLoginAluno(){
   var LogAluno = $("#FormAluno").serialize();

   $.ajax({
    method: 'GET',
    url: 'ContrLogin.php?LoginAluno',
    data: LogAluno,
   })

   .done(function(dadosPHP){
        if(dadosPHP == 'Sucesso'){
            window.location.replace("http://localhost/TCC---WorkingBrain-main/Aluno/HomeAluno.php");
            
        }
        else{
            alert(dadosPHP);
        }
        
   })

   .fail(function(){
        alert("Ocorreu um problema!");
   })
}

function FLoginProfessor(){
    var LogProfessor = $("#FormProfessor").serialize();

   $.ajax({
    method: 'GET',      
    url: 'ContrLogin.php?LoginProfessor',
    data: LogProfessor,
   })

   .done(function(dadosPHP){
        if(dadosPHP == 'Sucesso'){
            window.location.replace("http://localhost/TCC---WorkingBrain-main/Aluno/HomeProfessor.php");
        }

        else{
            alert(dadosPHP);
        }
   })

   .fail(function(){
        alert("Ocorreu um problema!");
   })
}