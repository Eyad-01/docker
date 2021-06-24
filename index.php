<!DOCTYPE html>

<title>FCDS Database</title>

<html>

<head>
  
  <meta charset="utf-8">
  <title>Student Database</title>
  <!--googlefont-->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat%7CUbuntu" rel="stylesheet">
  <!-- Css Style sheet -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <!-- fontawesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <!-- Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <style>
html,
body {
  height: 100%;
}
body {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #F5F5F5;
}
.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.top {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.middle{
  border-radius:0;
     margin-bottom: -1px;
}
.bottom {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.margin-bottom-10px{
  margin-bottom: 10px;
}
.margin-left-right-20px{
  margin-left: 20px;
  margin-right: 20px;
}

.bold{
  font-weight: bolder;
}
  </style>

</head>

<body>
  <body class="text-center">
  <form action="index.php" class="form-signin" method="POST" >
  <h1 class="h3 mb-3 font-weight-normal"><b>FCDS Database</b></h1>
  
<input type="number" name="ID"
class="form-control middle margin-bottom-10px" 
placeholder="ID" required> <br>

<button class="btn left btn-dark btn-lgk" name="submitted" type="submit">Search</button>

<?php if (isset($_POST['submitted'])): ?>

<h2>Search Results For </h2>
<hr>
<?php
$ID = $_POST['ID'];
$conn = new mysqli('moe-mysql-app', 'moeuser', 'moepass', 'moe_db');
$sql = "SELECT ID, GPA, FullName ,ImagePath FROM students WHERE ID=$ID";
$result = $conn->query($sql);
?>
<?php if ($result->num_rows > 0) { ?>

  <?php  while($row = $result->fetch_assoc()) { ?>
    <div class="container">
      <div class="row">
    <div class="col-lg-6 col-xs-6" style="text-align: left;">
        <div style="margin-bottom: 20px; font-size: 1.1em;"><span style="font-weight: bolder;" > ID: </span><?php echo $row["ID"] ?></div>
        <div style="margin-bottom: 20px; font-size: 1.1em;"><span style="font-weight: bolder;"> Name:</span> <?php echo $row["FullName"] ?></div>
        <div style="margin-bottom: 20px; font-size: 1.1em;"><span style="font-weight: bolder;"> GPA:</span> <?php echo $row["GPA"] ?></div>
  </div>
    <div class="col-lg-6 col-xs-6">
    <div><img src="<?php  echo "./img/" . ($row["ImagePath"]); ?>" height="250"></div>
    </div>
   </div>
   </div>
  <?php } ?>

<?php } else { ?>
  <?php  echo "0 results"; ?>
  <?php } ?>

  <?php $conn->close(); ?>

<?php endif; ?>



</form>

</body>

</html>
