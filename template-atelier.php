<?php

/**
 * Template name: atelier
 */
?>
<?php get_header() ?>

<main class="site__main">

    <?php ?>
    <mark>Atelier à venir</mark>
    <?php if (have_posts()) : the_post(); ?>
        <article class="annonce__article">
            <h1><?= get_the_title() ?></h1>
            <?php the_content(); ?>
            <?php
            $animateur = get_field('animateur');
            $type = get_field('le_type_de_formation');
            $date_debut= get_field('date_de_debut_de_latelier');
            $duree = get_field('duree');
            $heure = get_field('heure');
            $nombre_heures = get_field('nombre_dheures_par_seance');
            $niveau = get_field('niveau_de_difficulte');
            $lieu = get_field('lieu_ou_se_deroulera_latelier');
            $prix = get_field('le_prix_datelier');


            echo "<p class='annonce__animateur'> L'animateur de l'atelier :" . $animateur . "</p>";
            echo "<p class='annonce__le_type_de_formation'> Le type de formation : " . $type . "</p>";
            echo "<p class='annonce__date_de_debut_de_latelier'> La date de début : " . $date_debut . "</p>";
            echo "<p class='annonce__duree'> La durée : " . $duree . "</p>";
            echo "<p class='annonce__heure'> L'heure :" . $nombre_heures . "</p>";
            echo "<p class='annonce__niveau_de_difficulte'> Niveau de difficulté : " . $niveau . "</p>";
            echo "<p class='annonce__lieu_ou_se_deroulera_latelier'> Lieu ou se déroulera l'atelier :" . $lieu . "</p>";
            echo "<p class='annonce__niveau_de_difficulte'> Le prix d'atelier : " . $prix . "</p>";

            $image = get_field('image');
            if (!empty($image)) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif ?>
        </article>
    <?php endif ?>
</main>
<?php get_footer(); ?>