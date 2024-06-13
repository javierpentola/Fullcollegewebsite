<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include('../login/checklogin.php');

// Cargar información desde un archivo JSON (additional_info.json)
$json_file = 'additional_info.json';
$data = [];

if (file_exists($json_file)) {
    $data = json_decode(file_get_contents($json_file), true);
}

// Definir valores predeterminados si el archivo JSON está vacío
$data = array_merge([
    'address' => '',
    'nationality' => '',
    'languages' => ''
], $data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/98.css" />
    <link rel="stylesheet" href="/College%20campus/assets/css/styles.css?v=1.0">
    <title>Additional Info</title>
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
            <div class="title-bar-text">Additional Info</div>
        </div>
        <div class="window-body">
            <h1 style="text-align: center;">Additional Info</h1>
            <form action="save_additional_info.php" method="post">
                <table class="info-table">
                    <tr>
                        <th>Field</th>
                        <th>Information</th>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><input type="text" name="address" class="form-input" value="<?php echo htmlspecialchars($data['address']); ?>" readonly disabled></td>
                    </tr>
                    <tr>
                        <td>Nationality</td>
                        <td><input type="text" name="nationality" class="form-input" value="<?php echo htmlspecialchars($data['nationality']); ?>" readonly disabled></td>
                    </tr>
                    <tr>
                        <td>Languages</td>
                        <td><input type="text" name="languages" class="form-input" value="<?php echo htmlspecialchars($data['languages']); ?>" readonly disabled></td>
                    </tr>
                </table>
                <button type="button" class="button" onclick="enableEditing()">Edit</button>
                <button type="submit" class="button">Save</button>
            </form>
            <nav style="margin-top: 20px;">
                <a href="basic_info.php" class="button">Basic Info</a>
                <a href="contact_info.php" class="button">Contact Info</a>
                <a href="settings.php" class="button">Settings</a>
                <a href="work_info.php" class="button">Work Info</a>
            </nav>
        </div>
    </div>
    <?php include('../../includes/footer.php'); ?>
</body>
</html>
