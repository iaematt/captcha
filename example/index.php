<?php
require __DIR__ . '/../vendor/autoload.php';

use iaematt\Captcha\Generate;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <title>Captcha generate example</title>
</head>
<body>
    <form action="verify.php" method="POST" class="form">
        <img src="generate.php" alt="Captcha" />
        <input type="text" name="captcha" class="inp" placeholder="type the captcha code" required />
        <button type="submit" class="btn">Send</button>
    </form>
</body>
</html>
