<?php

require_once("../config.php");

$params = array(
	'email'=>'test1365695330@example.com',
);

$request = new \DALTCORE\Plesk\DeleteEmailAddress($config, $params);
$info = $request->process();

var_dump($info);