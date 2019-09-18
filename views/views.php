<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title?></title>

  </head>
  <body>

    <?php
    $file = $contentDirectory . "/" . $contentFileName . ".php";
    if(file_exists($file)){
      include $file;
    }
    ?>

  </body>
</html>
