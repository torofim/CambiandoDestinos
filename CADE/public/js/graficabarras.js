// Bar chart
new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: ["N.C.G", "Asencion", "Buenaventura", "Benito", "Flores Magón"],
      datasets: [
        {
          label: "Población",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [25,30,20,7,4]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Poblacion de beneficiarios por municipio'
      }
    }
});
//CHART DE PASTELLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLL
new Chart(document.getElementById("bar-chart2"), {
    type: 'bar',
    data: {
      labels: ["Requieren", "Cuenta", "No necesita"],
      datasets: [
        {
          label: "Cantidad",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f"],
          data: [28,16,4]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Poblacion de beneficiarios | Apoyo funcional'
      }
    }
});
