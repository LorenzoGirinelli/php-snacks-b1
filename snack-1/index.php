<?php
$matches = [
    [
        "home" => "Armani Milano",
        "guest" => "Cantu",
        "homePoints" => "102",
        "guestPoints" => "89"
    ],
    [
        "home" => "Brescia",
        "guest" => "Dinamo Sassari",
        "homePoints" => "97",
        "guestPoints" => "86"
    ],
    [
        "home" => "Trieste",
        "guest" => "VL Pesaro",
        "homePoints" => "89",
        "guestPoints" => "78"
    ],
    [
        "home" => "Venezia",
        "guest" => "Cremona",
        "homePoints" => "85",
        "guestPoints" => "82"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Today Matches</title>
</head>
<body>
    <?php for($i = 0; $i < count($matches); $i++) { ?>
        <?php $thisMatch = $matches[$i]; ?>
        <div>
            <span>
                <?php echo $thisMatch["home"] ?>
            </span>
            -
            <span>
                <?php echo $thisMatch["guest"] ?>
            </span>
            |
            <span>
                <?php echo $thisMatch["homePoints"] ?>
            </span>
            -
            <span>
                <?php echo $thisMatch["guestPoints"] ?>
            </span>
        </div>

    <?php } ?>
</body>