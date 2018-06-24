<?php
namespace Utils;
session_start();
class TokenManager
{
  public static function create()
  {
    $token = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
    $_SESSION['token'] = $token;
    return $token;
  }

  public static function check()
  {
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
