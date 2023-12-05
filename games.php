<?php
include __DIR__ . "/Views/header.php";
include __DIR__ . "/Control/Game.php";


?>

<main>
    <section class="container">
        <div class="row gy-5 d-flex flex-row">

            <?php
            Game::fetchAll();

            ?>
        </div>
    </section>

</main>


<?php
include __DIR__ . "/Views/footer.php";
?>