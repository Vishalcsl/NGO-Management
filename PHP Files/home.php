
<!DOCTYPE html>
<html>
  <head>
  <title>Home for user</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="maincss.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,400,300,500,700' rel='stylesheet' type='text/css'>
</head>
  <body class="main-background">
    <div class="home-header">
    <h2 style="color:black;font-size:35px">Upkaar</h2>
    <img src="images/account.png" alt="avatar" class="avatar">
        <h2 style="color:black">Welcome <?php 
            session_start();
             echo $_SESSION['name']; ?><h2>
    <button onclick="window.location.href='logout_handle.php'" class="btn btn-danger" style="margin-left:85%;">Logout</button>
    <button class="btn btn-danger" style="margin-left:85%;">Delete Account</button>
        <h3 style="color:black">Select the NGO you want to know:-</h3>
</div>
<div class="ngo-display-div">
         <?php
         error_reporting(E_ERROR | E_PARSE);
              session_start();
             include_once $_SERVER['DOCUMENT_ROOT'] . "/program_files/dbh.php";
             
             $get_ngo_table = "SELECT * FROM ngo";
             $ngo_table_data = mysqli_query($conn, $get_ngo_table) or die('error getting data!!');
            echo "<table>";
            echo "<tr><th>NGO Name</th><th>NGO City</th></tr>";
             while($row = mysqli_fetch_array($ngo_table_data,MYSQLI_ASSOC)){
               echo "<tr><td>";
               echo "<a href=";
               echo $row['ngo_name'];
               echo ".";
               echo "php";
               echo  ">";
               echo $row['ngo_name'];
               echo "</a>";
               echo "</td><td>";
               echo $row['ngo_city'];
             }
             echo  "</table>";
         ?>
    </div>
   
    <!-- <section>
    <div align="center" class="fond">
<div style="width:1000px;">

<div class="style_prevu_kit" style="background-color:#cb2025;"></div>
<div class="style_prevu_kit" style="background-color:#00a096;"></div>
<div class="style_prevu_kit" style="background-color:#97bf0d;"></div>
<div class="style_prevu_kit" style="background-color:#f8b334;"></div>
<div class="style_prevu_kit" style="background-color:#93a6a8;"></div>

  </section> -->
   
  </body>
</html>