<h1>Query parameters:</h1>

<?php

if(isset($_GET)){

  foreach ($_GET as $key => $value) {
    echo $key . ": " . $value . "<br>";
  }

}
