<?php
    /* Template Name: Accueil */
    get_header();

    // CODE POUR AFFICHER OUVERT OU FERME EN TEMPS REEL 

    // Récupérer un tableau des jours d'ouverture
    $jours = ['lundi', 'mardi', 'jeudi', 'samedi']; 
    // Récupérer les horaires d'ouverture et fermeture pour chaque jours
    $horaires = ['lundi-start' => '01:09:00', 'lundi-end' => '01:10:00', 'mardi-start' => '14:30:00', 'mardi-end' => '17:30:00', 'jeudi-start' => '14:30:00', 'jeudi-end' => '17:30:00', 'samedi-start' => '10:00:00', 'samedi-end' => '13:00:00'];
    // récupérer le jour actuel
    $today = wp_date('l');
    // récupérer l'heure actuelle sous format strtotime pour pouvoir le comparer
    $now = strtotime(wp_date('H:i:s'));

    // on check si le jour d'ajd est dans le tableau des joursz d'ouveture
    if(in_array($today, $jours)){
        // on check si son heure d'ouverture est spécifié
        if(array_key_exists($today . "-start", $horaires)){
            // on converttis l'heure d'ouverture et fermeture pour les comparer avec strtotime
            $todaystart = strtotime($horaires[$today . "-start"]);
            $todayend = strtotime($horaires[$today . "-end"]);
            // on vérifie si l'heure actuelle est plus grande ou égale à l'heure d'ouverture et si il est plus petit que l'heure de fermeture
            if($now >= $todaystart && $now <= $todayend){
                // on affiche ouvert
                ?>
                    <div>
                        <br>
                        <p>Ouvert !</p>
                        <br>
                    </div>
                <?php
            }else {
                ?>
                    <div>
                        <br>
                        <p>Fermé !</p>
                        <br>
                    </div>
                <?php
            }
        }else {
            ?>
                    <div>
                        <br>
                        <p>Fermé !</p>
                        <br>
                    </div>
                <?php
        }
    }else {
        ?>
                    <div>
                        <br>
                        <p>Fermé !</p>
                        <br>
                    </div>
                <?php
    }
?>
ACCUEIL

<?php 
$sponsors = get_posts([
    'post_type' => 'sponsor'
]);

foreach($sponsors as $sponsor):
    $nom = get_field('nom_du_sponsor', $sponsor->ID);
    $description = get_field('description', $sponsor->ID);
    $logo = get_field('logo', $sponsor->ID);
    ?>
    <div class="sponsor_container">
    <?php
                if($logo) :
            ?>
            <img src="<?php echo esc_url($logo['sizes']['thumbnail']); ?>" alt="<?php echo $logo['alt']; ?>" height="<?php echo $logo['sizes']['thumbnail-height']; ?>" width="<?php echo $logo['sizes']['thumbnail-width']; ?>" loading="lazy">
           <?php
           endif;
           ?>
        <h2><?=$nom?></h2>
        <p><?=$description?></p>
        <a href="<?php echo(get_permalink($sponsor)); ?>">Voir le sponsor</a>
    </div>
    <?php

endforeach;




?>


<?php get_footer(); ?>