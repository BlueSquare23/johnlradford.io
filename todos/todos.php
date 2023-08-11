<?php
  /* This code reads in the todos.txt file and puts its contents inside of a
   * textarea html element. */

  $todos = "./todos.txt";
  $fhandle = fopen($todos, "r") or die("Unable to open file!");
  $contents = fread($fhandle,filesize($todos));
  echo "<textarea class='form-control mb-3' style='overflow-y: scroll;' id='todo_text' name='todo_text' rows='30' cols='50'>$contents</textarea>";
?>

