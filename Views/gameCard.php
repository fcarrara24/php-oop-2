<div class="col-12 col-md-4 col-lg-3 flex-grow-1 pb-4">
    <div class="card h-100 shadow ">
        <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/<?= $data["appid"] ?>/header.jpg"
            class="card-img-top my-ratio" alt="<?= $data["name"] ?>">
        <div class="card-body">
            <h5 class="card-title">
                <?= $data["name"] ?>
            </h5>

            <div class="text-nowrap" style="font-size: 0.7em">
                <?php
                echo 'prezzo: ' . $price . '$ quantita:' . $quantity . 'pz sconto: ' . $sconto . '%';
                ?>
            </div>
        </div>
    </div>
</div>