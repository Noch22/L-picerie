<?php
/* Template Name: Infos pratiques */
get_header();
$fermeture = get_field('fermeture_exceptionnelle', 'options');
$ouverture_fermeture = get_field('fermetureouverture', 'options');
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
<div class="infos_page">
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





<?php
get_footer();
?>