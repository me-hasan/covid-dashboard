var options = {
          series: [{
		   name: 'Bed',
          data: [2477, 220, 220, 220, 230, 300, 360]
        }, {
		 name: 'Admitted',
          data: [808, 77, 10, 52, 33, 45, 55]
        }],
          chart: {
          type: 'bar',
          height: 430,
          toolbar: {
          show: false,
          offsetX: 0,
        },
        },
        plotOptions: {
          bar: {
            horizontal: true,
            dataLabels: {
              position: 'top',
            },
          }
        },
        dataLabels: {
          enabled: true,
          offsetX: -6,
          style: {
            fontSize: '12px',
            colors: ['#fff']
          }
        },
        stroke: {
          show: true,
          width: 1,
          colors: ['#fff']
        },
        xaxis: {
          categories: ['Dhaka', 'Chattogram', 'Rajshahi', 'Barisal', 'Rangpur', 'Sylhet', 'Mymensingh'],

        },

        };

        var chart = new ApexCharts(document.querySelector("#chartBedvsAdmitted"), options);
        chart.render();