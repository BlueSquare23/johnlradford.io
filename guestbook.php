<?php
  /* This code reads in the guestbook.txt file and puts its contents inside of
   * a textarea html element. */

  $guestbook = "./guestbook.txt";
  $fhandle = fopen($guestbook, "r") or die("Unable to open file!");
  $contents = fread($fhandle,filesize($guestbook));
  echo "<textarea class='form-control mb-3' style='overflow-y: scroll;' id='guestbook' name='guestbook' rows='10' cols='50' readonly>$contents</textarea>";
?>

