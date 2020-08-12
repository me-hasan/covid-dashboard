$(function () {
  var apiURL = "https://corona-bd.herokuapp.com/district";
  $.get(apiURL, function () {})
    .done(function (res) {
      var districtData = res.data;
      setData(res);
      changeData(districtData);
      setMapData(districtData);
    })
    .fail(function () {
      console.log("Internal Problem!!!");
    });
});

function setData(res) {
  var pages = Math.ceil(res.data.length / 10);

  var btnStr = "<nav aria-label='Page navigation example'>";
  btnStr += "<ul class='pagination justify-content-center pagination-sm mb-0'>";

  for (var i = 1; i <= pages; i++) {
    btnStr += "<li class='page-item'>";
    btnStr +=
      "<input type='button' class='commonClass' id='" +
      i +
      "' value='" +
      i +
      "'></li>";
  }
  btnStr += "</ul></nav>";
  makeTable(res.data, 1);
  $("#districtBtn").html(btnStr);
}

function changeData(data) {
  $(".commonClass").click(function () {
    var pageNum = this.id;
    makeTable(data, pageNum);
  });
}

function makeTable(data, pageNum) {
  var tableStr =
    "<table class='table mt-3 mb-3 table-bordered table-striped small table-sm'>";
  tableStr +=
    "<thead><tr><th scope='col'><strong>District</strong></th><th scope='col'>";
  tableStr += "<strong>Last</strong></th></tr></thead><tbody>";

  var currentNum = pageNum * 10;
  for (var i = currentNum - 10; i < Math.min(currentNum, data.length); i++) {
    tableStr += "<tr><td>" + data[i].name + "</td>";
    tableStr += "<td>" + data[i].count + "</td></tr>";
  }
  tableStr += "</tbody></table>";
  $("#districtTable").html(tableStr);
}

function setMapData(districtData) {
  console.log(districtData);

  $("a").on("click", function () {
    let districtId = $(this).data("id");
    let districtName = $(this).data("value");
    if (districtName === "Dhaka") districtName = "Dhaka (District)";
    if (districtName === "Coxs Bazar") districtName = "Cox's bazar";
    let selectedDistrict = districtData.find((o) => o.name === districtName);

    console.log(selectedDistrict);
    console.log(districtId);
    console.log(districtName);
    let msg = `${districtName} has ${selectedDistrict.count} infected cases.`;
    setModal(msg);
    // $("#myId").text(districtName + " " + selectedDistrict.count + " infected.");
  });
}

function setModal(msg) {
  swal({
    text: msg,
  });
}
