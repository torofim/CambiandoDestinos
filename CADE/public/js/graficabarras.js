// Bar chart
new Chart(document.getElementById("bar-chart3"), {
    type: 'bar',
    data: {
      labels: nombres,
      datasets: [
        {
          label: "Población",
          backgroundColor: ["#AC4545", "#BA3B3B","#CA2727","#D71B1B","#E90B0B","#FA0000","#E90B0B","#D71B1B","#CA2727","#BA3B3B","#AC4545","#BA3B3B","#CA2727"],
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
          backgroundColor: ["#AC4545", "#BA3B3B","#CA2727","#D71B1B","#E90B0B","#FA0000","#E90B0B","#D71B1B","#CA2727","#BA3B3B","#AC4545","#BA3B3B","#CA2727"],
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
