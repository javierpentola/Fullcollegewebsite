<?php include('../../includes/header.php'); ?>
<?php include('../../includes/navbar.php'); ?>

<main class="container window" style="background-color: #c0c0c0; border: 2px solid #000000; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); width: 80%; margin: 20px auto; text-align: center;">
    <div class="title-bar">
        <div class="title-bar-text">Register</div>
    </div>
    <div class="window-body">
        <h1 style="text-align: center;">Create a New Account</h1>
        <form action="register_action.php" method="post" style="text-align: center; margin-top: 20px;">
            <div style="margin-bottom: 10px;">
                <label for="username" style="display: block; margin-bottom: 5px;">Username:</label>
                <input type="text" id="username" name="username" required style="padding: 5px; width: 80%;">
            </div>
            <div style="margin-bottom: 10px;">
                <label for="email" style="display: block; margin-bottom: 5px;">Email:</label>
                <input type="email" id="email" name="email" required style="padding: 5px; width: 80%;">
            </div>
            <div style="margin-bottom: 20px;">
                <label for="password" style="display: block; margin-bottom: 5px;">Password:</label>
                <input type="password" id="password" name="password" required style="padding: 5px; width: 80%;">
            </div>
            <button type="submit" style="padding: 10px 20px; background-color: #000000; color: #ffffff; border: none;">Register</button>
        </form>
    </div>
</main>

<?php include('../../includes/footer.php'); ?>
