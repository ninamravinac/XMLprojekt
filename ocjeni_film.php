<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naslovFilma = $_POST['naslov_filma'];
    $ocjena = $_POST['ocjena'];
    $xml = simplexml_load_file('movies.xml');
    foreach ($xml->film as $film) {
        if ($film->naslov == $naslovFilma) {
            $film->ocjena = $ocjena;
            break;
        }
    }
    $xml->asXML('movies.xml');
    header("Location: index.php");
    exit;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ocjeni film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body {
            background-color: #556678;
        }
        h1 {
            color: #000000;
        }
        .form-label {
            color: #000000;
        }
        .form-control {
            border: 1px solid #00B021;
            background-color: #929ca8;
        }
        .form-control:focus {
            border-color: #80bdff;
            background-color: #929ca8;
            box-shadow: 0 0 0 0.2rem rgba(128, 189, 255,.25);
        }
        .btn-primary {
            background-color: #F27405;
            border-color: #80bdff;
        }
        .btn-primary:hover {
            background-color: #00B021;
            border-color: #80bdff;
        }
    </style>
</head>
<body>
<div class="container mt-4">
    <h1>Ocjeni film</h1>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="mb-3">
            <label for="naslovFilma" class="form-label">Naslov filma:</label>
            <input type="text" class="form-control" id="naslovFilma" name="naslov_filma" required>
        </div>
        <div class="mb-3">
            <label for="ocjena" class="form-label">Ocjena (1-10):</label>
            <input type="number" class="form-control" id="ocjena" name="ocjena" min="1" max="10" required>
        </div>
        <button type="submit" class="btn btn-primary">Ocjeni</button>
    </form>
</div>
</body>
</html>
