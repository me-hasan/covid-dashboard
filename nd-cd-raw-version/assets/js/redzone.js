var options = {
        series: [{
            name: "Infected",

            data: [20, 30, 45, 70]
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
        colors: ["#FF0000"],
        dataLabels: {
            enabled: true
        },
        stroke: {
            curve: 'straight'
        },
        title: {
            text: 'রেড জোন',
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

    var chart = new ApexCharts(document.querySelector("#redzone"), options);
    chart.render();