<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/98.css" />
    <link rel="stylesheet" href="/College%20campus/assets/css/styles.css?v=1.0">
    <title>Courses</title>
    <style>
        .courses-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        .courses-table th, .courses-table td {
            border: 2px solid #000000;
            padding: 10px;
            text-align: left;
        }
        .courses-table th {
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
            <div class="title-bar-text">Courses</div>
        </div>
        <div class="window-body">
            <h1 style="text-align: center;">Courses</h1>
            <table class="courses-table">
                <tr>
                    <th>Course Code</th>
                    <th>Course Name</th>
                    <th>Instructor</th>
                    <th>Credits</th>
                    <th>Actions</th>
                </tr>
                <tr>
                    <td>CS101</td>
                    <td>Introduction to Computer Science</td>
                    <td>Dr. Smith</td>
                    <td>3</td>
                    <td><a href="#" class="button">View</a></td>
                </tr>
                <tr>
                    <td>CS102</td>
                    <td>Data Structures</td>
                    <td>Dr. Johnson</td>
                    <td>3</td>
                    <td><a href="#" class="button">View</a></td>
                </tr>
                <tr>
                    <td>CS103</td>
                    <td>Algorithms</td>
                    <td>Dr. Lee</td>
                    <td>3</td>
                    <td><a href="#" class="button">View</a></td>
                </tr>
            </table>
        </div>
    </div>
    <?php include('../../includes/footer.php'); ?>
</body>
</html>
