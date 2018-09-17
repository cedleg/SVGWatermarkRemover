<?php
namespace Utils;

class SVGManager
{
  public static $svg;
  public static $targetDir="output/";

  public static function removeWatermarks()
  {
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {

      // Count # of uploaded files in array
      $total = count($_FILES['filesToUpload']['tmp_name']);

      // Loop through each file
      for( $i=0 ; $i < $total ; $i++ ) {

        $tmpFile = $_FILES["filesToUpload"]["tmp_name"][$i];
        $outFile = $_FILES["filesToUpload"]["name"][$i];
        $targetFile=self::$targetDir.$outFile;

        if ($tmpFile != ""){

          self::removeWatermark($tmpFile);
          self::saveSVG($targetFile);
          self::displaySVG($targetFile);
          self::inkscapePngConverter($targetFile);
        }
      }
    }
  }

  public static function removeWatermark($tmpFile)
  {
    self::$svg = new \SimpleXMLElement( file_get_contents( $tmpFile )  );

    self::$svg->registerXPathNamespace('svg', 'http://www.w3.org/2000/svg');
    self::$svg->registerXPathNamespace('xlink', 'http://www.w3.org/1999/xlink');
    foreach (self::$svg as $key => $elt) {
      unset($elt->text);
    }
  }

  public static function saveSVG($targetFile)
  {
    self::$svg->asXML( $targetFile);
  }

  public static function displaySVG($targetFile)
  {
    $resultSvg = file_get_contents($targetFile);
    print_r($resultSvg);
  }
  
  public static function inkscapePngConverter($targetFile)
  {
    $command = 'inkscape -f "'.$targetFile.'" -e "'.$targetFile.'.png"';
    exec($command, $status);
    return $status[0];
  }
}
