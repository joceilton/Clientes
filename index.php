<?php

include_once("vendor/autoload.php");
define("SMARTY_DIR", "vendor/smarty/smarty/libs/");

$app = new \Slim\Slim();
include(SMARTY_DIR.'Smarty.class.php');
$smarty = new Smarty();
$smarty->setTemplateDir("src/");

$app->get('/', function () use ($smarty) {
    $smarty->display("home.tpl");
});

$app->run();