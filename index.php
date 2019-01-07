<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Spongebob Meme Ding</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
</head>

<body class="container">

  <?php include 'jumbotron.php'; ?>
  <div class="row">
    <form method="POST">
      <div class="col">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Vul hier je zin in en klik op de knop!</label>
              <input class="form-control" type="text" name="zin">
            </div>
            <input type="submit" class="btn btn-primary" name="go" value="Update je zin">
          </div>
        </div>
      </div>
    </form>

    <?php 
if (isset($_POST['go'])){
  if ($_POST["zin"] == "" || $_SESSION["zin"] == "") {
    ?>
    <div class="col">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Je veld is leeg</h5>
        </div>
      </div>
    </div>
    <?php
  } else {
    $_SESSION["zin"] =  $_POST["zin"];
    ?>
    <div class="col">
      <div class="card " style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Je huidige zin is: </h5>

          <p class="card-text">
            <?=$_SESSION["zin"]?>.</p>

          <a href="./php.php"><button type="button" class="btn btn-success">Maak Geinig</button></a>
        </div>
      </div>
    </div>
    <?php
   }
}
?>

  </div>
</body>

</html>