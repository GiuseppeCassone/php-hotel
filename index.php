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

    if($_GET['parking'] == 'true') {
        $hotels = array_filter($hotels, function ($hotel) {
            return $hotel['parking'];
        });
    }

    

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Hotels</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container py-5">
        
        <h1 class="mb-4">PHP HOTEL</h1>

        <table class="table table-bordered border-black">
            <thead class="table-dark">
                <tr>
                    <?php 
                        foreach (array_keys($hotels[0]) as $key) {
                            echo "<th scope='col'>
                                $key
                            </th>";
                        }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($hotels as $hotel) {
                        echo "<tr>";
                                foreach ($hotel as $value) {
                                    echo "<td>
                                        $value
                                    </td>";
                                }
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>

        <form method="GET" class="mb-3">
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="parking" name="parking" value="true">
                <label class="form-check-label" for="parking">Parking</label>
            </div>
            <button type="submit" class="btn btn-primary">Apply Filter</button>
        </form>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>