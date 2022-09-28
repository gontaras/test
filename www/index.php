<?php
define('ST', microtime(true));

$a = new DateTime();
define('IID', $a->getTimestamp()); // all, dp, sys

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev'); // dev, prod
defined('II') or define('II', dirname(__DIR__));
defined('IIBP') or define('IIBP', II . '/' . IID);
defined('IH') or define('IH', $_SERVER['SERVER_NAME']);

