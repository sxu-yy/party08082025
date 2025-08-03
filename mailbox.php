<?php
  $mail = $_POST['tosend'];
  $fname = "mailbox.txt";
  $fh = fopen($fname, 'a') or die("Can't open file");
  fwrite($fh, $mail);
  fwrite($fh, "\n");
  fclose($fh);

  $fh = fopen($fname, 'r');
  $contents = fread($fh, filesize($fname));
  fclose($fh);
  echo $contents;
?>
