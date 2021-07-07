<nav class="menu">

    <a class="<?= $currentPage == 'main/home' ? ' active' : '' ?>" href="<?= $router->generate('main-home') ?>">Accueil</a>
    <a class="<?= $currentPage == 'main/home' ? ' active' : '' ?>" href="<?= $router->generate('main-home') ?>">Personnages</a>
    <a class="<?= $currentPage == 'main/home' ? ' active' : '' ?>" href="<?= $router->generate('main-home') ?>">Maisons</a>
    <a class="<?= $currentPage == 'main/home' ? ' active' : '' ?>" href="<?= $router->generate('main-home') ?>">Animaux</a>

</nav>