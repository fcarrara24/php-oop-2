<div class="col-12 col-md-4 col-lg-3 flex-grow-1 pb-4">
    <div class="card h-100">
        <img src="<?= $data["poster_path"] ?>" class="card-img-top my-ratio" alt="<?= $data["title"] ?>">
        <div class="card-body">
            <h5 class="card-title">
                <?= $data["title"] ?>
            </h5>
            <p class="card-text">
                <?= substr($data["overview"], 0, 100) . '...' ?>
            </p>
            <div class="d-flex justify-content-between align-items-flex-center flex-nowrap ">
                <?php for ($i = 0; $i < 5; $i++) { ?>
                    <i
                        class=" fa-star d-flex flex-column justify-content-center  <?= ($i < floor($data["vote_average"] / 2) ? "fa-solid" : "fa-regular") ?>"></i>
                    <?php
                } ?>
                <div>
                    <small style="max-width: 50px; height: auto;">
                        <img src="<?= "https://flagsapi.com/" . ($data["original_language"] == "en" ? "GB" : strtoupper(substr($data["original_language"], 0, 2))) . "/flat/64.png" ?>"
                            alt="" srcset="">
                    </small>
                </div>
            </div>
            <div>
                <?php include __DIR__ . "/../Control/Genre.php" ?>
            </div>
        </div>
    </div>
</div>