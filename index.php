<?php
$pageTitle = "Home | My Website";
include 'includes/header.php';
?>

<section>
    <h2>Explore Our Awesome Features</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed gravida, odio sed blandit lacinia, tellus dui
        fermentum urna, nec posuere quam metus a turpis.</p>
    <button class="btn">Get Started</button>
</section>

<?php include 'includes/footer.php'; ?>

<script>
    document.querySelector('.btn').addEventListener('click',
        function () {
            alert('You clicked the button!');
        });
</script>

</body>

</html>