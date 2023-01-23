// MENULIST TOGGLE

$(document).ready(function () {
  displayData();
  displayproductdata();
  $("#btncustomer").on("click", function () {
    $("#completeName").val("");
    $("#completeEmail").val("");
    $("#completeContact").val("");
    $("#completeAddress").val("");
    $("#completeDate").val("");
  });
});
// $(document).ready(function () {
//   $("#successMessage").fadeIn(1000).delay(3000).fadeOut("slow");
//   $("#failedMessage").fadeIn(1000).delay(3000).fadeOut("slow");
// });
let profileNav = document.querySelector(".profileNav");
let dropdownList = document.querySelector(".dropdownList");
window.addEventListener("click", (e) => {
  if (profileNav.contains(e.target)) {
    $(".dropdownList").show();
  } else {
    $(".dropdownList").hide();
  }
});
profileNav.addEventListener("click", () => {
  dropdownList.classList.toggle("active");
});

// SIDEBAR TOGGLE

var sidebarOpen = false;
var sidebar = document.getElementById("sidebar");

function sidebarOpen() {
  if (!sidebarOpen) {
    sidebar.classList.add("sidebar-responsive");
    sidebarOpen = true;
  }
}

function closebarOpen() {
  if (sidebarOpen) {
    sidebar.classList.remove("sidebar-responsive");
    sidebarOpen = false;
  }
}

// ===== Charts ===== //

/* ===== Bar Charts ===== */
var barChartOptions = {
  series: [
    {
      data: [10, 8, 6, 4, 2],
      name: "Products",
    },
  ],
  chart: {
    type: "bar",
    background: "transparent",
    height: 350,
    toolbar: {
      show: false,
    },
  },
  colors: ["#2962ff", "#d50000", "#2e7d32", "#ff6d00", "#583cb3"],
  plotOptions: {
    bar: {
      distributed: true,
      borderRadius: 4,
      horizontal: false,
      columnWidth: "40%",
    },
  },
  dataLabels: {
    enabled: false,
  },
  fill: {
    opacity: 1,
  },
  grid: {
    borderColor: "#55596e",
    yaxis: {
      lines: {
        show: true,
      },
    },
    xaxis: {
      lines: {
        show: true,
      },
    },
  },
  legend: {
    labels: {
      colors: "#f5f7ff",
    },
    show: true,
    position: "top",
  },
  stroke: {
    colors: ["transparent"],
    show: true,
    width: 2,
  },
  tooltip: {
    shared: true,
    intersect: false,
    theme: "dark",
  },
  xaxis: {
    categories: [
      "Sagada Arabica",
      "Kalinga Robusta",
      "Benguet Blend",
      "Barako Blend",
      "French Roast",
    ],
    title: {
      style: {
        color: "#f5f7ff",
      },
    },
    axisBorder: {
      show: true,
      color: "#55596e",
    },
    axisTicks: {
      show: true,
      color: "#55596e",
    },
    labels: {
      style: {
        colors: "#f5f7ff",
      },
    },
  },
  yaxis: {
    title: {
      text: "Count",
      style: {
        color: "#f5f7ff",
      },
    },
    axisBorder: {
      color: "#55596e",
      show: true,
    },
    axisTicks: {
      color: "#55596e",
      show: true,
    },
    labels: {
      style: {
        colors: "#f5f7ff",
      },
    },
  },
};

var barChart = new ApexCharts(
  document.querySelector("#bar-chart"),
  barChartOptions
);
barChart.render();

// AREA CHART
var areaChartOptions = {
  series: [
    {
      name: "Purchase Orders",
      data: [31, 40, 28, 51, 42, 109, 100],
    },
    {
      name: "Sales Orders",
      data: [11, 32, 45, 32, 34, 52, 41],
    },
  ],
  chart: {
    type: "area",
    background: "transparent",
    height: 350,
    stacked: false,
    toolbar: {
      show: false,
    },
  },
  colors: ["#00ab57", "#d50000"],
  labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
  dataLabels: {
    enabled: false,
  },
  fill: {
    gradient: {
      opacityFrom: 0.4,
      opacityTo: 0.1,
      shadeIntensity: 1,
      stops: [0, 100],
      type: "vertical",
    },
    type: "gradient",
  },
  grid: {
    borderColor: "#55596e",
    yaxis: {
      lines: {
        show: true,
      },
    },
    xaxis: {
      lines: {
        show: true,
      },
    },
  },
  legend: {
    labels: {
      colors: "#f5f7ff",
    },
    show: true,
    position: "top",
  },
  markers: {
    size: 6,
    strokeColors: "#1b2635",
    strokeWidth: 3,
  },
  stroke: {
    curve: "smooth",
  },
  xaxis: {
    axisBorder: {
      color: "#55596e",
      show: true,
    },
    axisTicks: {
      color: "#55596e",
      show: true,
    },
    labels: {
      offsetY: 5,
      style: {
        colors: "#f5f7ff",
      },
    },
  },
  yaxis: [
    {
      title: {
        text: "Purchase Orders",
        style: {
          color: "#f5f7ff",
        },
      },
      labels: {
        style: {
          colors: ["#f5f7ff"],
        },
      },
    },
    {
      opposite: true,
      title: {
        text: "Sales Orders",
        style: {
          color: "#f5f7ff",
        },
      },
      labels: {
        style: {
          colors: ["#f5f7ff"],
        },
      },
    },
  ],
  tooltip: {
    shared: true,
    intersect: false,
    theme: "dark",
  },
};

var areaChart = new ApexCharts(
  document.querySelector("#area-chart"),
  areaChartOptions
);
areaChart.render();

// Display Function
function displayData() {
  var displayData = "true";
  $.ajax({
    url: "displaycustomerslist.php",
    type: "GET",
    data: {
      displaySend: displayData,
    },
    success: function (data, status) {
      $("#displayDataTable").html(data);
    },
  });
}

// Customer adduser
function adduser() {
  var nameAdd = $("#completeName").val();
  var emailAdd = $("#completeEmail").val();
  var contactAdd = $("#completeContact").val();
  var addressAdd = $("#completeAddress").val();
  var dateAdd = $("#completeDate").val();

  $.ajax({
    url: "addcustomerQuery.php",
    type: "post",
    data: {
      nameSend: nameAdd,
      emailSend: emailAdd,
      contactSend: contactAdd,
      addressSend: addressAdd,
      dateSend: dateAdd,
    },
    dataType: "json",
    success: function (result) {
      if (result[0] == 1) {
        document.getElementById("addcustomernameerror").innerHTML = "";
        document.getElementById("addcustomeremailerror").innerHTML = "";
        for (i = 1; i < result.length; i++) {
          switch (result[i]) {
            case "1":
              document.getElementById("addcustomernameerror").innerHTML =
                "Fill Up name";
              break;

            case "2":
              document.getElementById("addcustomeremailerror").innerHTML =
                "Fill Up email";
              break;

            case "3":
              document.getElementById("addcustomercontacterror").innerHTML =
                "Fill Up contact";
              break;

            case "4":
              document.getElementById("addcustomeraddresserror").innerHTML =
                "Fill Up address";
              break;

            case "5":
              document.getElementById("addcustomerdateerror").innerHTML =
                "Fill Up date";
              break;
          }
        }
      } else if (result[0] == 2) {
        document.getElementById("addcustomernameerror").innerHTML = "";
        document.getElementById("addcustomeremailerror").innerHTML = "";
        $("#completeModal").modal("hide");
        displayData();
      }
    },
  });
}

function clearuser() {
  document.getElementById("addcustomernameerror").innerHTML = "";
  document.getElementById("addcustomeremailerror").innerHTML = "";
}
// Delete User

// function getdeleteDetails() {
//   $("#modalDelete").modal("show");
//   $tr = $(this).closest("tr");
//   var data = $tr
//     .children("td")
//     .map(function () {
//       return $(this).text();
//     })
//     .get();
//   console.log(data[0]);
//   // $("#patient_id2").val(data[0]);
//   // $("#patient_fname2").html(data[2]);
//   // $("#patient_lname2").html(data[3]);
// }

function getdeleteDetails(deleteid) {
  $("#modalDelete").modal("show");
  $.ajax({
    url: "customerdelete.php",
    type: "post",
    data: {
      deletesend: deleteid,
    },
    success: function (data, status) {
      displayData();
    },
  });
}

// Update Function

// Getting data on database
function GetDetails(updateid) {
  $("#hiddendata").val(updateid);
  $.post("update.php", { updateid: updateid }, function (data, status) {
    var userid = JSON.parse(data);
    $("#updateName").val(userid.name);
    $("#updateEmail").val(userid.email);
    $("#updateContact").val(userid.contact);
    $("#updateAddress").val(userid.address);
    $("#updateDate").val(userid.date);
  });

  $("#updateModal").modal("show");
}

// onclick update event function
function updateDetails() {
  var updateName = $("#updateName").val();
  var updateEmail = $("#updateEmail").val();
  var updateContact = $("#updateContact").val();
  var updateAddress = $("#updateAddress").val();
  var updateDate = $("#updateDate").val();
  var hiddendata = $("#hiddendata").val();

  $.post(
    "update.php",
    {
      updateName: updateName,
      updateEmail: updateEmail,
      updateContact: updateContact,
      updateAddress: updateAddress,
      updateDate: updateDate,
      hiddendata: hiddendata,
    },
    function (data, status) {
      $("#updateModal").modal("hide");
      displayData();
    }
  );
}

// Add product

function addproductuser() {
  var addproductName = $("#productName").val();
  var productQuantity = $("#productQuantity").val();
  var productPrice1 = $("#productPrice1").val();
  var productPrice2 = $("#productPrice2").val();
  var productPrice3 = $("#productPrice3").val();
  var productPrice4 = $("#productPrice4").val();

  $.ajax({
    url: "addproductQuery.php",
    type: "post",
    data: {
      productnameSend: addproductName,
      quantitySend: productQuantity,
      price1Send: productPrice1,
      price2Send: productPrice2,
      price3Send: productPrice3,
      price4Send: productPrice4,
    },
    success: function (data, status) {
      $("#productModal").modal("hide");
      displayproductdata();
    },
  });
}
// Display Product Function
function displayproductdata() {
  var displayproductData = "true";
  $.ajax({
    url: "displayproduct.php",
    type: "GET",
    data: {
      displaySend: displayproductData,
    },
    success: function (data, status) {
      $("#displayProductDataTable").html(data);
    },
  });
}
