function CronogramaAluno(){
    var CronogramaAluno = $('#FormCronograma').serialize();

    $.ajax({
        method: 'GET',
        url: 'ContrCronograma.php?Cronograma',
        data: CronogramaAluno
    })

    .done(function(){
        window.location.replace("http://localhost/TCC---WorkingBrain-main/Login/Login.html");
    })

    .fail(function(){
        alert("Ops! Algo deu errado");
    })
}



