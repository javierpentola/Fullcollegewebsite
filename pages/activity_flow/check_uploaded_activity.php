<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/98.css" />
    <link rel="stylesheet" href="/College%20campus/assets/css/styles.css?v=1.0">
    <title>Check Uploaded Activity</title>
    <style>
        .activity-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        .activity-table th, .activity-table td {
            border: 2px solid #000000;
            padding: 10px;
            text-align: left;
        }
        .activity-table th {
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
            <div class="title-bar-text">Check Uploaded Activity</div>
        </div>
        <div class="window-body">
            <h1 style="text-align: center;">Check Uploaded Activity</h1>
            <table class="activity-table">
                <tr>
                    <th>Activity Name</th>
                    <th>Date Uploaded</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                <tr>
                    <td>Assignment 1</td>
                    <td>2024-05-25</td>
                    <td>Uploaded</td>
                    <td><a href="#" class="button">View</a> <a href="#" class="button">Delete</a></td>
                </tr>
            </table>
        </div>
    </div>
    <?php include('../../includes/footer.php'); ?>
</body>
</html>
