<?php
include 'includes/db_connection.php';
?>

<?php
$pageTitle = "Contact me | My Website";
include 'includes/header.php'; ?>

<section>
    <h2>Contact me here</h2>
    <p>socials</p>
    <button class="btn">Get Started</button>

    <?php
    // Check database connection
    if ($connection->connect_error) {
        echo "<p>Failed to connect to database: " . $connection->connect_error . "</p>";
    } else {
        echo "<p>Connected to database successfully</p>";
    }
    ?>
</section>
<?php include 'includes/footer.php'; ?>

</body>

</html>