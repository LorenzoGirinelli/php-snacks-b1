<?php 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php for($i = 0; $i < count($db); $i++) { ?>
        <?php $thisTeacher = $db["teachers"][$i]["name"]; ?>
        <div class="teacher"><?php echo $thisTeacher ?></div>
        <?php $thisPm = $db["pm"][$i]["name"]; ?>
        <div class="pm"><?php echo $thisPm ?></div>
    <?php } ?>
</body>
</html>