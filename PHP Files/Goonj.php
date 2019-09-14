  
<!DOCTYPE html>
<html>
    <head>
      <title>Goooj</title>
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" type="text/css" href="maincss.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
    </head>
    <body class="main-background" style="font-family:Merienda">
<div class="main-content">
<img src="images/ngo_default.png" style="left:40%"alt="Ngo" class="ngo-default-img">
   <h2 style="color:white;">Goonj</h2>
   
   <main class="main-container" id="main-content">
      <section class="intro" id="about-me">
         <div class="intro-block">
        <div class="intro-container wow fast-fade-in-left" data-wow-delay="0.5s">
          <header style="color:black">Goonj Objective {The reason why we exist}</header>
          <hr>
          <p class="heavy">Goonj is a non-governmental organisation headquartered in Delhi, India which undertakes disaster relief, humanitarian aid and community development in parts of 23 states across India. Goonj focuses on clothing as a basic but unaddressed need.</p>
              
        </div><!--End of intro container-->
        <div class="intro-image-container fast-fade-in-right wow" data-wow-delay="0.5s">
          <img src="images/Goonj.png" alt="Goonj" style="height:400px;border-color:#e52b5d" class="intro-more-info">
        </div><!--End of intro-image container-->
           </div><!--End of Intro block-->
  </section>
  <section>
  
  <button class="btn btn-primary" onclick="display_expenditure()">Know where we are utilizing peoples money</button>
  <button id="donate_us" class="btn btn-success" onclick="window.location.href='ngo3.php'">Donate Us:)</button>
</section>
</main> 
</div>
   
   <div id="expenditure">
     <?php
         include_once $_SERVER['DOCUMENT_ROOT'] . "/program_files/dbh.php";
        $ngo_name = 'Goonj';
        $ngo_id = 'ngo3';
        $sql = "SELECT expenditure, organisation , on_date FROM expenditure WHERE id_ngo='$ngo_id';";
        $result = mysqli_query($conn, $sql);
        echo "<table><tr><th>NGO</th><th>Organisation</th><th>Expenditure</th><th>On-date</th></tr>";
        while($row = mysqli_fetch_array($result)){
             echo "<tr><td>Goonj</td><td>";
             echo  $row['organisation'];
             echo "</td><td>";
             echo  $row['expenditure'];
             echo "</td><td>";
             echo $row['on_date'];
             echo "</td></tr>";
        }
        echo "</table>"
     ?>
   </div>
   
   <script>
      function display_expenditure(){
         document.getElementById("expenditure").style.visibility = 'visible';
      }
   </script>
</body>
</html>