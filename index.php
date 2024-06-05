<?php

$xml = simplexml_load_file('movies.xml');

// deafault boje
$backgroundColor = isset($_POST['background_color']) ? $_POST['background_color'] : '#2C343F';
$textColor = isset($_POST['text_color']) ? $_POST['text_color'] : '#000000';
$tableBackgroundColor = isset($_POST['table_background_color']) ? $_POST['table_background_color'] : '#556678';
$tableTextColor = isset($_POST['table_text_color']) ? $_POST['table_text_color'] : '#FFFFFF';
$tableBorderColor = isset($_POST['table_border_color']) ? $_POST['table_border_color'] : '#dee2e6';
$fontFamily = isset($_POST['font_family']) ? $_POST['font_family'] : 'Roboto';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dnevnik filmova</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: <?php echo $backgroundColor; ?>;
            color: <?php echo $textColor; ?>;
            font-family: '<?php echo $fontFamily; ?>', sans-serif;
        }
        .custom-navbar {
            background-color: #556678;
            padding: 1rem 1.5rem;
            font-family: 'Roboto', sans-serif;
        }
        .custom-navbar .navbar-brand {
            color: #00B021;
            font-size: 1.5rem;
        }
        .custom-navbar .navbar-nav .nav-link {
            color: #00B021;
        }
        .custom-navbar .navbar-nav .nav-link:hover {
            color: #FFD700;
        }
        .custom-navbar .btn-custom {
            background-color: #F27405;
            color: #14171C;
            margin-right: 20px;
            padding: 0.5rem 1.5rem;
        }
        .custom-navbar .btn-custom:hover {
            background-color: #00B021;
        }
        .table-custom {
            background-color: <?php echo $tableBackgroundColor; ?>;
            color: <?php echo $tableTextColor; ?>;
            border-color: <?php echo $tableBorderColor; ?>;
        }
        .table-custom td, .table-custom th {
            padding: 1.5rem;
            font-size: 1.2rem;
        }
        .table-custom img {
            max-width: 150px;
            height: auto;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg custom-navbar">
    <a class="navbar-brand" href="#">Dnevnik filmova</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="btn btn-custom" href="index.php">Reset teme</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-custom" href="ocjeni_film.php">Ocijeni film</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-custom" href="promjena_teme.php">Promjena teme</a>
            </li>
        </ul>
    </div>
</nav>


<div class="container mt-4">
    <h1>Moji filmovi</h1>

    <table class="table table-custom mt-4">
        <thead>
        <tr>
            <th scope="col">Poster</th>
            <th scope="col">Naslov</th>
            <th scope="col">Redatelj</th>
            <th scope="col">Žanr</th>
            <th scope="col">Godina izlaska</th>
            <th scope="col">Ocjena</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($xml->film as $film): ?>
            <tr>
                <td><img src="<?php echo $film->slika; ?>" alt="poster filma"></td>
                <td><?php echo $film->naslov; ?></td>
                <td><?php echo $film->redatelj; ?></td>
                <td><?php echo $film->zanr; ?></td>
                <td><?php echo $film->godina_izlaska; ?></td>
                <td><?php echo $film->ocjena; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoT0z1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
