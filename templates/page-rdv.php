<?php
/* Template Name: Rendez-vous */
get_header();


?>
<div class="wrap_center">
<div class="rdv page-rdv">
    <?php
    
    $events = get_posts([
        'post_type' => 'evenement',
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

        
        <div class="mobile element <?= $border_class ?> border wrapper">
            <div class="type">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="16" cy="16" r="16" fill="<?=$event_outer_color?>"/>
                <circle cx="16" cy="16" r="10" fill="<?=$event_inner_color?>"/>
                </svg>
            </div>
            <div class="name"><p><?= $event_type?></p><p><?=$event_name?></p></div>
            <div class="date"><?=$event_date?></div>
            <div class="action">
                <button class="mobile show_btn" data-id="<?= $i ?>">
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
        <div class="mobile grid wrapper <?= $description_class ?>">
            <div class="grid-inner ">
                <div class="description"">
                    <?=$event_desc?>
                </div>
            </div>
        </div>
 
    <?php endforeach;

    ?>


</div>
<?php
$image_1 = get_field('image', 'options');
$image_2 = get_field('image_2', 'options');
$image_3 = get_field('image_3', 'options');
$image_4 = get_field('image_4', 'options');
$image_5 = get_field('image_5', 'options');
$image_6 = get_field('image_6', 'options');
$image_7 = get_field('image_7', 'options');
$image_8 = get_field('image_8', 'options');
?>
<div class="gallery">
    <h3>Ils se sont donnés rendez-vous à l'Épicerie...</h3>
    <div class="gallery_container">
        <div class="img" id="card-1">
            <p class="gallery_desc"><?= $image_1['description_de_limage'] ?></p>
            <p class="gallery_type"><?= get_term( $image_1['type_devenement']['0'] )->name; ?></p>
            <?= wp_get_attachment_image($image_1['image'], 'gallery-img') ?>
        </div>
        <div class="img" id="card-2">
            <p class="gallery_desc"><?= $image_2['description_de_limage'] ?></p>
            <p class="gallery_type"><?= get_term( $image_2['type_devenement']['0'] )->name; ?></p>
            <?= wp_get_attachment_image($image_2['image'], 'gallery-img') ?>
        </div>
        <div class="img" id="card-3">
            <p class="gallery_desc"><?= $image_3['description_de_limage'] ?></p>
            <p class="gallery_type"><?= get_term( $image_3['type_devenement']['0'] )->name; ?></p>
            <?= wp_get_attachment_image($image_3['image'], 'gallery-img') ?>
        </div>
        <div class="img" id="card-4">
            <p class="gallery_desc"><?= $image_4['description_de_limage'] ?></p>
            <p class="gallery_type"><?= get_term( $image_4['type_devenement']['0'] )->name; ?></p>
            <?= wp_get_attachment_image($image_4['image'], 'gallery-img') ?>
        </div>
        <div class="img" id="card-5">
            <p class="gallery_desc"><?= $image_5['description_de_limage'] ?></p>
            <p class="gallery_type"><?= get_term( $image_5['type_devenement']['0'] )->name; ?></p>
            <?= wp_get_attachment_image($image_5['image'], 'gallery-img') ?>
        </div>
        <div class="img" id="card-6">
            <p class="gallery_desc"><?= $image_6['description_de_limage'] ?></p>
            <p class="gallery_type"><?= get_term( $image_6['type_devenement']['0'] )->name; ?></p>
            <?= wp_get_attachment_image($image_6['image'], 'gallery-img') ?>
        </div>
        <div class="img" id="card-7">
            <p class="gallery_desc"><?= $image_7['description_de_limage'] ?></p>
            <p class="gallery_type"><?= get_term( $image_7['type_devenement']['0'] )->name; ?></p>
            <?= wp_get_attachment_image($image_7['image'], 'gallery-img') ?>
        </div>
        <div class="img" id="card-8">
            <p class="gallery_desc"><?= $image_8['description_de_limage'] ?></p>
            <p class="gallery_type"><?= get_term( $image_8['type_devenement']['0'] )->name; ?></p>
            <?= wp_get_attachment_image($image_8['image'], 'gallery-img') ?>
        </div>
    </div>
    <div class="gallery_bt_text">
        <h4>Si vous souhaitez participer aux rendez-vous de L’Épicerie, contactez-nous !</h3>
    </div>
</div>
</div>
<?php

    get_footer();
?>