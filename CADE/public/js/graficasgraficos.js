new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: semanas,
      datasets: [
        {
          label: "Cantidad",
          backgroundColor:["#99ffbb","#66ff99","#33ff77","#00ff55","#00cc44","#009933","#006622","#004d1a","#003311","#004d1a","#006622","#009933"],
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
          backgroundColor: ["#99ffbb","#66ff99","#33ff77","#00ff55","#00cc44","#009933","#006622","#004d1a","#003311","#004d1a","#006622","#009933"],
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
          backgroundColor: ["#99ffbb","#66ff99","#33ff77","#00ff55","#00cc44","#009933","#006622","#004d1a","#003311","#004d1a","#006622","#009933"],
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
