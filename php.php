<?php
session_start();
$stringlength = strlen($_SESSION["zin"]);
$x = 0;
$arrayZin = str_split($_SESSION["zin"]);
$newZin = array();
while ($x < $stringlength) {
  if ($x % 2 == 0){
    array_push($newZin,  makeUppercase($arrayZin[$x]));
  }else{
    array_push($newZin, $arrayZin[$x]);
  }
  $x++;
} 

function makeUppercase($letter) {
  return ($uppercase = strtoupper($letter));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Antwoord</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
</head>

<body class="container">
  <?php include 'jumbotron.php'; ?>

  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="img/spongebob.jpg" alt="SpoNgEbOb">
    <div class="card-body">
      <p class="card-text">
        <?=implode("",$newZin);?>
      </p>
      <a href="./index.php" class="btn btn-primary">Ga terug</a>
    </div>
  </div>
  <?php include 'Footer.php'; ?>
</body>

</html>