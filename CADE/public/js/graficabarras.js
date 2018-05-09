// Bar chart
new Chart(document.getElementById("bar-chart3"), {
    type: 'bar',
    data: {
      labels: nombres,
      datasets: [
        {
          label: "Población",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
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
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#252525"],
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
