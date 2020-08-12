$(function () {
  let apiURL = "https://jinnatul.github.io/kidProjects/covidBD/bdcovid.json";

  let covid_affected_date = [];
  let covid_affected_count = [];

  $.get(apiURL, function () {})
    .done(function (res) {
      let sizeResponse = res.length;
      for (let index = 0; index < sizeResponse; index++) {
        covid_affected_date.push(res[index]["Date"]);
        covid_affected_count.push(res[index]["Total_Positive"]);
      }
      affectedChart(covid_affected_count, covid_affected_date);
    })
    .fail(function () {
      console.log("Something went wrong!");
    });

  // console.log(covid_affected_count);
  // console.log(covid_affected_date);

  function affectedChart(covid_affected_count, covid_affected_date) {
    var options = {
      series: [
        {
          data: covid_affected_count,
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
        categories: covid_affected_date,
      },
    };

    var chart = new ApexCharts(
      document.querySelector("#totalaffected"),
      options
    );
    chart.render();
  }
});
