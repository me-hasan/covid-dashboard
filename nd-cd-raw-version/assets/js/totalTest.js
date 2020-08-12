$(function () {
  let apiURL = "https://jinnatul.github.io/kidProjects/covidBD/bdcovid.json";

  let covid_test_date = [];
  let covid_test_count = [];

  $.get(apiURL, function () {})
    .done(function (res) {
      let sizeResponse = res.length;
      for (let index = 0; index < sizeResponse; index++) {
        covid_test_date.push(res[index]["Date"]);
        covid_test_count.push(res[index]["Total_Tests"]);
      }
      testChart(covid_test_count, covid_test_date);
    })
    .fail(function () {
      console.log("Something went wrong!");
    });

  // console.log(covid_test_count);
  // console.log(covid_test_date);

  function testChart(covid_test_count, covid_test_date) {
    var options = {
      series: [
        {
          data: covid_test_count,
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
        categories: covid_test_date,
      },
    };

    var chart = new ApexCharts(
      document.querySelector("#totalTest"),
      options
    );
    chart.render();
  }
});