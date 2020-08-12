$(function () {
  let apiURL = "https://jinnatul.github.io/kidProjects/covidBD/bdcovid.json";

  let covid_recovered_date = [];
  let covid_recovered_count = [];

  $.get(apiURL, function () {})
    .done(function (res) {
      let sizeResponse = res.length;
      for (let index = 0; index < sizeResponse; index++) {
        covid_recovered_date.push(res[index]["Date"]);
        covid_recovered_count.push(res[index]["Total_Recovered"]);
      }
      recoveredChart(covid_recovered_count, covid_recovered_date);
    })
    .fail(function () {
      console.log("Something went wrong!");
    });

  // console.log(covid_recovered_count);
  // console.log(covid_recovered_date);

  function recoveredChart(covid_recovered_count, covid_recovered_date) {
    var options = {
      series: [
        {
          data: covid_recovered_count,
        },
      ],
      chart: {
        height: 130,
        type: "line",
        zoom: {
          enabled: false,
        },
        toolbar: {
          show: false,
          offsetX: 0,
        },
      },
      dataLabels: {
        enabled: false,
      },
      stroke: {
        curve: "straight",
      },
      grid: {
        show: false,
        xaxis: {
          lines: {
            show: false,
          },
        },
        yaxis: {
          lines: {
            show: false,
          },
        },
        row: false,
      },
      xaxis: {
        categories: covid_recovered_date,
      },
    };

    var chart = new ApexCharts(
      document.querySelector("#totalrecovered"),
      options
    );
    chart.render();
  }
});
