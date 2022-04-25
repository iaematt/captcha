<?php

require __DIR__ . '/../vendor/autoload.php';

$captcha = new \iaematt\Captcha\Generate();
$captcha->render();
