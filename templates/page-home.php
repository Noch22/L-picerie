<?php
    /* Template Name: Accueil */
    get_header();

    $title = get_field('page_title', 'options');
    $cover = get_field('image_de_fond', 'options');
    $desc = get_field('description_accueil', 'options');
    $expo_home = get_field('exposition_page_daccueil', 'options');
    $idpost = $expo_home->ID;

    $expositions = get_posts([
        'post_type' => 'exposition',
        'numberposts' => '1',
        'post__in' => array($idpost)
    ]);


    $expo_name = get_field('expo_name', $idpost);
    $image = get_field('image_de_lexposition', $idpost);
    $artistes = get_field('artiste', $idpost);
    $techniques = get_field('techniques', $idpost);
    $start_date = get_field('date_de_debut', $idpost);
    $end_date = get_field('date_de_fin', $idpost);
    $additional_txt = get_field('texte_additionnel', $idpost);
    $link = get_permalink($expo_home);

    $flexible_contents = get_field('content', $idpost);
    
?>
<div class="cover_banner" style="background-image: url(<?php echo esc_url($cover['sizes']['cover-banner']); ?>);">
    <div class="home_div">
            <div class="logo_cover">
                <img src="<?= get_site_url() . '/wp-content/uploads/2024/01/logo_home.png'?>" id="logo_cover" alt="Logo l'épicerie">
            </div>
            <div class="home_div_text">
                <h1><?= $title ?></h1>
                <p><?= $desc ?></p>
            </div>
    </div>
</div>
<main>
    <div class="last_expo wrapper">
        <div class="cover_expo">
            <img src="<?php echo esc_url($image['sizes']['expo-thumbnail']); ?>" alt="<?php echo $image['alt']; ?>" height="<?php echo $image['sizes']['expo-thumbnail-height']; ?>" width="<?php echo $image['sizes']['expo-thumbnail-width']; ?>" loading="lazy">
        </div>
             <div class="text_expo">
                <p id="badge">Exposition</p>
                    <div class="dates">
                        <p><?= $start_date ?></p>
                        <div class="arrow">
                            <svg width="25" height="12" viewBox="0 0 25 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.9797 11.9085L16.7381 6.7761H0.930664V5.28514H16.7381L12.9797 0.15271L24.9665 6.03062L12.9797 11.9085Z" fill="black"/>
                            </svg>
                        </div>
                    <p><?= $end_date ?></p>
                    </div>
                <p id="additional_txt"><?= $additional_txt ?></p>
                <h2><?= $expo_name ?></h2>
                <h3><?= $artistes ?></h3>
                <h3 id="techniques"><?= $techniques ?></h3>
                <div class="view_more">
                    <a href="<?php echo( get_permalink( get_page_by_path( 'expositions' ) ))?>">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_382_230" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="40" height="40">
                                <rect width="40" height="40" fill="#D9D9D9"/>
                            </mask>
                            <g mask="url(#mask0_382_230)">
                                <path d="M18.333 28.3335H21.6663V21.6668H28.333V18.3335H21.6663V11.6668H18.333V18.3335H11.6663V21.6668H18.333V28.3335ZM19.9997 36.6668C17.6941 36.6668 15.5275 36.2293 13.4997 35.3543C11.4719 34.4793 9.70801 33.2918 8.20801 31.7918C6.70801 30.2918 5.52051 28.5279 4.64551 26.5002C3.77051 24.4724 3.33301 22.3057 3.33301 20.0002C3.33301 17.6946 3.77051 15.5279 4.64551 13.5002C5.52051 11.4724 6.70801 9.7085 8.20801 8.2085C9.70801 6.7085 11.4719 5.521 13.4997 4.646C15.5275 3.771 17.6941 3.3335 19.9997 3.3335C22.3052 3.3335 24.4719 3.771 26.4997 4.646C28.5275 5.521 30.2913 6.7085 31.7913 8.2085C33.2913 9.7085 34.4788 11.4724 35.3538 13.5002C36.2288 15.5279 36.6663 17.6946 36.6663 20.0002C36.6663 22.3057 36.2288 24.4724 35.3538 26.5002C34.4788 28.5279 33.2913 30.2918 31.7913 31.7918C30.2913 33.2918 28.5275 34.4793 26.4997 35.3543C24.4719 36.2293 22.3052 36.6668 19.9997 36.6668Z" fill="#1C1B1F"/>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
</main>
<div class="marquee">
    <p>Rendez-vous ! </p>
    <p>Rendez-vous ! </p>
    <p>Rendez-vous ! </p>
    <p>Rendez-vous ! </p>
</div>

<div class="rdv">
    <?php
    
    $events = get_posts([
        'post_type' => 'evenement',
        'numberposts' => '3',
    ]);
    $i = 0;
    foreach ($events as $event):
        $event_name = get_field('nom_de_levenement', $event->ID);
        $event_desc = get_field('description_de_levenement', $event->ID);
        $event_date = get_field('date_de_levenement', $event->ID);
        $event_id = get_field('type_devenement', $event->ID);
        $event_taxo = get_term($event_id)->taxonomy;
        $event_type = get_term($event_id)->name;
        $event_inner_color = get_field('couleur_du_cercle_interieur', $event_taxo.'_'.$event_id);
        $event_outer_color = get_field('couleur_du_cercle_exterieur', $event_taxo.'_'.$event_id);
        $i++;
        $description_class = 'description-' . $i;
        $border_class = 'border-' . $i;
    ?>
    
        <div class="element <?= $border_class ?> border wrapper">
            <div class="type">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="16" cy="16" r="16" fill="<?=$event_outer_color?>"/>
                <circle cx="16" cy="16" r="10" fill="<?=$event_inner_color?>"/>
                </svg>
                    <p><?= $event_type?></p>
            </div>
            <div class="name"><?=$event_name?></div>
            <div class="date"><?=$event_date?></div>
            <div class="action">
                <button class="show_btn" data-id="<?= $i ?>">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_382_230" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="40" height="40">
                                    <rect width="40" height="40" fill="#D9D9D9"/>
                                </mask>
                                <g mask="url(#mask0_382_230)">
                                    <path d="M18.333 28.3335H21.6663V21.6668H28.333V18.3335H21.6663V11.6668H18.333V18.3335H11.6663V21.6668H18.333V28.3335ZM19.9997 36.6668C17.6941 36.6668 15.5275 36.2293 13.4997 35.3543C11.4719 34.4793 9.70801 33.2918 8.20801 31.7918C6.70801 30.2918 5.52051 28.5279 4.64551 26.5002C3.77051 24.4724 3.33301 22.3057 3.33301 20.0002C3.33301 17.6946 3.77051 15.5279 4.64551 13.5002C5.52051 11.4724 6.70801 9.7085 8.20801 8.2085C9.70801 6.7085 11.4719 5.521 13.4997 4.646C15.5275 3.771 17.6941 3.3335 19.9997 3.3335C22.3052 3.3335 24.4719 3.771 26.4997 4.646C28.5275 5.521 30.2913 6.7085 31.7913 8.2085C33.2913 9.7085 34.4788 11.4724 35.3538 13.5002C36.2288 15.5279 36.6663 17.6946 36.6663 20.0002C36.6663 22.3057 36.2288 24.4724 35.3538 26.5002C34.4788 28.5279 33.2913 30.2918 31.7913 31.7918C30.2913 33.2918 28.5275 34.4793 26.4997 35.3543C24.4719 36.2293 22.3052 36.6668 19.9997 36.6668Z" fill="#1C1B1F"/>
                                </g>
                </svg>
                </button>
            </div>
        </div>
        <div class="grid wrapper <?= $description_class ?>">
            <div class="grid-inner ">
                <div class="description"">
                    <?=$event_desc?>
                </div>
            </div>
        </div>
 
    <?php endforeach;

    ?>
    <div class="button wrapper">
                <a href="<?=get_permalink( get_page_by_path( 'rendez-vous' ) )?>">Les rendez-vous  <svg width="25" height="12" viewBox="0 0 25 12" xmlns="http://www.w3.org/2000/svg" >
                                                <path d="M12.9797 11.9085L16.7381 6.7761H0.930664V5.28514H16.7381L12.9797 0.15271L24.9665 6.03062L12.9797 11.9085Z"/>
                                            </svg>
                </a>
    </div>
</div>

<?php get_footer(); ?>
