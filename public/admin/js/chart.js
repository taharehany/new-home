/* chart.js chart examples */

// chart colors
var colors = ["#4E51BF", "#FFD29A", "#333333", "#c3e6cb", "#dc3545", "#6c757d"];

/* bar chart */
var chBar = document.getElementById("chBar");
if (chBar) {
  new Chart(chBar, {
    type: "bar",
    data: {
      labels: ["jan", "feb", "mar", "apr", "jun", "jul", "aug"],
      datasets: [
        {
          label: 'My First Dataset',
          data: [589, 445, 483, 503, 689, 692, 634],
          backgroundColor: colors[0],
        },
        {
          label: 'My First Dataset',
          data: [639, 465, 493, 478, 589, 632, 674],
          backgroundColor: colors[1],
          borderRadius: 10,
          circular: true
        },
      ],
    },
    options: {
      legend: {
        display: false,
      },
      scales: {
        y: {
          beginAtZero: true
        },
        xAxes: [
          {
            barPercentage: 0.9,
            categoryPercentage: 0.8,
          },
        ],
      },
    },
  });
}

/* 3 donut charts */
var donutOptions = {
  cutoutPercentage: 85,
  legend: {
    position: "bottom",
    padding: 5,
    labels: { pointStyle: "circle", usePointStyle: true },
  },
};

// donut 1
var chDonutData1 = {
  labels: ["Bootstrap", "Popper", "Other"],
  datasets: [
    {
      backgroundColor: colors.slice(0, 3),
      borderWidth: 0,
      data: [74, 11, 40],
    },
  ],
};
// donut 2
var chDonutData2 = {
  labels: ["Wips", "Pops", "Dags"],
  datasets: [
    {
      backgroundColor: colors.slice(0, 3),
      borderWidth: 0,
      data: [40, 45, 30],
    },
  ],
};

// donut 3
var chDonutData3 = {
  labels: ["Angular", "React", "Other"],
  datasets: [
    {
      backgroundColor: colors.slice(0, 3),
      borderWidth: 0,
      data: [21, 45, 55, 33],
    },
  ],
};

/* 3 line charts */
var lineOptions = {
  legend: { display: false },
  tooltips: { interest: false, bodyFontSize: 11, titleFontSize: 11 },
  scales: {
    xAxes: [
      {
        ticks: {
          display: false,
        },
        gridLines: {
          display: false,
          drawBorder: false,
        },
      },
    ],
    yAxes: [{ display: false }],
  },
  layout: {
    padding: {
      left: 6,
      right: 6,
      top: 4,
      bottom: 6,
    },
  },
};
