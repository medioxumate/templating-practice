<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

$f3 = Base::instance();

$f3->set('DEBUG', 3);

$f3->route('GET /', function($f3) {
    //Set a F3 variable

    $f3->set('title', "Practicing with Templates");

    $view = new Template();
    echo $view->render('views/view1.html');
});

$f3->run();