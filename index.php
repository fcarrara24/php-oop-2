<?php
include __DIR__ . "/Views/header.php";
include __DIR__ . "/Control/Movie.php";
?>

<main>
    <section class="container">
        <div class="row gy-5 d-flex flex-row">
            <?php foreach ($movies as $movie) {
                $movie->printCard();
            } ?>
        </div>
    </section>

</main>


<?php
include __DIR__ . "/Views/footer.php";
?>