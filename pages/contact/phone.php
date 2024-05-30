<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/98.css" />
    <link rel="stylesheet" href="/College%20campus/assets/css/styles.css?v=1.0">
    <title>Contact via Phone</title>
    <style>
        .container {
            width: 80%;
            margin: auto;
        }
        .contact-info {
            padding: 10px;
            border: 2px solid #000000;
            background-color: #c0c0c0;
            margin: 20px 0;
            text-align: center;
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
            <div class="title-bar-text">Contact via Phone</div>
        </div>
        <div class="window-body">
            <h1 style="text-align: center;">Contact via Phone</h1>
            <div class="contact-info">
                <p>For immediate assistance, please call us at:</p>
                <h2>+1 800 123 4567</h2>
                <p>Our phone lines are open from 9:00 AM to 5:00 PM, Monday to Friday.</p>
            </div>
            <nav style="text-align: center;">
                <a href="email.php" class="button">Contact via Email</a>
            </nav>
        </div>
    </div>
    <?php include('../../includes/footer.php'); ?>
</body>
</html>
