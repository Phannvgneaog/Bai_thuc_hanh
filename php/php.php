<?php
  // before if statement
  echo "THE GAME ";

  // if statement; condition: $_GET["response"] == "yes"
  if ($_GET["response"] == "yes") {
    echo "HAS BEEN QUITED";
  }

  // if statement; condition: $_GET["response"] == "no"
  else {
    echo "WILL BE CONTINUED IN 3 SECONDS";
  }

  // after if statement
  echo "<br>AFTER IF STATEMENT";
?>