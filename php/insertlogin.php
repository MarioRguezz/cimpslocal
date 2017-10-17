<?php
include 'conexion.php';
$conexion = conect();

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



  $consulta = "INSERT INTO usuario (titulo, nombre, email, genero, ciudad,
     pais, reg_venue, nombreafiliacion, direccionafiliacion, tipo,
     normal, extra,extrapage,extrapagecount, conference, social, additional,
      additionalcount, paperid1, papertitulo1, paperid2, papertitulo2)
      VALUES ('$title', '$name', '$email','$gender','$city',
      '$country','$reg_venue', '$afiliation_name', '$afiliation_address',
      '$autor', '$normalpaper', '$extrapaper', '$extrapage',
    '$extrapageautor', '$conferencediner',  '$socialprogram', '$additionaldoc', '$autoradditional',
  '$paper_id1', '$paper_title1', '$paper_id2', '$paper_title2' );";

//echo mysqli_query($conexion,$consulta);
  if(mysqli_query($conexion,$consulta)){
    header('Location: ../index.php');
  } else{
     header('Location: noaceptado.php');
  }




} else if (isset($_POST['generalpublic'])){


    $generalpublico =  $_POST['generalpublic'];




  if(isset($_POST['conferencepublic']))
  {
      $conferencepublic = "1";
  }
  else
  {
      $conferencepublic = "0";
  }



if(isset($_POST['socialpublic']))
{
    $socialpublic = "1";
}
else
{
    $socialpublic = "0";
}




  if(isset($_POST['additionalpublic']))
  {
      $additionalpublic = "1";
      $additionalpublictext =  $_POST['extrapageautor'];
  }
  else
  {
      $additionalpublic = "0";
      $additionalpublictext =  "0";
  }



  $consulta = "INSERT INTO usuario (titulo, nombre, email, genero, ciudad,
     pais, reg_venue, nombreafiliacion, direccionafiliacion, tipo,
     normal, extra,extrapage,extrapagecount, conference, social, additional,
      additionalcount, paperid1, papertitulo1, paperid2, papertitulo2)
      VALUES ('$title', '$name', '$email','$gender','$city',
      '$country','$reg_venue', '$afiliation_name', '$afiliation_address',
      '$generalpublico','','', '', '', '$conferencepublic', '$socialpublic', '$additionalpublic',
    '$additionalpublictext', '', '', '', '' );";

//echo mysqli_query($conexion,$consulta);
  if(mysqli_query($conexion,$consulta)){
    header('Location: ../index.php');
  } else{
     header('Location: noaceptado.php');
  }



}
else if (isset($_POST['students'])){


  $students =  $_POST['students'];





if(isset($_POST['studentconference']))
{
    $studentconference = "1";
}
else
{
    $studentconference = "0";
}




if(isset($_POST['socialstudent']))
{
  $socialstudent = "1";
}
else
{
  $socialstudent = "0";
}


if(isset($_POST['additionalstudent']))
{
    $additionalstudent = "1";
    $additionalstudenttext =  $_POST['additionalstudenttext'];
}
else
{
    $additionalstudent = "0";
    $additionalstudenttext =  "0";
}



$consulta = "INSERT INTO usuario (titulo, nombre, email, genero, ciudad,
   pais, reg_venue, nombreafiliacion, direccionafiliacion, tipo,
   normal, extra,extrapage,extrapagecount, conference, social, additional,
    additionalcount, paperid1, papertitulo1, paperid2, papertitulo2)
    VALUES ('$title', '$name', '$email','$gender','$city',
    '$country','$reg_venue', '$afiliation_name', '$afiliation_address',
    '$students','','', '', '', '$studentconference', '$socialstudent', '$additionalstudent',
  '$additionalstudenttext', '', '', '', '' );";

//echo mysqli_query($conexion,$consulta);
if(mysqli_query($conexion,$consulta)){
  header('Location: ../index.php');
} else{
   header('Location: noaceptado.php');
}



}
else if (isset($_POST['companieentreprise'])){

  $companieentreprise =  $_POST['companieentreprise'];

  if(isset($_POST['companysocial']))
  {
    $companysocial = "1";
  }
  else
  {
    $companysocial = "0";
  }



  if(isset($_POST['additionalcompany']))
  {
  $additionalcompany = "1";
  $additionalcompanytext = $_POST['additionalcompanytext'];
  }
  else
  {
  $additionalcompany = "0";
  $additionalcompanytext = "0";
  }


  $consulta = "INSERT INTO usuario (titulo, nombre, email, genero, ciudad,
   pais, reg_venue, nombreafiliacion, direccionafiliacion, tipo,
   normal, extra,extrapage,extrapagecount, conference, social, additional,
    additionalcount, paperid1, papertitulo1, paperid2, papertitulo2)
    VALUES ('$title', '$name', '$email','$gender','$city',
    '$country','$reg_venue', '$afiliation_name', '$afiliation_address',
    '$companieentreprise','','', '', '', '$companieentreprise', '$companysocial', '$additionalcompany',
  '$additionalcompanytext', '', '', '', '' );";

  //echo mysqli_query($conexion,$consulta);
  if(mysqli_query($conexion,$consulta)){
  header('Location: ../index.php');
  } else{
   header('Location: noaceptado.php');
  }




}
else if (isset($_POST['invitado'])){
  $invitado =  $_POST['invitado'];
  if(isset($_POST['access_code']))
  {
    $access_code = "access_mode";
  }
  else
  {
    $access_code = "no_access_mode";
  }
  $consulta = "INSERT INTO usuario (titulo, nombre, email, genero, ciudad,
   pais, reg_venue, nombreafiliacion, direccionafiliacion, tipo,
   normal, extra,extrapage,extrapagecount, conference, social, additional,
    additionalcount, paperid1, papertitulo1, paperid2, papertitulo2)
    VALUES ('$title', '$name', '$email','$gender','$city',
    '$country','$reg_venue', '$afiliation_name', '$afiliation_address',
    '$invitado','','', '', '', '$access_code', '', '',
  '', '', '', '', '' );";
  if(mysqli_query($conexion,$consulta)){
  header('Location: ../index.php');
  } else{
   header('Location: noaceptado.php');
  }


}
else if (isset($_POST['becado'])){
  $becado =  $_POST['becado'];
  if(isset($_POST['access_code']))
  {
    $access_code = "access_mode";
  }
  else
  {
    $access_code = "no_access_mode";
  }
  $consulta = "INSERT INTO usuario (titulo, nombre, email, genero, ciudad,
   pais, reg_venue, nombreafiliacion, direccionafiliacion, tipo,
   normal, extra,extrapage,extrapagecount, conference, social, additional,
    additionalcount, paperid1, papertitulo1, paperid2, papertitulo2)
    VALUES ('$title', '$name', '$email','$gender','$city',
    '$country','$reg_venue', '$afiliation_name', '$afiliation_address',
    '$becado','','', '', '', '$access_code', '', '',
  '', '', '', '', '' );";
  if(mysqli_query($conexion,$consulta)){
  header('Location: ../index.php');
  } else{
   header('Location: noaceptado.php');
  }

}
else if (isset($_POST['invitadoespecial'])){

  $invitadoespecial =  $_POST['invitadoespecial'];
  if(isset($_POST['access_code']))
  {
    $access_code = "access_mode";
  }
  else
  {
    $access_code = "no_access_mode";
  }
  $consulta = "INSERT INTO usuario (titulo, nombre, email, genero, ciudad,
   pais, reg_venue, nombreafiliacion, direccionafiliacion, tipo,
   normal, extra,extrapage,extrapagecount, conference, social, additional,
    additionalcount, paperid1, papertitulo1, paperid2, papertitulo2)
    VALUES ('$title', '$name', '$email','$gender','$city',
    '$country','$reg_venue', '$afiliation_name', '$afiliation_address',
    '$invitadoespecial','','', '', '', '$access_code', '', '',
  '', '', '', '', '' );";
  if(mysqli_query($conexion,$consulta)){
  header('Location: ../index.php');
  } else{
   header('Location: noaceptado.php');
  }

}
else if (isset($_POST['prensa'])){


  $prensa =  $_POST['prensa'];
  if(isset($_POST['access_code']))
  {
    $access_code = "access_mode";
  }
  else
  {
    $access_code = "no_access_mode";
  }
  $consulta = "INSERT INTO usuario (titulo, nombre, email, genero, ciudad,
   pais, reg_venue, nombreafiliacion, direccionafiliacion, tipo,
   normal, extra,extrapage,extrapagecount, conference, social, additional,
    additionalcount, paperid1, papertitulo1, paperid2, papertitulo2)
    VALUES ('$title', '$name', '$email','$gender','$city',
    '$country','$reg_venue', '$afiliation_name', '$afiliation_address',
    '$prensa','','', '', '', '$access_code', '', '',
  '', '', '', '', '' );";
  if(mysqli_query($conexion,$consulta)){
  header('Location: ../index.php');
  } else{
   header('Location: noaceptado.php');
  }



}
else if (isset($_POST['patrocinador'])){


  $patrocinador =  $_POST['patrocinador'];
  if(isset($_POST['access_code']))
  {
    $access_code = "access_mode";
  }
  else
  {
    $access_code = "no_access_mode";
  }
  $consulta = "INSERT INTO usuario (titulo, nombre, email, genero, ciudad,
   pais, reg_venue, nombreafiliacion, direccionafiliacion, tipo,
   normal, extra,extrapage,extrapagecount, conference, social, additional,
    additionalcount, paperid1, papertitulo1, paperid2, papertitulo2)
    VALUES ('$title', '$name', '$email','$gender','$city',
    '$country','$reg_venue', '$afiliation_name', '$afiliation_address',
    '$patrocinador','','', '', '', '$access_code', '', '',
  '', '', '', '', '' );";
  if(mysqli_query($conexion,$consulta)){
  header('Location: ../index.php');
  } else{
   header('Location: noaceptado.php');
  }

} else{
  if (isset($_POST['poster'])){



    $poster =  $_POST['poster'];


    if(isset($_POST['$onferenceposter']))
    {
      $conferenceposter = "1";
    }
    else
    {
      $conferenceposter = "0";
    }

    if(isset($_POST['$socialposter']))
    {
      $socialposter = "1";
    }
    else
    {
      $socialposter = "0";
    }

    if(isset($_POST['additionalposter']))
    {
    $additionalposter = "1";
    $additionalpostertext = $_POST['additionalpostertext'];
    }
    else
    {
    $additionalposter = "0";
    $additionalpostertext = "0";
    }


    $consulta = "INSERT INTO usuario (titulo, nombre, email, genero, ciudad,
     pais, reg_venue, nombreafiliacion, direccionafiliacion, tipo,
     normal, extra,extrapage,extrapagecount, conference, social, additional,
      additionalcount, paperid1, papertitulo1, paperid2, papertitulo2)
      VALUES ('$title', '$name', '$email','$gender','$city',
      '$country','$reg_venue', '$afiliation_name', '$afiliation_address',
      '$poster','','', '', '', '$conferenceposter', '$socialposter', '$additionalposter',
    '$additionalpostertext', '', '', '', '' );";

    //echo mysqli_query($conexion,$consulta);
    if(mysqli_query($conexion,$consulta)){
    header('Location: ../index.php');
    } else{
     header('Location: noaceptado.php');
    }


  }
}


 ?>
