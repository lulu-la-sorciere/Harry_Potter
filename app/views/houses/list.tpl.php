<div class="content ">
    <div class="container">
        <div class="form">
            <form>
                <input type="search" placeholder="Rechercher" aria-label="Rechercher">
                <button type="submit">Rechercher</button>
            </form>
        </div>
        <h1><?= $title; ?></h1>
        <div class="house">

            <p>
                Bienvenue dans le monde merveilleux de Harry Potter !
            </p>
            <div>

                <p class="list">
                    Dans le monde de Harry Potter imaginée par J.K.Rowling, il exite 3 écoles :
                    <div class="div_house">
                        <li class="li"> Poudelard est l'école d'Angleterre <img class="school" src="<?= $assetsBaseUri ?>/images/Hogwart.png" alt="Hogwart"></li>
                        <li class="li"> Beauxbâtons est l'école de France <img class="school" src="<?= $assetsBaseUri ?>/images/Beauxbâtons.png" alt="BeauxBâtons"></li>
                        <li class="li"> Durmstrang est l'école de Bulgarie <img class="school" src="<?= $assetsBaseUri ?>/images/Durmstrang.png" alt="Durmstrang"></li>
                    </div>
                </p>
                <p>
                    L'histoire se déroule en Angletterre. Nous avons donc plus d'information sur l'école de Poudelard.
                    En effet, nous savons qu'elle est constituée des 4 maisons suivantes:
                </p>
                <?php foreach ($houses as $house) : ?>
                    <div class="li">
                        <h2>
                            <a href="<?= $router->generate('houses-detail') . $house->getId(); ?>"> <?= $house->getName(); ?></a>
                        </h2>
                        <img class="school" src="<?= $assetsBaseUri ?>/images/<?= $house->getPicture() ?>" alt="<?= $house->getName(); ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>