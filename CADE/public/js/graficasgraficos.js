new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: semanas,
      datasets: [
        {
          label: "Cantidad",
          backgroundColor: ["#AC4545", "#BA3B3B","#CA2727","#D71B1B","#E90B0B","#FA0000","#E90B0B","#D71B1B","#CA2727","#BA3B3B","#AC4545","#BA3B3B","#CA2727"],
          data: valoresMes,
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Beneficiarios agregados',
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

///////////////////////////////
new Chart(document.getElementById("bar-chart2"), {
    type: 'bar',
    data: {
      labels: semanas,
      datasets: [
        {
          label: "Cantidad",
          backgroundColor: ["#AC4545", "#BA3B3B","#CA2727","#D71B1B","#E90B0B","#FA0000","#E90B0B","#D71B1B","#CA2727","#BA3B3B","#AC4545","#BA3B3B","#CA2727"],
          data: valoreseva,
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Evaluaciones',
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

/////////////////////
new Chart(document.getElementById("bar-chart5"), {
    type: 'bar',
    data: {
      labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [2478,5267,734,784,433]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050',
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
/////////////////////
new Chart(document.getElementById("bar-chart6"), {
    type: 'bar',
    data: {
      labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [2478,5267,734,784,433]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050',
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
