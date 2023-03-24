<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade5</title>
    <link rel="stylesheet" href="Style.css">

    <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
    </script>

</head>
<body>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Coloca o nome do rapaz ai po">


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "etec";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT a.codigo,a.nome,a.email FROM tbalunos a";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    echo 

    "<table id="."myTable".">
      <tr class="."header".">
        <th style="."width:40%;".">Codigo</th>
        <th style="."width:40%;".">Nome</th>
        <th style="."width:40%;".">Email</th>
      </tr>";
      
    

  while($row = $result->fetch_assoc()) {
    
    echo "<tr>".
    
    "<td>". $row["codigo"]. "</td>". 
    
    "<td>". $row["nome"].   "</td>". 
    
    "<td>". $row["email"]. "</td>". 
    
    "</tr>";
  }
  echo "</table>";
} 

else {
  echo "0 results";
}
$conn->close();

?>   
</body>
</html>   