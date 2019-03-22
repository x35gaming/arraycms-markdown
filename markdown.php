<?php
  require("libs/Parsedown.php")
  $Parsedown = new Parsedown();
  function mdblog() {
    $blog=array($Parsedown->text('Hello _Parsedown_!'));
  };
?>
  
