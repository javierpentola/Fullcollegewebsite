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

        <!-- Incluye el nuevo componente de rotación de noticias -->
        <?php include('pages/home/rotating_news.php'); ?>
        
        <div style="text-align: center; margin: 20px 0;">
            <a href="pages/courses/index.php" style="margin: 0 10px; text-decoration: none;">Courses</a>
            <a href="pages/calendar/index.php" style="margin: 0 10px; text-decoration: none;">Calendar</a>
            <a href="pages/grades/index.php" style="margin: 0 10px; text-decoration: none;">Grades</a>
        </div>

        <?php include('pages/home/announcements_events.php'); ?>
    </div>
</main>

<?php include('includes/footer.php'); ?>
