new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: semanas,
      datasets: [
        {
          label: "Cantidad",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: valoresMes
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Comida caliente',
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
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
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
new Chart(document.getElementById("bar-chart3"), {
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
new Chart(document.getElementById("bar-chart4"), {
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
