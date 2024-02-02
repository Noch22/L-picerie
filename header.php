<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    

    <?php wp_head(); ?>

</head>

<body <?php 

$fermeture = get_field('fermeture_exceptionnelle', 'options');

$ouverture_fermeture = get_field('fermetureouverture', 'options');

    echo $fermeture ? body_class( 'fermeture_exceptionnelle') : body_class(); 



?>>

    <?php wp_body_open(); ?>

    <?php

    

    if($fermeture) :

        $message = get_field('message_a_afficher', 'options');

    ?>

<div class="fermeture_text" style="background-color: <?= get_field('couleur_du_fond', 'options')?>;">

    <?php

        for ($i = 0; $i< 4; $i++) :

    ?>

    <p style="color: <?= get_field('couleur_du_texte', 'options')?>;"><?= $message ?></p>

    <?php

    endfor;

    ?>

</div>

<?php endif; ?>

<div class="wrap_center">

<div class="header-homepage <?php echo is_front_page() ? 'homepage' : 'scrolled'?> <?php echo get_field('fermeture_exceptionnelle', 'options') ? 'fermeture' : ''?>">

    <a href="<?= get_home_url() ?>">

    <svg width="180" height="40" viewBox="0 0 180 40" xmlns="http://www.w3.org/2000/svg">

        <path fill-rule="evenodd" clip-rule="evenodd" d="M35.7105 9.39048V11.4211C25.9582 12.0535 25.642 28.9374 35.7105 30.1565V32.1871C29.8858 31.6917 25.8246 27.1317 25.8246 20.766C25.8246 14.4003 29.9315 9.70665 35.7105 9.39048ZM36.8382 11.3755V9.34485C43.1127 9.61539 46.5905 14.7621 46.5905 20.9029V21.5352H29.524C29.524 21.5352 29.3871 20.7692 29.524 19.6838H44.1981C44.1525 16.118 41.8969 11.6917 36.8382 11.3755ZM42.8422 0L36.8839 6.50261H33.6798L39.775 0H42.8422ZM36.8382 32.236V30.2053H36.8839C39.6381 30.2053 42.1674 29.1656 44.0156 27.1806L45.2346 28.7158C43.0671 30.9746 40.3584 32.1936 36.8382 32.236ZM16.1153 9.07431L17.4256 10.1565C18.9152 9.11995 20.6753 6.99804 20.6753 4.46871L20.6297 1.21903H16.8813L16.9269 5.19231H18.6871C18.5078 6.54498 17.4713 8.12581 16.1153 9.07431ZM2.61734 31.6949V1.58084H0V31.6949H2.61734ZM3.74837 31.6949H17.2001H17.2034V29.3481H3.74837V31.6949ZM54.9867 9.88592H52.6399V40H54.9867V9.88592ZM62.5258 11.6004C67.4019 11.6004 69.7944 15.4824 69.7944 20.766C69.7944 26.0463 67.0401 30.0652 62.164 30.0652C59.8172 30.0652 57.604 28.9374 56.1145 27.4478V30.1108C57.8322 31.7797 60.0877 32.2327 62.5714 32.2327C68.3961 32.2327 72.3237 27.764 72.3237 20.766C72.3237 13.7679 68.3961 9.34485 62.5714 9.34485C59.9965 9.34485 57.6953 10.3357 56.1145 11.9166V14.5339C57.604 13.1356 60.179 11.6004 62.5258 11.6004ZM78.2364 6.45698V2.89114H80.5832V6.45698H78.2364ZM80.5832 31.6949H78.2364V9.88592H80.5832V31.6917V31.6949ZM86.6785 19.9544H89.1622C89.4784 15.1239 92.5032 11.558 97.3793 11.558C99.7718 11.558 101.623 12.4153 103.204 14.5828L104.964 13.0476C103.201 10.8344 101.033 9.34485 97.2424 9.34485C91.1016 9.34485 86.9947 13.9505 86.6785 19.9544ZM89.1622 21.1734H86.6785V21.1767C86.8122 27.3598 90.9223 32.236 97.2424 32.236C101.036 32.236 103.204 30.7464 104.964 28.4876L103.25 27.0437C101.669 29.2112 99.7718 30.0228 97.3793 30.0228C92.3663 30.0228 89.2991 26.2288 89.1622 21.1734ZM118.869 9.39048V11.3755C109.116 12.0078 108.8 28.8918 118.869 30.1108V32.1871C113.044 31.6917 109.071 27.1317 109.071 20.766C109.071 14.4003 113.09 9.70665 118.869 9.39048ZM119.996 11.3755V9.34485C126.271 9.61538 129.749 14.7621 129.749 20.9029V21.5352H112.682C112.682 21.5352 112.545 20.7692 112.682 19.6838H127.356C127.311 16.118 125.055 11.6917 119.996 11.3755ZM119.996 32.2327V30.2021H120.042C122.796 30.2021 125.326 29.1623 127.174 27.1773L128.393 28.7125C126.225 30.9713 123.517 32.1903 119.996 32.2327ZM135.798 31.6917H138.145V9.88592H135.798V31.6917ZM139.273 11.8253V14.6708C140.72 13.2269 143.562 11.9622 145.73 12.0078V9.74902C143.292 9.74902 140.942 10.427 139.273 11.8253ZM150.108 6.45698V2.89114H152.455V6.45698H150.108ZM152.455 31.6949H150.108V9.88592H152.455V31.6917V31.6949ZM168.438 11.3755V9.39048C162.659 9.70665 158.64 14.4003 158.64 20.766C158.64 27.1317 162.614 31.6917 168.438 32.1871V30.1108C158.37 28.8918 158.686 12.0078 168.438 11.3755ZM169.566 9.34485V11.3755C174.625 11.6917 176.88 16.118 176.926 19.6838H162.252C162.115 20.7692 162.252 21.5352 162.252 21.5352H179.318V20.9029C179.318 14.7621 175.84 9.61538 169.566 9.34485ZM169.566 30.2021V32.2327C173.086 32.1903 175.795 30.9713 177.962 28.7125L176.743 27.1773C174.895 29.1623 172.366 30.2021 169.612 30.2021H169.566Z"/>

    </svg>

    </a>

    <?php 

    wp_nav_menu(['primary_menu']);

    ?>

    <div class="mobile_btn">

        <button class="mobile_show">

        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">

            <rect y="7" width="17" height="3" rx="1.5" fill="black"/>

            <rect width="17" height="3" rx="1.5" fill="black"/>

            <rect y="14" width="17" height="3" rx="1.5" fill="black"/>

        </svg>

        </button>

    </div>

</div>

</div>

<div class="vertical_bar">

    <h2><?php

   $queried_object = get_queried_object();

   if(isset($queried_object->taxonomy)){

    $taxonomy = $queried_object->taxonomy;

    $this_tax = get_taxonomy($taxonomy);

    if(isset($this_tax->name)){

        $annee = $this_tax->name;

    }}

    if(is_front_page()) {

        echo 'Bienvenue !';

    } else if(isset($annee) && $annee == 'annee' ) {

        echo 'Expositions';

    }else if(is_archive() == 'artistes') {
        echo 'Artistes';
    }else {

       the_title();

    }

    ?>

</h2>

</div>

<div class="menu_mobile">

<div class="close_mobile">

            <button class="close_menu_mobile">

                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <mask id="mask0_348_1267" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="40" height="40">

                            <rect width="40" height="40" fill="#D9D9D9"/>

                            </mask>

                            <g mask="url(#mask0_348_1267)">

                            <circle cx="20" cy="20" r="16" fill="white"/>

                            <path d="M13.9997 28.3333L19.9997 22.3333L25.9997 28.3333L28.333 26L22.333 20L28.333 14L25.9997 11.6667L19.9997 17.6667L13.9997 11.6667L11.6663 14L17.6663 20L11.6663 26L13.9997 28.3333ZM19.9997 36.6667C17.6941 36.6667 15.5275 36.2292 13.4997 35.3542C11.4719 34.4792 9.70801 33.2917 8.20801 31.7917C6.70801 30.2917 5.52051 28.5278 4.64551 26.5C3.77051 24.4722 3.33301 22.3056 3.33301 20C3.33301 17.6944 3.77051 15.5278 4.64551 13.5C5.52051 11.4722 6.70801 9.70833 8.20801 8.20833C9.70801 6.70833 11.4719 5.52083 13.4997 4.64583C15.5275 3.77083 17.6941 3.33333 19.9997 3.33333C22.3052 3.33333 24.4719 3.77083 26.4997 4.64583C28.5275 5.52083 30.2913 6.70833 31.7913 8.20833C33.2913 9.70833 34.4788 11.4722 35.3538 13.5C36.2288 15.5278 36.6663 17.6944 36.6663 20C36.6663 22.3056 36.2288 24.4722 35.3538 26.5C34.4788 28.5278 33.2913 30.2917 31.7913 31.7917C30.2913 33.2917 28.5275 34.4792 26.4997 35.3542C24.4719 36.2292 22.3052 36.6667 19.9997 36.6667Z" fill="black"/>

                            </g>

                    </svg>

            </button>

            </div>

<?php 

    wp_nav_menu(['primary_menu']);

    ?>

</div>

<?php

$jours = get_field('jours_douverture', 'options');



// Tableau pour stocker les jours de la semaine

$jours_de_la_semaine = array();



// Tableau pour stocker les heures d'ouverture et de fermeture

$horaires_complets = array();



// Parcourir le tableau d'horaires

foreach ($jours as $horaire) {

    // Ajouter le jour de la semaine au tableau correspondant

    $jours_de_la_semaine[] = $horaire["jour_de_la_semaine"];



    // Ajouter les heures d'ouverture et de fermeture au tableau correspondant

    $horaires_complets[$horaire["jour_de_la_semaine"]] = array(

        "heure_douverture" => $horaire["heure_douverture"],

        "heure_de_fermeture" => $horaire["heure_de_fermeture"]

    );

}

 // récupérer le jour actuel

 $today = wp_date('l');

 // récupérer l'heure actuelle sous format strtotime pour pouvoir le comparer

 $now = strtotime(wp_date('H:i'));

    // on check si le jour d'ajd est dans le tableau des joursz d'ouveture

?>



<div class="sidebar-header">

            <div class="close">

            <button class="header_show_slider">

                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <mask id="mask0_348_1267" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="40" height="40">

                            <rect width="40" height="40" fill="#D9D9D9"/>

                            </mask>

                            <g mask="url(#mask0_348_1267)">

                            <circle cx="20" cy="20" r="16" fill="white"/>

                            <path d="M13.9997 28.3333L19.9997 22.3333L25.9997 28.3333L28.333 26L22.333 20L28.333 14L25.9997 11.6667L19.9997 17.6667L13.9997 11.6667L11.6663 14L17.6663 20L11.6663 26L13.9997 28.3333ZM19.9997 36.6667C17.6941 36.6667 15.5275 36.2292 13.4997 35.3542C11.4719 34.4792 9.70801 33.2917 8.20801 31.7917C6.70801 30.2917 5.52051 28.5278 4.64551 26.5C3.77051 24.4722 3.33301 22.3056 3.33301 20C3.33301 17.6944 3.77051 15.5278 4.64551 13.5C5.52051 11.4722 6.70801 9.70833 8.20801 8.20833C9.70801 6.70833 11.4719 5.52083 13.4997 4.64583C15.5275 3.77083 17.6941 3.33333 19.9997 3.33333C22.3052 3.33333 24.4719 3.77083 26.4997 4.64583C28.5275 5.52083 30.2913 6.70833 31.7913 8.20833C33.2913 9.70833 34.4788 11.4722 35.3538 13.5C36.2288 15.5278 36.6663 17.6944 36.6663 20C36.6663 22.3056 36.2288 24.4722 35.3538 26.5C34.4788 28.5278 33.2913 30.2917 31.7913 31.7917C30.2913 33.2917 28.5275 34.4792 26.4997 35.3542C24.4719 36.2292 22.3052 36.6667 19.9997 36.6667Z" fill="black"/>

                            </g>

                    </svg>

            </button>

            </div>

            <div class="content">

                <div class="top_header">

                    <div class="title_header">

                        <h2>Infos pratiques</h2>

                    </div>

                    <div class="state_header">



                    <?php

                    if(!$fermeture){

                       if(in_array($today, $jours_de_la_semaine)){

                        // on check si son heure d'ouverture est spécifié

                        if(array_key_exists($today, $horaires_complets)){

                            // on converttis l'heure d'ouverture et fermeture pour les comparer avec strtotime

                            $todaystart = strtotime($horaires_complets[$today]['heure_douverture']);

                            $todayend = strtotime($horaires_complets[$today]['heure_de_fermeture']);

                            // on vérifie si l'heure actuelle est plus grande ou égale à l'heure d'ouverture et si il est plus petit que l'heure de fermeture

                            if($now >= $todaystart && $now <= $todayend){

                                // on affiche ouvert

                                ?>

                                        <p>Actuellement ouvert</p>

                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">

                                            <circle cx="10.5" cy="10.5" r="10.5" fill="#66B45F"/>

                                        </svg>

                                <?php

                            }else {

                                ?>

                                        <p>Actuellement fermé</p>

                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">

                                            <circle cx="10.5" cy="10.5" r="10.5" fill="#8D0C0C"/>

                                        </svg>

                                <?php

                            }

                        }else {

                            ?>

                                    <p>Actuellement fermé</p>

                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">

                                            <circle cx="10.5" cy="10.5" r="10.5" fill="#8D0C0C"/>

                                        </svg>

                                <?php

                        }

                    }else {

                        ?>

                                    <p>Actuellement fermé</p>

                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">

                                            <circle cx="10.5" cy="10.5" r="10.5" fill="#8D0C0C"/>

                                        </svg>

                                <?php

                    }

                }else {

                    if($ouverture_fermeture){

                        ?>

                        <p>Ouverture exceptionnelle</p>

                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">

                                <circle cx="10.5" cy="10.5" r="10.5" fill="#002CDA"/>

                            </svg>

                        <?php



                    }else if(!$ouverture_fermeture){

                        ?>

                        <p>Fermeture exceptionnelle</p>

                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">

                                <circle cx="10.5" cy="10.5" r="10.5" fill="#eb5e34"/>

                            </svg>

                        <?php



                    }

                    ?>

                                    

                    <?php

                }

                ?>



                    </div>

                </div>

                <div class="horaires">

                    <h3>Horaires</h3>

                    <div class="grid_horaires">

                        <?php

                            foreach($jours as $jour) :

                                ?>

                                <div class="row">

                                <p><?= ucfirst($jour["jour_de_la_semaine"])?></p>

                                <div class="bottom_line_horaires"></div>

                                <p><?=$jour["heure_douverture"] . " - " . $jour["heure_de_fermeture"]?></p>

                                </div>

                                <?php

                            endforeach;

                        ?>

                    </div>

                </div>

                <div class="adresse">

                            <svg width="32" height="38" viewBox="0 0 32 38" fill="none" xmlns="http://www.w3.org/2000/svg">

                                <g filter="url(#filter0_d_396_757)">

                                <mask id="mask0_396_757" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="32" height="32">

                                <rect width="32" height="32" fill="#D9D9D9"/>

                                </mask>

                                <g mask="url(#mask0_396_757)">

                                <path d="M16.0017 15.6667C16.6441 15.6667 17.1931 15.4379 17.6487 14.9804C18.1043 14.5229 18.332 13.9729 18.332 13.3304C18.332 12.6879 18.1033 12.1389 17.6457 11.6834C17.1882 11.2278 16.6382 11 15.9957 11C15.3533 11 14.8043 11.2288 14.3487 11.6863C13.8931 12.1438 13.6654 12.6938 13.6654 13.3363C13.6654 13.9788 13.8941 14.5278 14.3517 14.9834C14.8092 15.4389 15.3592 15.6667 16.0017 15.6667ZM15.9987 29.3334C12.4209 26.2889 9.7487 23.4611 7.98203 20.85C6.21536 18.2389 5.33203 15.8222 5.33203 13.6C5.33203 10.2667 6.40425 7.61113 8.5487 5.63335C10.6931 3.65558 13.1765 2.66669 15.9987 2.66669C18.8209 2.66669 21.3043 3.65558 23.4487 5.63335C25.5931 7.61113 26.6654 10.2667 26.6654 13.6C26.6654 15.8222 25.782 18.2389 24.0154 20.85C22.2487 23.4611 19.5765 26.2889 15.9987 29.3334Z" fill="white"/>

                                </g>

                                </g>

                                <defs>

                                <filter id="filter0_d_396_757" x="1.33203" y="2.66669" width="29.334" height="34.6667" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">

                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>

                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>

                                <feOffset dy="4"/>

                                <feGaussianBlur stdDeviation="2"/>

                                <feComposite in2="hardAlpha" operator="out"/>

                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>

                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_396_757"/>

                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_396_757" result="shape"/>

                                </filter>

                                </defs>

                            </svg>

                            <p>181, avenue Costa de Beauegard

                                73290 LA MOTTE SERVOLEX</p>

                </div>



                <div class="mail">

                <svg width="28" height="22" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg">

                    <path d="M0.667969 21.6667V0.333374H27.3346V21.6667H0.667969ZM14.0013 11.6L25.3346 4.16671V2.33337L14.0013 9.60004L2.66797 2.33337V4.16671L14.0013 11.6Z" fill="white"/>

                </svg>

                <p>

                    Rejoignez notre liste de diffusion sur demande :

                        <b>ateliergalerie.epicerie@gmail.com</b>

                </p>

                </div>

                <div class="contact" id="contact_tab">

                    <h3 id="contact">Contact</h3>

                    <?= do_shortcode('[contact-form-7 id="4cfd174" title="Formulaire de contact"]') ?>

                </div>

            </div>

        </div>

