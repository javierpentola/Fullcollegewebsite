<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/98.css" />
    <link rel="stylesheet" href="/College%20campus/assets/css/styles.css?v=1.0">
    <title>Access Documentation</title>
    <style>
        .container {
            width: 80%;
            margin: auto;
        }
        .document-list {
            list-style-type: none;
            padding: 0;
        }
        .document-list li {
            padding: 10px;
            border: 2px solid #000000;
            margin: 10px 0;
            background-color: #c0c0c0;
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
            <div class="title-bar-text">Access Documentation</div>
        </div>
        <div class="window-body">
            <h1 style="text-align: center;">Access Documentation</h1>
            <ul class="document-list">
                <li><a href="#" class="button">Student Handbook</a></li>
                <li><a href="#" class="button">Course Catalog</a></li>
                <li><a href="#" class="button">Graduation Requirements</a></li>
                <li><a href="#" class="button">Academic Policies</a></li>
            </ul>
        </div>
    </div>
    <?php include('../../includes/footer.php'); ?>
</body>
</html>
