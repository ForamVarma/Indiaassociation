<?php
session_start();
$now = time();
if (isset($_SESSION['discard_after']) && $now > $_SESSION['discard_after']) {

  session_unset();
  session_destroy();
  session_start();

  $tt = "<script>
  function xx(){
    document.getElementById('cvvs').click();
  }
  xx();
  </script>
  ";
} else {
  $tt = "<script>
  function xx(){
    
  }
  
  </script>
  ";
}


$_SESSION['discard_after'] = $now + 10;

?>