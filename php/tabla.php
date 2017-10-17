<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CIMPS 2017</title>
      <!-- Bootstrap core CSS -->
      <link href="../css/estilos.css" rel="stylesheet">
      <link href="../css/bootstrap.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
      <!-- Custom styles for this template -->
      <link href="../css/justified-nav.css" rel="stylesheet">
      <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
      <link href="../css/estilos.css" rel="stylesheet">
      <link rel="stylesheet" href="../css/jquery-ui.css" />
      <script src="../js/jquery-1.10.2.min.js"></script>
      <script src="../js/jquery.numeric.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script src="../js/facebook.js"></script>
      <script src="../js/numeral.js"></script>
      <script src="../js/jquery-ui.js"></script>
	</head>
<body>
  <div class="headline-inner">
   <div class="container">
     <div class="masthead">
       <div class="row">
           <br/><br/><br/><br/>
       </div>
         <div class="jumbotron" style="background-image: url('img/logofondo.png'); width:100%; height: 100%;background-size:100% 100%;">


         <style>
         /* DivTable.com */
.divTable{
	display: table;
	width: 100%;
}
.divTableRow {
	display: table-row;
}
.divTableHeading {
	background-color: #EEE;
	display: table-header-group;
}
.divTableCell, .divTableHead {
	border: 1px solid #999999;
	display: table-cell;
	padding: 3px 10px;
}
.divTableHeading {
	background-color: #EEE;
	display: table-header-group;
	font-weight: bold;
}
.divTableFoot {
	background-color: #EEE;
	display: table-footer-group;
	font-weight: bold;
}
.divTableBody {
	display: table-row-group;
}

.tamano {
    width: 50px;
}

         </style>

         <div class="divTable" style="width: 100%;" >
   <div class="divTableBody">
   <div class="divTableRow">
   <div class="divTableCell">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
      &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
      &nbsp; &nbsp;&nbsp;&nbsp;
      &nbsp; &nbsp;&nbsp;&nbsp;
       &nbsp; &nbsp;&nbsp;&nbsp;id &nbsp; &nbsp;&nbsp;&nbsp;| pagado </div>
   <div class="divTableCell">nombre</div>
   <div class="divTableCell">correo</div>
   <div class="divTableCell">registrado</div>
   <div class="divTableCell">group</div>
   <div class="divTableCell">gaffete</div>
   </div>

             <?php
                    include 'conexion.php';
                    $conex = conect();
                    $consulta = "SELECT * FROM users ";

                    $res = mysqli_query($conex,$consulta);
                    while($row = mysqli_fetch_array($res))
          {


                       echo "<div class='divTableRow'>";
                         echo" <form id='registrationFormInfo'  method='post' action='change.php' role='form'>";
                         echo "<div class='divTableCell'>  <input type='submit' class='btn btn-primary' value='Cambiar'>   </div>";
                         echo "<div class='divTableCell'> <input class='tamano' type='text' name ='id' value=".$row['id']." /></div>";
                         echo "<div class='divTableCell'> <input  class='tamano'  type='text' name ='gaffete' value=".$row['accept']." /></div>";
                          echo "</form>";
                         echo "<div class='divTableCell'>". $row['name']. "</div>";
                         echo "<div class='divTableCell'>". $row['email']. "</div>";
                         echo "<div class='divTableCell'>". $row['registered']. "</div>";
                         echo "<div class='divTableCell'>". $row['tittle']. "</div>";
                         echo "<div class='divTableCell'>". $row['gaffete']. "</div>";


                        echo "</div>";



                       }


                     ?>



         </div>
       </div>



   <?php
   /*
          include 'conexion.php';
          $conex = conect();
          $consulta = "SELECT * FROM users ";

          $res = mysqli_query($conex,$consulta);
          while($row = mysqli_fetch_array($res))
{
             echo" <form id='registrationFormInfo'  method='post' action='change.php' role='form'>";
               //echo "<table  class='table'>";
               echo "<tr>";
               echo "<td class='clase'> <input class='inputs' type='text' name ='id' value=".$row['id']." /></td>";
               echo "<td class='clase'>". $row['name']. "</td>";
               echo "<td class='clase'>". $row['email']. "</td>";
               echo "<td class='clase'> <input  class='inputs'  type='text' name ='gaffete' value=".$row['gaffete']." /></td>";
               echo "<td class='clase'>". $row['tittle']. "</td>";
               echo "<td class='clase'>". $row['accept']. "</td>";
               echo "<td class='clase'>". $row['registered']. "</td>";
               echo "<td class='clase'>  <input type='submit' value='Submit'>   </td>";
               echo " </tr>";
            //   echo "</table>";
               echo "</form>";
             }
*/

           ?>

 </div>
</div>
</div>
  </div>
</body>
</html>
