<?php
defined('ISHOP') or die('Access denied');


require_once MODEL;

<<<<<<< HEAD
require_once 'functions/functions.php';

$cat = catalog();

$view = empty($_GET['view']) ? 'hits' : $_GET['view'];
    
=======
$view = empty($_GET['view']) ? 'hits' : $_GET['view'];
>>>>>>> 218b2a7325e0422a5eec39a52ce79489c7bd9a63

require_once TEMPLATE.'index.php';