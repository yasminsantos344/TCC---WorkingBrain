var resultado  = document.querySelector(".resultado");
// Professor
function SolicitaProfessor(){
    var DadosAluno = $('#Cadastro').serialize();
    
        $.ajax({
            method: 'GET',
            url: 'ContrAluno.php?Matricula',
            data: DadosAluno,
    
            beforeSend: function(){
                $("#resultado").html("Carregando matrículs...");
            }
        })
    
        .done(function(dadosPHP){
            $("#resultado").html("Matrícula realizada com sucesso!");
        })
    
        .fail(function(){
            $("#ressultado").html("Falha na matrícula");
        })
}