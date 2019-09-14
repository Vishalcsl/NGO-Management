<?php
     session_start();
   include_once $_SERVER['DOCUMENT_ROOT'] . "/program_files/dbh.php";
   error_reporting(E_ERROR | E_PARSE);
   $name = $_SESSION['name'];
   $name_ngo = 'Vidyapeeth';
   $ngo_id = 'ngo2';
   $sql = "SELECT user_id FROM user_info WHERE name = '$name';";
   $result = mysqli_query($conn, $sql);
   $row = mysqli_fetch_assoc($result);
   $user_id = $row['user_id'];
   $amount = $_POST['donation_amt'];
   if(isset($_POST['donation_sbmt']))
   {
    $sql2 = "INSERT INTO donation(id_user,id_ngo,amount) VALUES('$user_id','$ngo_id','$amount');";
    $result = mysqli_query($conn,$sql2);
    $sql3 = "SELECT SUM(amount) FROM donation WHERE id_ngo = '$ngo_id';";
    $result = mysqli_query($conn,$sql3);
    $row = mysqli_fetch_assoc($result);
    $total_amount = $row['SUM(amount)'];
    // echo $total_amount;
    $sql4 = "UPDATE ngo SET total_amt_received = $total_amount WHERE ngo_id = '$ngo_id';";
    $result = mysqli_query($conn,$sql4);
  header("location: success.html");
   }
   else if(isset($_POST['donation_cancel'])){
       header("location: Welcome.php");
   }
?>

<!DOCTYPE html>
<html>
 <head>
      <link rel="stylesheet" type="text/css" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="maincss.css">
    </head>
    <body class="main-background">
    <div class="donation-div">
    <form method="POST" action='ngo2.php'>
   
         <label for="donation_amt">Amount in rupees</label>
         <input type="number" name="donation_amt">
         <br/>
        <!-- <input type="submit" name="donation_cancel" value="donation_cancel">  -->
        <button type="submit" class="btn btn-danger" name="donation_cancel">Cancel</button>
        <!-- <input type="submit" name="donation_sbmt"  value="donation_sbmt"/> -->
        <button type="submit" class="btn btn-success" name="donation_sbmt">Donate</button>
        
</form>
</div>

    </body>
</html>
