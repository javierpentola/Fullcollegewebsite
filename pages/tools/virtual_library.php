<!DOCTYPE html>
<html lang="en">
<head>
   Vamos a generar el código para el archivo `virtual_library.php` en la sección `tools`.

### `/pages/tools/virtual_library.php`
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/98.css" />
    <link rel="stylesheet" href="/College%20campus/assets/css/styles.css?v=1.0">
    <title>Virtual Library</title>
    <style>
        .tools-container {
            width: 80%;
            margin: auto;
        }
        .button {
            background-color: #004080;
            color: white;
            border: 2px solid #000000;
            padding: 10px;
            text-decoration: none;
            display: inline-block;
            margin: 5px 0;
        }
        .button:hover {
            background-color: #ffffff;
            color: black;
        }
    </style>
</head>
<body class="window">
    <?php include('../../includes/navbar.php'); ?>
    <div class="tools-container window">
        <div class="title-bar">
            <div class="title-bar-text">Virtual Library</div>
        </div>
        <div class="window-body">
            <h1 style="text-align: center;">Virtual Library</h1>
            <p style="text-align: center;">Access a variety of electronic resources through the virtual library.</p>
            <ul>
                <li><a href="#" class="button">eBooks</a></li>
                <li><a href="#" class="button">Research Papers</a></li>
                <li><a href="#" class="button">Journals</a></li>
                <li><a href="#" class="button">Databases</a></li
