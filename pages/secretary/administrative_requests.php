<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/98.css" />
    <link rel="stylesheet" href="/College%20campus/assets/css/styles.css?v=1.0">
    <title>Administrative Requests</title>
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
        .form-group input, .form-group select, .form-group textarea {
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
            <div class="title-bar-text">Administrative Requests</div>
        </div>
        <div class="window-body">
            <h1 style="text-align: center;">Administrative Requests</h1>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="request_type">Request Type:</label>
                    <select id="request_type" name="request_type" required>
                        <option value="transcript">Transcript Request</option>
                        <option value="enrollment_verification">Enrollment Verification</option>
                        <option value="diploma_replacement">Diploma Replacement</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="details">Details:</label>
                    <textarea id="details" name="details" rows="4" required></textarea>
                </div>
                <input type="submit" value="Submit Request">
            </form>
        </div>
    </div>
    <?php include('../../includes/footer.php'); ?>
</body>
</html>
