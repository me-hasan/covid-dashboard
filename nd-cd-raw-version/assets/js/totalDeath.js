$(function () {
  let apiURL = "https://jinnatul.github.io/kidProjects/covidBD/bdcovid.json";

  let covid_death_date = [];
  let covid_death_count = [];

  $.get(apiURL, function () {})
    .done(function (res) {
      let sizeResponse = res.length;
      for (let index = 0; index < sizeResponse; index++) {
        covid_death_date.push(res[index]["Date"]);
        covid_death_count.push(res[index]["Total_Deaths"]);
      }
      deathChart(covid_death_count, covid_death_date);
    })
    .fail(function () {
      console.log("Something went wrong!");
    });

  // console.log(covid_death_count);
  // console.log(covid_death_date);

  function deathChart(covid_death_count, covid_death_date) {
    var options = {
      series: [
        {
          data: covid_death_count,
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
        categories: covid_death_date,
      },
    };

    var chart = new ApexCharts(document.querySelector("#totalDeath"), options);
    chart.render();
  }
});
