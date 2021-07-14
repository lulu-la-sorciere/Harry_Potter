<div class="content ">
    <div class="container">
        <div class="form">
            <form>
                <input type="search" placeholder="Rechercher" aria-label="Rechercher">
                <button type="submit">Rechercher</button>
            </form>
        </div>

        <div class= "house">
            <h1><?= $title; ?></h1>
            <p>
                Bienvenue dans le monde merveilleux de Harry Potter !
            </p>
            <p>
                Dans le monde de Harry Potter imaginée par J.K.Rowling, il exite 3 écoles :
                <li> Poudelard est l'école d'Angleterre <img src="<?= $assetsBaseUri ?>/images/Hogwart.png" alt="Hogwart"></li>
                <li> Beauxbâtons est l'école de France <img src="<?= $assetsBaseUri ?>/images/Beauxbâtons.png"" alt=""></li>
                <li> Durmstrang est l'école de Bulgarie <img src="<?= $assetsBaseUri ?>/images/Durmstrang.png"" alt=""></li>
            </p>


       
            <p> 
                L'histoire se déroule en Angletterre. Nous avons donc plus d'information sur l'école de Poudelard.
                En effet, nous savons qu'elle est constituée des 4 maisons suivantes: 
            </p>
            <div>
                <?php foreach ($houses as $house): ?>
            
               <h2><a href=""> <?= $house->getName();?></a> </h2>
               <p><?=$house->getDescription();?></p>
               <img src="<?= $assetsBaseUri ?>/images/<?= $house->getPicture() ?>" alt="">
         
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</div>