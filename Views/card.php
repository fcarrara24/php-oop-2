<div class="col-12 col-md-4 col-lg-3 flex-grow-1 pb-4">
    <div class="card h-100 shadow ">
        <img src="<?= $data["image"] ?>" class="card-img-top my-ratio" alt="<?= $data["title"] ?>">
        <div class="card-body">
            <h5 class="card-title">
                <?= $data["title"] ?>
            </h5>
            <p class="card-text">
                <?php
                if(isset($data["overview"])) {
                    echo substr($data["overview"], 0, 100).'...';
                }
                ?>
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
            <!-- book section -->
            <?php if(isset($data["authors"])) { ?>
                <div class="d-flex justify-content-between align-items-flex-center flex-nowrap ">
                    <?php echo $data["status"] ?>
                    <div>
                        <small class="text-white"
                            style="max-width: 50px; height: auto; background-color: black; padding: 2px; border-radious: 50%;">
                            <?= $data["categories"][0] ?>
                        </small>
                    </div>
                </div>
                <div style="font-size: 0.8em; max-width: 70%;">
                    <?php

                    foreach($data["authors"] as $author) {
                        echo $author;
                    }

                    ?>
                </div>
                <?php
            }
            ?>
            <!-- book pages -->
            <small>
                <?
                if(isset($data["pageCount"])) {
                    echo 'pages: '.$data["pageCount"];
                }
                ?>
            </small>
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