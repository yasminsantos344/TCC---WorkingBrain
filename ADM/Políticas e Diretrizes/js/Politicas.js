$.ajax({

    url: '../ContrADM.php?Diretriz',
    

})

.done(function(dadosPHP){

    let Diretriz = JSON.parse(dadosPHP);
    

    
    $('#conteudo').html('<h6>'+Diretriz[0].Diretriz+'</h6>');            
    console.log(Diretriz[0]);
})

.fail(function(){
    alert("Ops! Algo deu errado.");
})


function EditarDiretrizes(){
    var input = document.querySelector(".Diretriz");
    var botao = document.querySelector("#btEditar");

    input.classList.add("ativo");
    botao.classList.add("desativar");
}

function MudarDiretrizes(){
    
    var conteudoNovo = document.querySelector("#Diretriz").value;
    alert(conteudoNovo);
    $.ajax({
        method: 'GET',
        url: '../ContrADM.php?MudaDiretriz',
        data: conteudoNovo,
    })

    .done(function(){

            alert('Diretrizes alteradas com sucesso');
        
        
        
    })

    .fail(function(){
        alert("Ops! Algo deu errado.");
    })
}