function CadastrarProfessor(){
    var CPF_Professor = window.prompt("Insira o CPF do professor para confirmar seu cadastro");

    $.ajax({
        method: 'GET',
        url: 'ContrADM.php?Cadastrar',
        data: CPF_Professor,

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

function NegarCadastro(){

}