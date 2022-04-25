<?php
require __DIR__ . '/../vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('location: index.php');
}

$captcha = new iaematt\Captcha\Verify();
$post = $_POST;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <title>Captcha verify example</title>
</head>
<body>
    <div class="verify">
        <p>
            <?php if ($captcha->compare($post['captcha'])) {
                echo 'the code is correct.';
            } else {
                echo 'Code invalid. Try again.';
            } ?>
        </p>
        <p>
            <a href="index.php" title="Back">Back</a>
        </p>
    </div>
</body>
</html>
