<?php

define('ROOT', dirname(__FILE__) . '/..');

require_once(ROOT.'/components/Autoload.php');

(new Router)->isAdmin(1);















