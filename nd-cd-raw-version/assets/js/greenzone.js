var options = {
        series: [{
            name: "Infected",

            data: [5, 25, 65, 78]
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
        colors: ["#32CD32"],
        dataLabels: {
            enabled: true
        },
        stroke: {
            curve: 'straight'
        },
        title: {
            text: 'Green Zone',
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

    var chart = new ApexCharts(document.querySelector("#greenzone"), options);
    chart.render();