<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/98.css" />
    <link rel="stylesheet" href="/College%20campus/assets/css/styles.css?v=1.0">
    <title>Basic Info</title>
    <style>
        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        .info-table th, .info-table td {
            border: 2px solid #000000;
            padding: 10px;
            text-align: left;
        }
        .info-table th {
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
            <div class="title-bar-text">Basic Info</div>
        </div>
        <div class="window-body">
            <h1 style="text-align: center;">Basic Info</h1>
            <table class="info-table">
                <tr>
                    <th>Field</th>
                    <th>Information</th>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>John Doe</td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td>01/01/1990</td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>Male</td>
                </tr>
                <tr>
                    <td>Student ID</td>
                    <td>12345678</td>
                </tr>
                <tr>
                    <td>Course</td>
                    <td>Computer Science</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>john.doe@example.com</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>+1 234 567 890</td>
                </tr>
            </table>
            <a href="#" class="button">Edit</a>
            <a href="#" class="button">Save</a>
            <nav style="margin-top: 20px;">
                <a href="additional_info.php" class="button">Additional Info</a>
                <a href="contact_info.php" class="button">Contact Info</a>
                <a href="settings.php" class="button">Settings</a>
                <a href="work_info.php" class="button">Work Info</a>
            </nav>
        </div>
    </div>
    <?php include('../../includes/footer.php'); ?>
</body>
</html>
