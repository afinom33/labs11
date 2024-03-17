<?php
defined('ISHOP') or die('Access denied');


require_once MODEL;

require_once 'functions/functions.php';

$cat = catalog();

$view = empty($_GET['view']) ? 'hits' : $_GET['view'];
    
$view = empty($_GET['view']) ? 'hits' : $_GET['view'];


require_once TEMPLATE.'index.php';