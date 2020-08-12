var options = {
        series: [{
            name: "Infected",

            data: [10, 20, 35, 80]
        }],
        chart: {
            height: 350,
            type: 'line',

            zoom: {
                enabled: false
            },
            toolbar: {
          show: false,
          offsetX: 0,
        },
        },
        colors: ["#FFFF00"],
        dataLabels: {
            enabled: true
        },
        stroke: {
            curve: 'straight'
        },
        title: {
            text: 'Yellow Zone',
            align: 'left'
        },
        grid: {
            row: {
                colors: ['#ddd', 'transparent'], // takes an array which will be repeated on columns
                opacity: 0.5
            },
        },
        xaxis: {
            categories: ['W1', 'W2', 'W3', 'W4'],
        }
    };

    var chart = new ApexCharts(document.querySelector("#yellowzone"), options);
    chart.render();