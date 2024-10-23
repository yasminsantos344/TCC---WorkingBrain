/*google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(DadosAlunos);


function DadosAlunos() {
    $.ajax({
        method: 'GET',
        url: '../ContrADM.php?DadosAlunos',
    })

    .done(function(dadosPHP){

        var data = JSON.parse(dadosPHP)[
            ['Meses', 'Matriculas'],
            ['Janeiro',  data[1]],
            ['Fevereiro',  data[2]],
            ['Março',  data[3]],
            ['Abril',  data[4]],
            ['Maio',  data[5]],
            ['Junho',  data[6]],
            ['Julho',  data[7]],
            ['Agosto',  data[8]],
            ['Setembro',  data[9]],
            ['Outubro',  data[10]],
            ['Novembro',  data[11]],
            ['Dezembro',  data[12]]
          ];
        
          var options = {
            title: 'Matriculas',
            curveType: 'function',
            legend: { position: 'bottom' },
            backgroundColor: 'transparent'
          };
        
          var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        
          chart.draw(data, options);
    })

    .fail(function(){
        alert("Ops! Algo deu errado.");
    })

  
}*/


google.charts.load('current', { 'packages': ['corechart'] });
google.charts.setOnLoadCallback(DadosAlunos);

function DadosAlunos() {
    $.ajax({
        method: 'GET',
        url: '../ContrADM.php?DadosAlunos',
    })
    .done(function(dadosPHP) {
        // Parse the JSON response from PHP
        var dataFromPHP = JSON.parse(dadosPHP);

        // Create a new DataTable for Google Charts
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Meses'); // First column for months
        data.addColumn('number', 'Matriculas'); // Second column for enrollments

        // Populate the DataTable with data
        data.addRows([
            ['Janeiro', dataFromPHP[1] || 0],
            ['Fevereiro', dataFromPHP[2] || 0],
            ['Março', dataFromPHP[3] || 0],
            ['Abril', dataFromPHP[4] || 0],
            ['Maio', dataFromPHP[5] || 0],
            ['Junho', dataFromPHP[6] || 0],
            ['Julho', dataFromPHP[7] || 0],
            ['Agosto', dataFromPHP[8] || 0],
            ['Setembro', dataFromPHP[9] || 0],
            ['Outubro', dataFromPHP[10] || 0],
            ['Novembro', dataFromPHP[11] || 0],
            ['Dezembro', dataFromPHP[12] || 0]
        ]);

        // Chart options
        var options = {
            title: 'Matrículas',
            curveType: 'function',
            legend: { position: 'bottom' },
            backgroundColor: 'transparent'
        };

        // Create and draw the chart
        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
    })
    .fail(function() {
        alert("Ops! Algo deu errado.");
    });
}