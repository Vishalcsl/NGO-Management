<?php
  session_abort();
  echo "<script>alert(\'Success Logged out\');</script>";
  header('location: Welcome.php');
?>