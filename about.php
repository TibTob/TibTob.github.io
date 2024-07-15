<?php
$pageTitle = "About me | My Website";
include 'includes/header.php';

?>

<section>
    <h1>Who am I</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed gravida, odio sed blandit lacinia, tellus dui
        vitae nib tempor</p>
    <?php echo "hello"; ?>
</section>
<?php include 'includes/footer.php'; ?>
<script>
    document.querySelector('.btn').addEventListener('click', function () {
        alert('You clicked the button!');
    });
</script>

</body>

</html>