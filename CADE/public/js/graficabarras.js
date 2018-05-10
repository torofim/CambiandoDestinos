// Bar chart
new Chart(document.getElementById("bar-chart3"), {
    type: 'bar',
    data: {
      labels: nombres,
      datasets: [
        {
          label: "Población",
          backgroundColor: ["#99ffbb","#66ff99","#33ff77","#00ff55","#00cc44","#009933","#006622","#004d1a","#003311","#004d1a","#006622","#009933"],
          data: valores,
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Población de beneficiarios por municipio',
        fontSize: 20,
        fontColor: '#000000'

      },
      scales: {
       yAxes: [{
           ticks: {
               beginAtZero: true
           }
       }]
   }
    }
});
//CHART DE PASTELLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLL
new Chart(document.getElementById("bar-chart4"), {
    type: 'bar',
    data: {
      labels: semanas,
      datasets: [
        {
          label: "Cantidad",
          backgroundColor: ["#99ffbb","#66ff99","#33ff77","#00ff55","#00cc44","#009933","#006622","#004d1a","#003311","#004d1a","#006622","#009933"],
          data: valoresplatos
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Platos comida caliente',
        fontSize: 20,
        fontColor: '#000000'

      },
      scales: {
       yAxes: [{
           ticks: {
               beginAtZero: true
           }
       }]
   }
    }
});
