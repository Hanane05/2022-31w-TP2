<?php
$idArticle = get_the_id();
$descCours  = get_the_content();
$departement = "Département TIM";
$titre = get_the_title();
$nombreHeures = get_field("nombre_dheures");
?>

<div>

    <h2>
        <a href="<?php echo get_permalink(); ?>">
            <?= substr($titre, 7) ?>
        </a>
    </h2>
    <p>
        <?php
        echo wp_trim_words($descCours, 20, '...');
        ?>
    </p>

    <label class="button" for="boite-modale<?= $idArticle ?>"><?= substr($titre, 0, 8) ?></label>

    <footer>
        <?php echo $departement; ?>
    </footer>

    <input type="radio" name="boite-modale" class="boite-modale__checkbox" id="boite-modale<?= $idArticle; ?>">
    <article class="boite-modale__article">
        <label for="boite-modale-fermer" class="boite-modale__fermer"></label>
        <div>

            <h2>
                <a href="<?php echo get_permalink(); ?>">
                    <?= substr($titre, 7) ?>
                </a>
            </h2>

            <p>
                <?= $descCours ?>
            </p>
            <p>
                Nombre d'heures: <?= $nombreHeures; ?>
            </p>
            <p>
                Sigle cours: <?= substr($titre, 0, 7); ?>
            </p>
        </div>
    </article>
    <input type="radio" name="boite-modale" class="boite-modale__checkbox" id="boite-modale-fermer">

</div>