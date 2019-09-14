
<?php
session_start();
  include_once $_SERVER['DOCUMENT_ROOT'] . "/program_files/dbh.php";
  $username = $_POST['username'];
  $_SESSION['name'] = $username;
  $password = $_POST['password'];
  $flag = 0;
  $check = 0;
  $sql = "SELECT name,password FROM user_info;";
  $result  = mysqli_query($conn,$sql);
   while($row = mysqli_fetch_assoc($result)){
       if($row['name'] == $username && $row['password'] == $password)
       {
               header('location: home.php');
               $check =0;
       }
       else{
           $flag = 1;
       }
   }
  //  if($flag){
  //    header('location: Welcome.php');
  //    echo "<script>";
  //    echo "alert(\'Login failed\')";
  //    echo "</script>";
  //  }
?>
<!DOCTYPE html>
<html>
  <head></head>
  <body>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
   var check = "<?php echo $flag;?>";
   if(check)
   {
    swal("Oops something wrong!", "Login failed!!", "error","Retry");
   }
 </script>
 </body>
 </html>
