<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webage</title>
    <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>
    <?php
    $sections = [
        "acercade" => "Acerca de",
        "catalogo" => "Catalogo",
        "ofertas" => "Ofertas",
        "contacto" => "Contacto"
    ];

    $this->view("general/header", ["sections" =>$sections]);

    ?>