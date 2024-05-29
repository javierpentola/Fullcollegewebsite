<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/98.css" />
    <link rel="stylesheet" href="/College%20campus/assets/css/styles.css?v=1.0">
    <title>Simulators</title>
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
            <div class="title-bar-text">Simulators</div>
        </div>
        <div class="window-body">
            <h1 style="text-align: center;">Simulators</h1>
            <p style="text-align: center;">Access various simulators to practice your skills.</p>
            <ul>
                <li><a href="#" class="button">Coding Simulators</a></li>
                <li><a href="#" class="button">Physics Simulators</a></li>
                <li><a href="#" class="button">Chemistry Simulators</a></li>
            </ul>
        </div>
    </div>
    <?php include('../../includes/footer.php'); ?>
</body>
</html>
