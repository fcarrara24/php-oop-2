<div class="col-12 col-md-4 col-lg-3 flex-grow-1 pb-4">
    <div class="card h-100 shadow ">
        <img src="<?= $data["thumbnailUrl"] ?>" class="card-img-top my-ratio" alt="<?= $data["title"] ?>">
        <div class="card-body">
            <h5 class="card-title">
                <?= $data["title"] ?>
            </h5>
            <p class="card-text">
                <?= substr($data["longDescription"], 0, 100) . '...' ?>
            </p>
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
                //include __DIR__ . "/../Control/authorWeb.php"
                foreach ($data["authors"] as $author) {
                    echo $author;
                }

                ?>
            </div>
            <div class="py-2">
                <small>pages:
                    <?= $data["pageCount"] ?>
                </small>
            </div>
            <div class="text-nowrap " style="font-size: 0.7em">
                <?php
                echo 'prezzo: ' . $price . '$ quantita:' . $quantity . 'pz sconto: ' . $sconto . '%';
                ?>
            </div>
        </div>
    </div>
</div>