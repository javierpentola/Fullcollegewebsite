<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/98.css" />
    <link rel="stylesheet" href="/College%20campus/assets/css/styles.css?v=1.0">
    <title>Upload Activity</title>
    <style>
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #000000;
        }
        .form-group input[type="file"], .form-group input[type="text"] {
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
            margin-bottom: 10px;
        }
        .container {
            width: 80%;
            margin: auto;
        }
    </style>
</head>
<body class="window">
    <?php include('../../includes/navbar.php'); ?>
    <div class="container window">
        <div class="title-bar">
            <div class="title-bar-text">Upload Activity</div>
        </div>
        <div class="window-body">
            <h1 style="text-align: center;">Upload Activity</h1>
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="activity_name">Activity Name:</label>
                    <input type="text" id="activity_name" name="activity_name" required>
                </div>
                <div class="form-group">
                    <label for="file">Upload File:</label>
                    <input type="file" id="file" name="file" required>
                </div>
                <input type="submit" value="Upload">
            </form>
        </div>
    </div>
    <?php include('../../includes/footer.php'); ?>
</body>
</html>
