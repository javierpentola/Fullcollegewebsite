<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>

<main class="container window" style="background-color: #c0c0c0; border: 2px solid #000000; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); width: 80%; margin: 20px auto; text-align: center;">
    <div class="title-bar">
        <div class="title-bar-text">Home</div>
    </div>
    <div class="window-body">
        <h1 style="text-align: center;">Welcome to the University</h1>
        <p style="text-align: center;">This is the home page.</p>
        <?php include('pages/home/featured_news.php'); ?>
        <?php include('pages/home/quick_access.php'); ?>
        <?php include('pages/home/announcements_events.php'); ?>
    </div>
</main>

<?php include('includes/footer.php'); ?>
