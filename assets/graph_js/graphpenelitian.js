$(document).ready(function() {
    $.ajax({

        url: "https://localhost/simchecker/assets/graph_json/_record-penelitian.json",
        type: 'GET',
        success: function(data) {
        
            apiChart = new FusionCharts({
                type: 'spline',
                renderAt: 'chart-penelitian',
                width: '100%',
                height: '280',
                dataFormat: 'jsonurl',
                dataSource: 'https://localhost/simchecker/assets/graph_json/_record-penelitian.json'
            });
            apiChart.render();
        }
    });
});