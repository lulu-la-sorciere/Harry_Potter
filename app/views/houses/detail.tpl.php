<div class="content ">
    <div class="container">
        <h1> <?= $title; ?></h1>
        <div class="houseé">
            <p>
                <?= $house->getDescription(); ?>
            </p>
            <p>
                Elle a été fondé par <strong><?= $character->getFirstname() ?> <?= $character->getLastname(); ?></strong>
            </p>
        </div>
        <div>
            <img src="<?= $assetsBaseUri ?>/images/<?= $house->getPicture() ?>" alt="<?= $house->getName(); ?>">
        </div>

    </div>
    <div class="Founder">
        <div class="House_Founder_Picture">
            <img class="Founder_Picture" src="<?= $assetsBaseUri ?>/images/<?= $character->getPicture() ?>" alt="<?= $character->getLastname(); ?>">
        </div>
        <div class="House_Founder_Description">
            <p><?= $character->getFirstname(). ' ' . $character->getLastname(); ?></p>
            <p><?=$character->getBio()?></p>
        </div>
    </div>
</div>