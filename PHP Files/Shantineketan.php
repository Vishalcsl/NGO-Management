  
<!DOCTYPE html>
<html>
    <head>
      <title>Shantineketan</title>
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" type="text/css" href="maincss.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
    </head>
<body class="main-background" style="font-family:Merienda">
    <div class="main-content">
       <img src="images/ngo_default.png" alt="Ngo" class="ngo-default-img">
   <h2 style="color:white;">Shantineketan</h2>
   <main class="main-container" id="main-content">
      <section class="intro" id="about-me">
         <div class="intro-block">
        <div class="intro-container wow fast-fade-in-left" data-wow-delay="0.5s">
          <header style="color:black">Shantineketan Objective {The reason why we exist}</header>
          <hr>
          <p class="heavy">To seek to realize in a common fellowship of study the meeting of the East and the West, and thus ultimately to strengthen the fundamental conditions of world peace through the establishment of free communication of ideas between the two hemispheres.</p>
             <p>We help everyone that needs help be it childrens, poor people, womens, animals 
             ,basically we work on all socail reforms.We at upkaar will be fortunate by your contribution.</p>
          </p> 
        </div><!--End of intro container-->
        <div class="intro-image-container fast-fade-in-right wow" data-wow-delay="0.5s">
          <img src="images/shantineketan.jpg.webp" style="height:400px;border-color:#e52b5d" alt="Shantineketan" class="intro-more-info">
        </div><!--End of intro-image container-->
           </div><!--End of Intro block-->
  </section>
  <section>
  <button class="btn btn-primary" onclick="display_expenditure()">Know where we are utilizing peoples money</button>
  <button class="btn btn-success"id="donate_us" onclick="window.location.href='ngo1.php'">Donate Us:)</button>
</section>    
</main>
   </div>
   
   <div id="expenditure">
     <?php
         include_once $_SERVER['DOCUMENT_ROOT'] . "/program_files/dbh.php";
        $ngo_name = 'Shantineketan';
        $ngo_id = 'ngo1';
        $sql = "SELECT expenditure, organisation , on_date FROM expenditure WHERE id_ngo='$ngo_id';";
        $result = mysqli_query($conn, $sql);
        echo "<table><tr><th>NGO</th><th>Organisation</th><th>Expenditure</th><th>On-date</th></tr>";
        while($row = mysqli_fetch_array($result)){
             echo "<tr><td>Shantineketan</td><td>";
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
    <script src="JS/scripts.js"></script>
  <script src="JS/smooth-scroll.js"></script>
  <script>var scroll = new SmoothScroll('a[href*="#"]');</script>
  <script src="JS/wow.min.js"></script>
  <script>new WOW().init();</script>
</body>
</html>