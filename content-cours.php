<?php
$idArticle = get_the_id();
$descCours  = get_the_content();
$departement = get_field("departement");
$titre = get_the_title();
$nombreHeures = get_field("nombre_dheures");
?>

<div>

    <h2>
        <a href="<?php echo get_permalink(); ?>">
            <?= substr($titre, 7) ?>
        </a>
    </h2>
    <?php the_post_thumbnail("thumbnail") ?>
    <p>
        <?php
        echo wp_trim_words($descCours, 20, '...<label class="button" for="modal' . $idArticle . '">'
            . substr($titre, 0, 8)
            . "</label>");
        ?>

    </p>

    <input type="radio" name="modal" class="modal__checkbox" id="modal<?= $idArticle; ?>">
    <article class="modal__article">
        <label for="fermer" class="modal__fermer"></label>
        <div>
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

    <footer>
        departement: <?php echo $departement; ?>
    </footer>
</div>