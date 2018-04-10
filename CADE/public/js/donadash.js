

//PHP DONDE ESTA SACAR LOS DATOS DE LA BDD
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="Cambiando_Destinos";
  $con= mysqli_connect($servername,$username,$password,$dbname);

  $sql="SELECT count(id) AS total FROM users ";
  $result= mysqli_query($con, $sql);
  $values= mysqli_fetch_assoc($result);
  $num_rows= $values['total'];
  $num_rows;
  echo htmlspecialchars($num_rows);

 var div=document.getElementById("target");
 var myData=div.textContent;
Chart.defaults.global.legend.display = false;

  new Chart(document.getElementById("doughnut-chart"), {
type: 'doughnut',
data: {
     labels: ["Activos",""],
  datasets: [
    {
      backgroundColor: ["#3e95cd", "Transparent"],
      //AQUI ES DONDE VOY A PONER LA VARIABLE
      borderColor: [
         'rgba(255,255,255,1)',
         'rgba(54, 162, 235,0)'

     ],
      data: [myData,20]
    }]
},
options: {

}
});


      new Chart(document.getElementById("doughnut-chart2"), {
type: 'doughnut',
data: {
  datasets: [
    {
      backgroundColor: ["#3e95cd", "#8e5ea2"],
      data: [65,35]
    }
  ]
},
});
