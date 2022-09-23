const hostloc = "http://localhost/alpro/index.php?_route=datacall/";
const hostserv = "http://103.242.181.10/alpro/index.php?_route=datacall/";

// PIE CHART TOTAL ASSET

function tblTotalAsset(data) {
  let dataTotal = ``;
  data.forEach((e) => {
    dataTotal += `<tr>
                        <td><span style="position:relative; display: block; width:20px; height: 20px; background-color:rgb(88, 151, 252); border:1px solid black;"><span></td>
                        <th>ODC</th>
                        <th>:</th>
                        <th class="text-center">${e["total_odc"]}</th>
                    </tr>
                    <tr>
                        <td><span style="position:relative; display: block; width:20px; height: 20px; background-color:rgb(47, 93, 237); border:1px solid black;"><span></td>
                        <th>ODP</th>
                        <th>:</th>
                        <th class="text-center">${e["total_odp"]}</th>
                    </tr>
                    <tr>
                        <td><span style="position:relative; display: block; width:20px; height: 20px; background-color:rgb(11, 51, 176); border:1px solid black;"><span></td>
                        <th>Port</th>
                        <th>:</th>
                        <th class="text-center">${e["total_port"]}</th>
                    </tr>
                    <tr>
                        <td><span style="position:relative; display:   block; width:20px; height: 20px; background-color:rgb(50, 77, 161); border:1px solid black;"><span></td>
                        <th>Pelanggan</th>
                        <th>:</th>
                        <th class="text-center">${e["total_pelanggan"]}</th>
                    </tr>`;
  });

  const tblAsset = document.getElementById("dataAsset");

  tblAsset.innerHTML = dataTotal;
}

const divData = document.querySelector("div#dataTotal");

const region = divData.querySelector("select#region");
const loc = divData.querySelector("select#location");
const subloc = divData.querySelector("select#subloc");
const tabelData = divData.querySelector("table#assetTotal");

const xhr = new XMLHttpRequest();
var myChart = ``;

xhr.open("POST", hostserv + region.id);
// xhr.open('POST' , hostserv+region.id);
xhr.send();
xhr.addEventListener("load", function () {
  if (xhr.status == 200) {
    const jsonRes = JSON.parse(xhr.response);
    const jsonReg = jsonRes["reg"];
    const jsonTotal = jsonRes["total"];

    let optionLoc = `<option value="all" selected>Region</option>`;
    if (jsonReg.length > 0) {
      jsonReg.forEach((e) => {
        optionLoc += `<option value="${e["nama"]}">${e["nama"]}</option>`;
      });
    }

    tblTotalAsset(jsonTotal);

    loc.innerHTML = `<option value="all" selected>Lokasi</option>`;
    subloc.innerHTML = `<option value="all" selected>Sub Lokasi</option>`;

    region.innerHTML = optionLoc;
    // tabelData.innerHTML = dataTotal;

    // myLineChart = new Chart(document.getElementById("myLineChart"), {
    //   type: "line",
    //   data: (data = {
    //     labels: ["ODC", "ODP", "Port", "Pelanggan"],
    //     datasets: [
    //       {
    //         label: "Total",
    //         borderColor: ["rgb(50, 118, 191)"],
    //         fill: false,
    //         // borderWidth: 1,
    //         tension: 0.1,
    //         data: [
    //           jsonTotal[0]["total_odc"],
    //           jsonTotal[0]["total_odp"],
    //           jsonTotal[0]["total_port"],
    //           jsonTotal[0]["total_pelanggan"],
    //         ],
    //       },
    //     ],
    //   }),
    //   options: {
    //     plugins: {
    //       legend: {
    //         display: false,
    //       },
    //       // title: {
    //       //     display: true,
    //       //     text: 'Total Data Asset'
    //       // }
    //     },
    //   },
    // });

    const legendMargin = {
      id: "legendMargin",
      beforeInit(chart, legend, option) {
        console.log(chart.legend.fit);

        const fitValue = chart.legend.fit;

        chart.legend.fit = function fit() {
          fitValue.bind(chart.legend)();
          return (this.height += 40);
        };
      },
    };

    myChart = new Chart(document.getElementById("myDonatChart"), {
      type: "pie",
      data: {
        labels: ["ODC", "ODP", "Port", "Pelanggan"],
        datasets: [
          {
            label: "Total",
            backgroundColor: [
              "rgb(88, 151, 252)",
              "rgb(47, 93, 237)",
              "rgb(11, 51, 176)",
              "rgb(50, 77, 161)",
            ],
            borderColor: [
              // "black",
            ],
            borderWidth: 0,
            // datalabels: {
            //   color: 'white'
            // },
            // cutout: '70%',
            borderRadius: 3,
            data: [
              jsonTotal[0]["total_odc"],
              jsonTotal[0]["total_odp"],
              jsonTotal[0]["total_port"],
              jsonTotal[0]["total_pelanggan"],
            ],
            hoverOffset: 6,
          },
        ],
      },
      plugins: [ChartDataLabels],
      options: {
        maintainAspectRatio: false,
        layout: {
          padding: 40,
        },
        plugins: {
          legend: {
            display: false,
            // position: "right",
            // fullSize: true,
          },
          // title: {
          //     display: true,
          //     text: 'Total Data Asset'
          // },
          datalabels: {
            color: "black",
            anchor: "end",
            align: "end",
            offset: 10,
          },
        },
        // indexAxis: "x",
      },
    });
  } else {
    console.log(xhr.response);
    alert(xhr.response);
  }
});

region.addEventListener("change", function () {
  const val = this.value;
  const xhr = new XMLHttpRequest();

  xhr.open("POST", hostserv + loc.id);
  // xhr.open('POST' , hostserv+loc.id);

  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.send("name=" + val);

  xhr.addEventListener("load", function () {
    if (xhr.status == 200) {
      const jsonRes = JSON.parse(xhr.response);
      const jsonLoc = jsonRes["loc"] ? jsonRes["loc"] : [];
      const jsonTotal = jsonRes["total"];

      if (val == "all") {
        loc.innerHTML = `<option value="all" selected>Lokasi</option>`;
        subloc.innerHTML = `<option value="all" selected>Sub Lokasi</option>`;
      } else {
        let optionLoc = `<option value="all" selected>Lokasi</option>`;

        if (jsonLoc.length > 0) {
          jsonLoc.forEach((e) => {
            optionLoc += `<option value="${e["nama_loc"]}">${e["nama_loc"]}</option>`;
          });
        }

        loc.innerHTML = optionLoc;
      }

      tblTotalAsset(jsonTotal);

      updateChart(myChart, jsonTotal);
    } else {
      console.log(xhr.response);
      alert(xhr.response);
    }
  });
});

loc.addEventListener("change", function () {
  const regVal = region.value;
  const val = this.value;
  const xhr = new XMLHttpRequest();
  xhr.open("POST", hostserv + subloc.id);
  // xhr.open('POST' , hostserv+subloc.id);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.send("reg=" + regVal + "&lok=" + val);
  xhr.addEventListener("load", function () {
    if (xhr.status == 200) {
      const jsonRes = JSON.parse(xhr.response);
      const jsonSubLoc = jsonRes["subloc"] ? jsonRes["subloc"] : [];
      const jsonTotal = jsonRes["total"];

      let all = `<option value="all" selected>Sub Lokasi</option>`;

      if (val == "all") {
        subloc.innerHTML = all;
      } else {
        if (jsonSubLoc.length > 0) {
          jsonSubLoc.forEach((e) => {
            all += `<option value="${e["nama_sub_loc"]}">${e["nama_sub_loc"]}</option>`;
          });
        }

        subloc.innerHTML = all;
      }
      tblTotalAsset(jsonTotal);
      updateChart(myChart, jsonTotal);
    } else {
      console.log(xhr.response);
      alert(xhr.response);
    }
  });
});

subloc.addEventListener("change", function () {
  const val = this.value;
  const locVal = loc.value;
  const regVal = region.value;

  const xhr = new XMLHttpRequest();

  xhr.open("POST", hostserv + "subloc_end");
  // xhr.open('POST' , hostserv+'subloc_end');

  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.send("region=" + regVal + "&location=" + locVal + "&subloc=" + val);

  xhr.addEventListener("load", function () {
    if (xhr.status == 200) {
      const jsonRes = JSON.parse(xhr.response)["total"];
      tblTotalAsset(jsonRes);
      updateChart(myChart, jsonRes);
    } else {
      console.log(xhr.response);
      alert(xhr.response);
    }
  });
});

function updateChart(chart, data) {
  chart.data.datasets.forEach((dataset) => {
    dataset.data = [
      data[0]["total_odc"],
      data[0]["total_odp"],
      data[0]["total_port"],
      data[0]["total_pelanggan"],
    ];
  });
  chart.update();
}

// BAR CHART REVENUE

const btnTahun = document.getElementById("tahun");
const btnBulan = document.getElementById("bulan");
const btnHari = document.getElementById("hari");

// Bulan dengan Tahun Tertentu
const periode = document.getElementById("periode");

periode.onchange = () => {
  xhrYear;
};

periode.onblur = () => {
  xhrYear;
};

// Tahun jangka 0000 - 0000
const between = document.getElementById("between");
const start = document.getElementById("start");
const end = document.getElementById("end");

// Tanggal
const d = new Date();

const month =
  (d.getMonth() + 1).toString().length == 1
    ? "0" + (d.getMonth() + 1).toString()
    : d.getMonth() + 1;

start.addEventListener("blur", function () {
  validStart();
  xhrBetween();
});

start.addEventListener("change", function () {
  validStart();
  xhrBetween();
});

end.addEventListener("blur", function () {
  validEnd();
  xhrBetween();
});

end.addEventListener("change", function () {
  validEnd();
  xhrBetween();
});

function validStart() {
  if (start.value > end.value) {
    start.value = end.value;
  }
  if (start.value < 2010 || start.value > 2050) {
    start.value = d.getFullYear();
  }
}

function validEnd() {
  if (end.value < start.value) {
    end.value = start.value;
  }

  if (end.value < 2010 || end.value > 2050) {
    end.value = d.getFullYear();
  }
}

periode.addEventListener("blur", function () {
  if (periode.value < 2010 || periode.value > 2050) {
    periode.value = d.getFullYear();
  }
});

$("#periode").yearpicker({
  year: d.getFullYear(),
  startYear: 2010,
  endYear: 2050,
});

// var dataBulan = [];

// const xhrBar = new XMLHttpRequest();
// xhrBar.open("POST", hostserv + "revenue_month");

// xhrBar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

// xhrBar.send("year=" + periode.value);

// xhrBar.addEventListener("load", function () {
//   if (xhrBar.status == 200) {
//     const jsonRes = JSON.parse(xhrBar.responseText)["data"];

//     jsonRes.forEach((val) => {
//       const dateMonth =
//         val["month"].length == 1 ? "0" + val["month"] : val["month"];
//       dataBulan.push({
//         x: Date.parse(val["year"] + "-" + dateMonth + "-01T00:00:00"),
//         y: val["total_rev"],
//       });
//     });
//   } else {
//     console.log(xhrBar.response);
//     alert(xhrBar.response);
//   }
// });

xhrYear();

const myBarChart = new Chart(document.getElementById("myBarChart"), {
  type: "line",
  data: {
    datasets: [
      {
        label: "Total Per Bulan",
        data: [],
        backgroundColor: "rgb(75, 192, 192,0.5)",
        fill: true,
        borderColor: "rgb(75, 192, 192)",
        tension: 0.4,
        borderWidth: 2,
        pointRadius: 6,
      },
    ],
  },
  plugins: [ChartDataLabels],
  options: {
    maintainAspectRatio: false,
    responsive: true,
    parsing: {
      xAksisKey: "x",
      yAksisKey: "y",
    },
    layout: {
      padding: {
        top: 40,
        bottom: 10,
      },
    },
    interaction: {
      intersect: false,
      mode: "index",
    },
    plugins: {
      legend: {
        display: false,
      },
      title: {
        display: false,
        text: "Total Per Tanggal",
        // padding: {
        //     top: 10,
        //     bottom: 30
        // },
        font: {
          size: 20,
        },
      },
      datalabels: {
        font: {
          size: 14,
          weight: "bold",
        },
        anchor: "end",
        align: "end",
        rotation: -90,
        display: false,
        offset: 10,
        // labels: datelabel,
        formatter: function (value, context) {
          if (context.dataset.data[context.dataIndex].y) {
            return context.dataset.data[context.dataIndex].y;
          }
        },
      },
    },
    scales: {
      x: {
        type: "time",
        time: {
          unit: "month",
          // parser: 'dd-mm-yyyy'
        },
      },
      y: {
        stacked: true,
        beginAtZero: true,
        ticks: {
          // stepSize: 1
        },
      },
    },
  },
});

btnHari.addEventListener("click", () => {
  if (periode.classList.contains("hidden")) {
    periode.classList.remove("hidden");
  }
  between.classList.add("hidden");
  periode.type = "month";
  periode.value = d.getFullYear() + "-" + month;
  periode.classList.remove("yearpicker");

  periode.onfocus = function () {
    periode.nextElementSibling.classList.add("hide");
  };

  periode.onchange = () => {
    xhrMonth();
  };

  periode.onblur = () => {
    xhrMonth();
  };

  xhrMonth();
});

btnBulan.addEventListener("click", () => {
  if (periode.classList.contains("hidden")) {
    periode.classList.remove("hidden");
  }

  between.classList.add("hidden");
  periode.type = "number";
  periode.value = d.getFullYear();
  periode.classList.add("yearpicker");

  periode.onfocus = function () {
    periode.nextElementSibling.classList.remove("hide");
  };

  periode.onchange = () => {
    xhrYear();
  };

  periode.onblur = () => {
    xhrYear();
  };

  xhrYear();
});

btnTahun.addEventListener("click", function () {
  periode.classList.add("hidden");
  between.classList.remove("hidden");

  start.value = d.getFullYear();
  end.value = d.getFullYear() + 1;

  xhrBetween();
});

function updateDataBarChart(chart, data, unit = "month") {
  chart.data.datasets.forEach((dataset) => {
    dataset.data = data;
  });
  chart.options.scales.x.time.unit = unit;
  if (unit == "day") {
    chart.options.plugins.datalabels.font.size = 10;
    chart.options.plugins.datalabels.rotation = -80;
    chart.options.plugins.datalabels.ofset = 0;
    chart.options.plugins.datalabels.display = true;
  } else {
    chart.options.plugins.datalabels.font.size = 16;
    chart.options.plugins.datalabels.rotation = -90;
    chart.options.plugins.datalabels.ofset = 10;
    chart.options.plugins.datalabels.display = false;
  }
  chart.update();
}

function xhrBetween() {
  const xhr = new XMLHttpRequest();

  xhr.open("POST", hostserv + "revenue_between");

  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.send("start=" + start.value + "&end=" + end.value);

  xhr.addEventListener("load", function () {
    if (xhr.status == 200) {
      const jsonRes = JSON.parse(xhr.responseText)["data"];
      const dataTahun = [];
      jsonRes.forEach((val) => {
        dataTahun.push({
          x: Date.parse(val["year"] + "-12-31T00:00:00"),
          y: val["total_rev"],
        });
      });
      updateDataBarChart(myBarChart, dataTahun, "year");
    } else {
      console.log(xhr.response);
      alert(xhr.response);
    }
  });
}

function xhrYear() {
  const xhr = new XMLHttpRequest();

  xhr.open("POST", hostserv + "revenue_month");

  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.send("year=" + periode.value);

  xhr.addEventListener("load", function () {
    if (xhr.status == 200) {
      const jsonRes = JSON.parse(xhr.responseText)["data"];
      const dataBulan = [];
      jsonRes.forEach((val) => {
        const dateMonth =
          val["month"].length == 1 ? "0" + val["month"] : val["month"];
        dataBulan.push({
          x: Date.parse(val["year"] + "-" + dateMonth + "-01T00:00:00"),
          y: val["total_rev"],
        });
      });
      console.log(dataBulan);
      updateDataBarChart(myBarChart, dataBulan);
    } else {
      console.log(xhr.response);
      alert(xhr.response);
    }
  });
}

function xhrMonth() {
  const xhr = new XMLHttpRequest();

  xhr.open("POST", hostserv + "revenue_day");

  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.send("month=" + periode.value);

  xhr.addEventListener("load", function () {
    if (xhr.status == 200) {
      const jsonRes = JSON.parse(xhr.responseText)["data"];
      const dataHari = [];
      jsonRes.forEach((val) => {
        dataHari.push({
          x: Date.parse(val["tanggal"] + "T00:00:00"),
          y: val["total_rev"],
        });
      });

      updateDataBarChart(myBarChart, dataHari, "day");
    } else {
      console.log(xhr.response);
      alert(xhr.response);
    }
  });
}

// DataTable All Asset
$("#allAsset").DataTable();
