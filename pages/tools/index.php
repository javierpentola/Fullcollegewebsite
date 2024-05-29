<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/98.css" />
    <link rel="stylesheet" href="/College%20campus/assets/css/styles.css?v=1.0">
    <title>Tools</title>
    <style>
        .container {
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
    <div class="container window">
        <div class="title-bar">
            <div class="title-bar-text">Tools</div>
        </div>
        <div class="window-body">
            <h1 style="text-align: center;">Tools</h1>
            <p style="text-align: center;">Access various tools to enhance your learning experience.</p>
            <div style="text-align: center;">
                <a href="collaboration.php" class="button">Collaboration</a>
                <a href="forums.php" class="button">Forums</a>
                <a href="schedule_planner.php" class="button">Schedule Planner</a>
                <a href="simulators.php" class="button">Simulators</a>
                <a href="virtual_library.php" class="button">Virtual Library</a>
            </div>
        </div>
    </div>
    <?php include('../../includes/footer.php'); ?>
</body>
</html>
