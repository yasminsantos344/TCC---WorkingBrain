
// Professor





function CadastroProfessor(){
    var DadosAluno = $('#Cadastro').serialize();

$.ajax({
            method: 'GET',
            url: 'ContrProfessor.php?Matricula',
            data: DadosAluno,
    
            beforeSend: function(){
                $("#resultado").html("...");
            }
        })
    
        .done(function(dadosPHP){
            $("#resultado").html("Cadastro realizada com sucesso!");
        })
    
        .fail(function(){
            $("#ressultado").html("Falha no Cadastro");
        })
}
