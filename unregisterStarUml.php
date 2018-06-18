<?php
require_once 'lib/SVGManager.php';
require_once 'lib/TokenManager.php';

use Utils\TokenManager;
use Utils\SVGManager;

if(TokenManager::check()){
  SVGManager::removeWatermarks();
}
