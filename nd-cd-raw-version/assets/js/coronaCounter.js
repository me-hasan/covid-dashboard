$(function () {
  var apiURL = "https://jinnatul.github.io/kidProjects/covidBD/bdcovid.json";
  $.get(apiURL, function () {})
    .done(function (res) {
      var dataPosition = res.length - 1;
      var data = res[dataPosition];

      // Last 24 hours info

      $("#last_infected").text(toBangla(data.Today_Positive));
      $("#last_recovered").text(toBangla(data.Today_Recovered));
      $("#last_dead").text(toBangla(data.Today_Deaths));
      $("#last_test").text(toBangla(data.Today_Tests));

      // Total data
      $("#total_infected").text(toBangla(data.Total_Positive));
      $("#total_recovered").text(toBangla(data.Total_Recovered));
      $("#total_dead").text(toBangla(data.Total_Deaths));
      $("#total_test").text(toBangla(data.Total_Tests));

    })
    .fail(function () {
      console.log("Internal Problem!!!");
    });
});


function toBangla(num) {
  return new Number(num).toLocaleString("bn-BD");
}