<div class="col-12 col-md-4 col-lg-3 flex-grow-1 pb-4">
    <div class="card h-100 shadow ">
        <img src="<?= $data["image"] ?>" class="card-img-top my-ratio" alt="<?= $data["title"] ?>">
        <div class="card-body">
            <h5 class="card-title">
                <?= $data["title"] ?>
            </h5>
            <p class="card-text">
                <?= substr($data["overview"], 0, 100).'...' ?>
            </p>
            <div class="d-flex justify-content-between align-items-flex-center flex-nowrap ">
                <?php
                if(isset($data["printStars"])) {
                    echo $data["printStars"];
                }
                ?>

                <?php
                if(isset($data["printFlag"])) {
                    echo $data["printFlag"];
                }
                ?>
            </div>
            <div>
                <?php
                if(isset($genresFilm)) {
                    foreach($genresFilm as $genre) {
                        echo $genre->printGenre();
                    }
                }
                ?>
            </div>
            <div class="text-nowrap" style="font-size: 0.7em">

                <div class="d-flex flex-row justify-content-between w-100">
                    <div>
                        <?= $price.'$'; ?>
                    </div>
                    <div>
                        <?= $quantity.'pz'; ?>
                    </div>
                </div>

                <?php
                if(isset($sconto) && $sconto > 0) {
                    echo '<br/>sconto: '.$sconto.'%';
                }
                ?>
            </div>
        </div>
    </div>
</div>