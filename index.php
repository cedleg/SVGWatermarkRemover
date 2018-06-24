<?php
require_once 'lib/TokenManager.php';
use Utils\TokenManager;

$token = TokenManager::create();
require 'form.php';
