<?php
namespace Utils;

class TokenManager{

  public static function check(){
    session_start();
    if (isset($_SESSION['token']) AND isset($_POST['token']) AND !empty($_SESSION['token']) AND !empty($_POST['token']))
    {
      return $_SESSION['token'] === $_POST['token'];
    }
    else {
      echo "Erreur de vérification";
      return false;
    }
  }

}
