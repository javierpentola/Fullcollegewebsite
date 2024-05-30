<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/98.css" />
    <link rel="stylesheet" href="/College%20campus/assets/css/styles.css?v=1.0">
    <title>Contact via Email</title>
    <style>
        .container {
            width: 80%;
            margin: auto;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 8px;
            border: 2px solid #000000;
            background-color: #ffffff;
            margin-bottom: 20px;
        }
        input[type="submit"] {
            background-color: #008000;
            color: #ffffff;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-weight: bold;
            width: 100%;
        }
    </style>
</head>
<body class="window">
    <?php include('../../includes/navbar.php'); ?>
    <div class="container window">
        <div class="title-bar">
            <div class="title-bar-text">Contact via Email</div>
        </div>
        <div class="window-body">
            <h1 style="text-align: center;">Contact via Email</h1>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="name">Your Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Your Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" id="subject" name="subject" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                </div>
                <input type="submit" value="Send Email">
            </form>
        </div>
    </div>
    <?php include('../../includes/footer.php'); ?>
</body>
</html>
