<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . "/program_files/dbh.php";
    session_start();
    $_SESSION['name'] = $_POST['username'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $address = $_POST['address'];
    $phone1 = $_POST['phone1'];
    $phone2 = $_POST['phone2'];
    $type = $_POST['user_type'];
    $sqlmain = "SELECT * FROM user_address WHERE email = $email";
    $result = mysqli_query($conn,$sqlmain);
    if($result)
    {
        echo '<script type="text/javascript">',
     'function faliure(){
        swal("Oops!", "User already exists!", "error","Try again");
    }',
     '</script>';
    }
    else{
       if($password1 == $password2)
       {
           //create user
          //  $password = md5($password1);//hashing password before storing
            $sql = "INSERT INTO user_info(name,password,type) VALUES('$username','$password1','$type');";
           $result = mysqli_query($conn, $sql);
            $sql2 = "SELECT user_id FROM user_info WHERE name='$username';";
            $result = mysqli_query($conn, $sql2);
            $row = mysqli_fetch_assoc ($result );
            // echo $row['user_id'];
            $id = $row['user_id'];
           $sql= "INSERT INTO user_address(id_user,email,address) VALUES('$id','$email','$address');";
          
           $result = mysqli_query($conn, $sql);
           $sql3 = "INSERT INTO phonebook(id, phone_number) VALUES('$id','$phone1')";
           $result = mysqli_query($conn, $sql3);
          $sql4 = "INSERT INTO phonebook(id, phone_number) VALUES('$id', '$phone2')";
           $result = mysqli_query($conn, $sql4);
           echo '<script type="text/javascript">',
                  '(function success(){
                    swal("Good job!", "Your account is created!", "success");
                })();',
                   '</script>'
;
           header("location: home.php"); 
   }
   else{
    echo '<script type="text/javascript">',
    'function faliure(){
        swal("Oops!", "User already exists!", "error","Try again");
    }',
    '</script>';
   }
}
?>

<!-- <script>
    (function success(){
        swal("Good job!", "Your account is created!", "success");
    })();

    function faliure(){
        swal("Oops!", "User already exists!", "error","Try again");
    }
</script> -->