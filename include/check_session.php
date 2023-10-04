<?php
if(!isset($_SESSION) || !isset($_SESSION['userid']) || !isset($_SESSION['useremail'])){
  header("Location: index.php");
}

?>