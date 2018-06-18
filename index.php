<?php

// On démarre la session en début de chaque page
session_start();

//On enregistre notre token
$token = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));

$_SESSION['token'] = $token;

?>


<!DOCTYPE html>
<html lang=fr dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>StarUML watermark remover</title>
  </head>
  <body>
    <h2>StarUML watermark remover</h2>

    <form action="unregisterStarUml.php" method="post" enctype="multipart/form-data">
      <input type="file" size="70" name="filesToUpload[]" id="filesToUpload" multiple="multiple"/>
      <br>
      <br>
      <input type="submit" value="Upload File" name="submit"/>
      <input type="hidden" name="token" id="token" value="<?php echo $token; ?>" />
    </form>

  </body>
</html>
