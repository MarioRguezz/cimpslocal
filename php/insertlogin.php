<?php
include 'conexion.php';

$title = $_POST['tittle'];
$name = $_POST['name'];
$email =  $_POST['email'];
$gender =  $_POST['gender'];
$city =  $_POST['city'];
$country =  $_POST['country'];
$reg_venue = $_POST['reg_venue'];
$afiliation_name = $_POST['afiliation_name'];
$afiliation_address =  $_POST['afiliation_address'];


if (isset($_POST['autores'])){


  $autor =  $_POST['autores'];
if(isset($_POST['normalpaper']))
{
    $normalpaper = "1";
}
else
{
    $normalpaper = "0";
}



if(isset($_POST['extrapaper']))
{
    $extrapaper = "1";
}
else
{
    $extrapaper = "0";
}



if(isset($_POST['extrapage'])) {
  $extrapage =  "1";
 $extrapageautor =  $_POST['extrapageautor'];
} else{
  $extrapage =  "0";
  $extrapageautor =  "0";
}



if(isset($_POST['conferencediner']))
{
    $conferencediner = "1";
}
else
{
    $conferencediner = "0";
}


if(isset($_POST['socialprogram']))
{
    $socialprogram = "1";
}
else
{
    $socialprogram = "0";
}


  if(isset($_POST['additionaldoc'])){
    $additionaldoc =  "1";
    $autoradditional =  $_POST['autoradditional'];
  } else{
    $additionaldoc =  "0";
    $autoradditional =  "0";
  }


  if(isset($_POST['paper_id1']))
  {
      $paper_id1 = $_POST['paper_id1'];
  }
  else
  {
      $paper_id1 = "";
  }


  if(isset($_POST['paper_title1']))
  {
      $paper_title1 = $_POST['paper_title1'];
  }
  else
  {
      $paper_title1 = "";
  }


  if(isset($_POST['paper_id2']))
  {
      $paper_id2 = $_POST['paper_id2'];
  }
  else
  {
      $paper_id2 = "";
  }

  if(isset($_POST['paper_title2']))
  {
      $paper_title2 = $_POST['paper_title2'];
  }
  else
  {
      $paper_title2 = "";
  }

/*
  echo "autor ". $autor . " ";
  echo   "normal ". $normalpaper. " ";
    echo "extra ". $extrapaper . " ";
        echo  "extrapage ". $extrapage. " ";
          echo  "extrapage ". $extrapageautor. " ";
          echo "conference ". $conferencediner . " ";
            echo  "social ".$socialprogram . " ";
              echo "additional  ". $additionaldoc . " ";
                echo  "autor adittional ".$autoradditional . " ";
                  echo "paperid1 ". $paper_id1 . " ";
                    echo  "papertitle1 ".$paper_title1 . " ";
                      echo  " paperid2". $paper_id2. " ";
                        echo   "papertitle2 ".$paper_title2 . " ";*/
  $consulta = "INSERT INTO usuario (titulo, nombre, email, genero, ciudad, pais, reg_venue, nombreafiliacion, direccionafiliacion, tipo,
     normal, extra,extrapage,extrapagecount, conference, social, additional, additionalcount, paperid1, papertitulo1, paperid2, papertitulo2)
      VALUES ('usuario', '$nombre', '$lastname','$email','$password');";

  if(mysqli_query($conexion,$consulta)){
    header('Location: aceptado.php');
  } else{
     header('Location: noaceptado.php');
  }














} else if (isset($_POST['generalpublic'])){

}
else if (isset($_POST['students'])){

}
else if (isset($_POST['companieentreprise'])){

}
else if (isset($_POST['invitado'])){

}
else if (isset($_POST['becado'])){

}
else if (isset($_POST['invitadoespecial'])){

}
else if (isset($_POST['prensa'])){

}
else if (isset($_POST['patrocinador'])){

} else{
  if (isset($_POST['poster'])){


  }
}




if (isset($variable))
	{
    //echo "Variable definida!!!";
	}else
		{
		//echo "Variable NO definida!!!";
		}


 ?>
