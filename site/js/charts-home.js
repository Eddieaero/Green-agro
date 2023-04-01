"use strict";
document.addEventListener("DOMContentLoaded", function () {
    // Main Template Color
    var brandPrimary = "#33b35a";

    // ------------------------------------------------------- //
    // Line Chart
    // ------------------------------------------------------ //
    var LINECHART = document.getElementById("lineCahrt");
    var myLineChart = new Chart(LINECHART, {
        type: "line",
        options: {
            legend: {
                display: true,
            },
        },
        data: {
            labels: ["Oct", "Nov", "Dec", "Jan", "Feb", "Mar", "Apr"],
            datasets: [
                {
                    label: "Soil Moisture",
                    fill: true,
                    lineTension: 0.3,
                    backgroundColor: "rgba(75,192,192,0.4)",
                    borderColor: "rgba(75,192,192,1)",
                    borderCapStyle: "butt",
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: "miter",
                    borderWidth: 1,
                    pointBorderColor: "rgba(75,192,192,1)",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(75,192,192,1)",
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [50, 20, 60, 31, 52, 22, 40],
                    spanGaps: false,
                },
                {
                    label: "Soil Temperature",
                    fill: true,
                    lineTension: 0.3,
                    backgroundColor: "rgba(255,159,64,0.4)",
                    borderColor: "rgba(255,159,64,1)",
                    borderCapStyle: "butt",
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: "miter",
                    borderWidth: 1,
                    pointBorderColor: "rgba(255,159,64,1)",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(255,159,64,1)",
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [18, 19, 20, 22, 24, 25, 23],
                    spanGaps: false,
                }, {
                    label: "Soil pH",
                    fill: true,
                    lineTension: 0.3,
                    backgroundColor: "rgba(75,192,192,0.4)",
                    borderColor: "rgba(75,192,192,1)",
                    borderCapStyle: "butt",
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: "miter",
                    borderWidth: 1,
                    pointBorderColor: "rgba(75,192,192,1)",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(75,192,192,1)",
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [6.5, 6.3, 6.2, 6.6, 6.4, 6.7, 6.8],
                    spanGaps: false
                },
                {
                    label: "Nitrogen Content",
                    fill: true,
                    lineTension: 0.3,
                    backgroundColor: "rgba(192,75,192,0.4)",
                    borderColor: "rgba(192,75,192,1)",
                    borderCapStyle: "butt",
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: "miter",
                    borderWidth: 1,
                    pointBorderColor: "rgba(192,75,192,1)",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(192,75,192,1)",
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [120, 100, 110, 90, 130, 120, 100],
                    spanGaps: false
                },
                {
                    label: "Organic Content",
                    fill: true,
                    lineTension: 0.3,
                    backgroundColor: "rgba(192,192,75,0.4)",
                    borderColor: "rgba(192,192,75,1)",
                    borderCapStyle: "butt",
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: "miter",
                    borderWidth: 1,
                    pointBorderColor: "rgba(192,192,75,1)",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(192,192,75,1)",
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [2.5, 2.4, 2.2, 2.6, 2.8, 2.9, 2.7],
                    spanGaps: false
                }

            ],
        },
    });

    // ------------------------------------------------------- //
    // Pie Chart
    // ------------------------------------------------------ //


    // ------------------------------------------------------- //
    // Pie Chart
    // ------------------------------------------------------ //
    var MONTHLYPROGRESS = document.getElementById("monthlyProgress");
    var myPieChart = new Chart(MONTHLYPROGRESS, {
        type: "doughnut",
        options: {
            cutoutPercentage: 93,
            responsive: true,
            maintainAspectRatio: true,
            legend: {
                display: false,
            },
        },
        data: {
            labels: ["First", "Second"],
            datasets: [
                {
                    data: [300, 50],
                    borderWidth: [1, 1],
                    backgroundColor: [brandPrimary, "#ffffff"],
                    hoverBackgroundColor: [brandPrimary, "#ffffff"],
                },
            ],
        },
    });
});
