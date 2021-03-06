<!DOCTYPE html>
<html lang=fr dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="dist/css/master.css">
  <title>StarUML watermark remover</title>
</head>
<body>
  <div class="container"> 
    <div class="row">
      <div class="col-sm-12">       
        <div class="jumbotron">   
          <h2  class="display-6">StarUML watermark remover</h2>
          <hr class="my-4"> 
          <form action="unregisterStarUml.php" method="post" enctype="multipart/form-data">
            <div class="form-group mb-4">
              <label for="filesToUpload">Files to upload</label> 
              <input  class="form-control-file" type="file" size="70" name="filesToUpload[]" id="filesToUpload" multiple="multiple"/>
            </div>            
            <button class="btn btn-primary" type="submit" value="Upload Files" name="submit">Upload Files</button>
            <input type="hidden" name="token" id="token" value="<?php echo $token; ?>" />
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
