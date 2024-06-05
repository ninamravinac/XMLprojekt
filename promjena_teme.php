<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promjena teme</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
    <div class="container mt-5">
        <h1>Promjena teme dnevnika</h1>
        <form action="index.php" method="POST">
            <div class="form-group">
                <label for="background_color" class="form-label">Boja pozadine:</label>
                <input type="color" class="form-control" id="background_color" name="background_color">
            </div>
            <div class="form-group">
                <label for="text_color" class="form-label">Boja teksta:</label>
                <input type="color" class="form-control" id="text_color" name="text_color">
            </div>
            <div class="form-group">
                <label for="table_background_color" class="form-label">Boja pozadine tablice:</label>
                <input type="color" class="form-control" id="table_background_color" name="table_background_color">
            </div>
            <div class="form-group">
                <label for="table_text_color" class="form-label">Boja teksta u tablici:</label>
                <input type="color" class="form-control" id="table_text_color" name="table_text_color">
            </div>
            <div class="form-group">
                <label for="table_border_color" class="form-label">Boja obruba tablice:</label>
                <input type="color" class="form-control" id="table_border_color" name="table_border_color">
            </div>
            <div class="form-group">
                <label for="font_family" class="form-label">Fontovi:</label>
                <select class="form-control" id="font_family" name="font_family">
                    <option value="Roboto">Roboto</option>
                    <option value="Arial">Arial</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Times New Roman">Times New Roman</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Primjeni</button>
        </form>
    </div>
</body>
</html>
