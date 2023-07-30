<?php
require dirname(__FILE__, 2) . '/data.php';

$checkUpsJSON = json_encode($checkUps, JSON_UNESCAPED_UNICODE);

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logo clinic</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/imask"></script>
    <script>
        <?php
            echo "var data = '$checkUpsJSON';"
        ?>
    </script>
    <script src="/index.js" defer></script>
    <script src="/includes/appoitmentForm/appointmentForm.js" defer></script>
    <script src="/includes/checkup/checkup.js" defer></script>
</head>