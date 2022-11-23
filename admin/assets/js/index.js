$(function() {
    "use strict";


// chart 1


// chart 2

 var ctx = document.getElementById("dashboard-chart-2").getContext('2d');

      var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          labels: ["KASA FARKI", "GELİR DURUMU", "GİDER DURUMU"],
          datasets: [{
            backgroundColor: [
              '#5e72e4',
              '#2dce89',
              '#f5365c'
            ],
            hoverBackgroundColor: [
              '#5e72e4',
              '#2dce89',
              '#f5365c'
            ],
            data: [25, 50, 25],
      borderWidth: [1, 1, 1]
          }]
        },
        options: {
      cutoutPercentage: 25,
            legend: {
        position: 'right',
              display: true,
        labels: {
                boxWidth:12
              }
            },
      tooltips: {
        displayColors:false,
      }
        }
      });


// chart 3

     

 //donut

    $("span.donut").peity("donut",{
          width: 120,
          height: 120
      });







   });
