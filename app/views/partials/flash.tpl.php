<?php if (isset($_SESSION['errors'])) : ?>
    <div >
        <?php foreach ($_SESSION['errors'] as $error) : ?>
            <div >
                <?= $error ?>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- On nettoie la session après affichage -->
    <?php unset($_SESSION['errors']) ?>
<?php endif; ?>


<?php if (isset($_SESSION['infos'])) : ?>
    <div >
        <?php foreach ($_SESSION['infos'] as $error) : ?>
            <div >
                <?= $error ?>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- On nettoie la session après affichage -->
    <?php unset($_SESSION['infos']) ?>
<?php endif; ?>