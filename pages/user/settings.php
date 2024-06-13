<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include('../login/checklogin.php');

// Cargar información desde un archivo JSON (settings.json)
$data = json_decode(file_get_contents('settings.json'), true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/98.css" />
    <link rel="stylesheet" href="/College%20campus/assets/css/styles.css?v=1.0">
    <title>Settings</title>
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
            <div class="title-bar-text">Settings</div>
        </div>
        <div class="window-body">
            <h1 style="text-align: center;">Settings</h1>
            <form action="save_settings.php" method="post">
                <table class="info-table">
                    <tr>
                        <th>Setting</th>
                        <th>Value</th>
                    </tr>
                    <tr>
                        <td>Language</td>
                        <td><input type="text" name="language" class="form-input" value="<?php echo $data['language']; ?>" readonly disabled></td>
                    </tr>
                    <tr>
                        <td>Time Zone</td>
                        <td><input type="text" name="time_zone" class="form-input" value="<?php echo $data['time_zone']; ?>" readonly disabled></td>
                    </tr>
                    <tr>
                        <td>Notifications</td>
                        <td><input type="text" name="notifications" class="form-input" value="<?php echo $data['notifications']; ?>" readonly disabled></td>
                    </tr>
                </table>
                <button type="button" class="button" onclick="enableEditing()">Edit</button>
                <button type="submit" class="button">Save</button>
            </form>
            <nav style="margin-top: 20px;">
                <a href="additional_info.php" class="button">Additional Info</a>
                <a href="basic_info.php" class="button">Basic Info</a>
                <a href="contact_info.php" class="button">Contact Info</a>
                <a href="work_info.php" class="button">Work Info</a>
            </nav>
        </div>
    </div>
    <?php include('../../includes/footer.php'); ?>
</body>
</html>
