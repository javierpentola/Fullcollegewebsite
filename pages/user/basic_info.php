<?php
session_start();
include('../login/checklogin.php');

// Cargar información desde un archivo JSON (basic_info.json)
$data = json_decode(file_get_contents('basic_info.json'), true);
?>

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
        .form-input {
            width: 100%;
            padding: 5px;
        }
    </style>
    <script>
        function enableEditing() {
            var inputs = document.querySelectorAll('.form-input');
            inputs.forEach(function(input) {
                input.removeAttribute('readonly');
                input.disabled = false;
            });
        }
    </script>
</head>
<body class="window">
    <?php include('../../includes/navbar.php'); ?>
    <div class="container window">
        <div class="title-bar">
            <div class="title-bar-text">Basic Info</div>
        </div>
        <div class="window-body">
            <h1 style="text-align: center;">Basic Info</h1>
            <form action="save_basic_info.php" method="post">
                <table class="info-table">
                    <tr>
                        <th>Field</th>
                        <th>Information</th>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name" class="form-input" value="<?php echo $data['name']; ?>" readonly disabled></td>
                    </tr>
                    <tr>
                        <td>Date of Birth</td>
                        <td><input type="date" name="dob" class="form-input" value="<?php echo $data['dob']; ?>" readonly disabled></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>
                            <select name="gender" class="form-input" disabled>
                                <option value="Male" <?php if ($data['gender'] == 'Male') echo 'selected'; ?>>Male</option>
                                <option value="Female" <?php if ($data['gender'] == 'Female') echo 'selected'; ?>>Female</option>
                                <option value="Other" <?php if ($data['gender'] == 'Other') echo 'selected'; ?>>Other</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Student ID</td>
                        <td><input type="text" name="student_id" class="form-input" value="<?php echo $data['student_id']; ?>" readonly disabled></td>
                    </tr>
                    <tr>
                        <td>Course</td>
                        <td><input type="text" name="course" class="form-input" value="<?php echo $data['course']; ?>" readonly disabled></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" class="form-input" value="<?php echo $data['email']; ?>" readonly disabled></td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td><input type="tel" name="phone" class="form-input" value="<?php echo $data['phone']; ?>" readonly disabled></td>
                    </tr>
                </table>
                <button type="button" class="button" onclick="enableEditing()">Edit</button>
                <button type="submit" class="button">Save</button>
            </form>
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
