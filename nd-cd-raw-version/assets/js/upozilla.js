var options = {
        series: [{
            name: 'সংক্রামিত',

            data: [20065, 30205, 42844, 63026, 84379, 108775, 133978, 153277, null, null, null, null]
        }, {
            name: 'ফোরকাস্ট',
            data: [null, null, null, null, null, null, null, 153277, 154644, 163149, 170090, 172394]
        }],
        chart: {
            height: 380,
            type: 'line',
            zoom: {
                enabled: false
            },
            animations: {
                enabled: false
            },
            toolbar: {
          show: false,
          offsetX: 0,
        },
        },
        colors: ["#ddccdd", "#FF0000"],
        stroke: {
            width: [5, 5, 4],
            curve: 'straight'
        },
        labels: ['15May', 22, 29, '6Jun', 13, 20, 27, '2Jul', 5, 8, 11, 12],
        title: {
            text: 'পূর্ববর্তী ডাটার ভিত্তিতে পূর্বাভাস'
        },
        xaxis: {},
    };

    var chart = new ApexCharts(document.querySelector("#upozilla"), options);
    chart.render();