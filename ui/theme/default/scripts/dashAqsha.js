const hostloc = "http://localhost/alpro/index.php?_route=datacall/";
const hostserv = "http://103.242.181.10/alpro/index.php?_route=datacall/";

const divData = document.querySelector("div#dataTotal");

const region = divData.querySelector("select#region");
const loc = divData.querySelector("select#location");
const subloc = divData.querySelector("select#subloc");
const tabelData = divData.querySelector("table#assetTotal");

const xhr = new XMLHttpRequest();
var myChart = ``;
var myChart = ``;

xhr.open("POST", hostserv + region.id);
// xhr.open('POST' , hostserv+region.id);
xhr.send();
xhr.addEventListener("load", function () {
  if (xhr.status == 200) {
    const jsonRes = JSON.parse(xhr.response);
    const jsonReg = jsonRes["reg"];
    const jsonTotal = jsonRes["total"];

    let optionLoc = `<option value="All" selected>Region</option>`;
    let dataTotal = ``;
    if (jsonReg.length > 0) {
      jsonReg.forEach((e) => {
        optionLoc += `<option value="${e["nama"]}">${e["nama"]}</option>`;
      });
    }

    // jsonTotal.forEach(e => {
    //     dataTotal += `<tr>
    //                         <th>Total ODC</th>
    //                         <td class="text-center">${e['total_odc']}</td>
    //                     </tr>
    //                     <tr>
    //                         <th>Total ODP</th>
    //                         <td class="text-center">${e['total_odp']}</td>
    //                     </tr>
    //                     <tr>
    //                         <th>Total Port</th>
    //                         <td class="text-center">${e['total_port']}</td>
    //                     </tr>
    //                     <tr>
    //                         <th>Total Pelanggan</th>
    //                         <td class="text-center">${e['total_pelanggan']}</td>
    //                     </tr>`
    //                     ;
    // });

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

    myChart = new Chart(document.getElementById("myBarChart"), {
      type: "doughnut",
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
              "rgb(88, 151, 252)",
              "rgb(47, 93, 237)",
              "rgb(11, 51, 176)",
              "rgb(50, 77, 161)",
            ],
            borderWidth: 1,
            data: [
              jsonTotal[0]["total_odc"],
              jsonTotal[0]["total_odp"],
              jsonTotal[0]["total_port"],
              jsonTotal[0]["total_pelanggan"],
            ],
            hoverOffset: 15,
          },
        ],
      },
      options: {
        layout: {
          padding: 20,
        },
        plugins: {
          legend: {
            display: false,
            // position: "right",
          },
          // title: {
          //     display: true,
          //     text: 'Total Data Asset'
          // }
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

      let liData = ``;

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

      // jsonTotal.forEach(e => {
      //     liData += `<tr>
      //     <th>Total ODC</th>
      //     <td class="text-center">${e['total_odc']}</td>
      // </tr>
      // <tr>
      //     <th>Total ODP</th>
      //     <td class="text-center">${e['total_odp']}</td>
      // </tr>
      // <tr>
      //     <th>Total Port</th>
      //     <td class="text-center">${e['total_port']}</td>
      // </tr>
      // <tr>
      //     <th>Total Pelanggan</th>
      //     <td class="text-center">${e['total_pelanggan']}</td>
      // </tr>`;

      // });

      // tabelData.innerHTML = liData;

      updateChart(myChart, jsonTotal);
      // updateChart(myLineChart, jsonTotal);
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

      let liData = ``;
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

      // jsonTotal.forEach(e => {
      //     liData += `<tr>
      //     <th>Total ODC</th>
      //     <td class="text-center">${e['total_odc']}</td>
      // </tr>
      // <tr>
      //     <th>Total ODP</th>
      //     <td class="text-center">${e['total_odp']}</td>
      // </tr>
      // <tr>
      //     <th>Total Port</th>
      //     <td class="text-center">${e['total_port']}</td>
      // </tr>
      // <tr>
      //     <th>Total Pelanggan</th>
      //     <td class="text-center">${e['total_pelanggan']}</td>
      // </tr>`;

      // });

      // tabelData.innerHTML = liData;
      updateChart(myChart, jsonTotal);
      // updateChart(myLineChart, jsonTotal);
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
      let liData = ``;

      // jsonRes.forEach(e => {
      //     liData += `<tr>
      //     <th>Total ODC</th>
      //     <td class="text-center">${e['total_odc']}</td>
      // </tr>
      // <tr>
      //     <th>Total ODP</th>
      //     <td class="text-center">${e['total_odp']}</td>
      // </tr>
      // <tr>
      //     <th>Total Port</th>
      //     <td class="text-center">${e['total_port']}</td>
      // </tr>
      // <tr>
      //     <th>Total Pelanggan</th>
      //     <td class="text-center">${e['total_pelanggan']}</td>
      // </tr>`;
      // });

      // tabelData.innerHTML = liData;
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
