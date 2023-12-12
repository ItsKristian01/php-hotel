<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
</head>
<body>
    <?php for ( $i = 0; $i < count($hotels); $i++) {
        $cur_hotel = $hotels[$i]; ?>
        <div>
            <h3> <?php echo $cur_hotel['name']; ?></h3>
            <p><?php echo $cur_hotel['description']; ?></p>
            <p><?php echo $cur_hotel['parking'] ? 'true': 'false'; ?></p>
            <p><?php echo $cur_hotel['vote']; ?></p>
            <p><?php echo $cur_hotel['distance_to_center']; ?></p>
        </div>
    <?php } ?>
</body>
</html>