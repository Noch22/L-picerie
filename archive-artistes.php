<?php
get_header();

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$args = array(
    'post_type'      => 'artistes',
    'numberposts'    => 9,
    'paged'          => $paged,
);

$custom_query = new WP_Query( $args );

?>
<div class="wrap_center">
<div class="parent">
    <?php
    $i=0;
    while ( $custom_query->have_posts() ) : $custom_query->the_post();
        $nom     = get_field('nom_de_lartiste');
        $type    = get_field('type_dartiste');
        $image   = get_field('image_de_lartiste');
        $content = get_field('description');
        $flexible_contents = get_field('description');
        $i++;
        $sidebar_class = 'sidebar-' . $i;
    ?>
    <div class="child_artiste" data-id="<?= $i ?>">
        <img src="<?= $image['sizes']['artists-img'] ?>" alt="<?= $image['alt'] ?>" height="<?= $image['sizes']['artists-img-height'] ?>" width="<?= $image['sizes']['artists-img-width'] ?>">
        <div class="text_artists">
            <h3><?= $nom ?></h3>
            <p><?= $type ?></p>
        </div>
        <div class="view_more">
                    <button class="show_slider plus" data-id="<?= $i ?>">
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
        <div class="sidebar-artists <?= $sidebar_class ?>" data-id="<?= $i ?>">
            <div class="close">
            <button class="show_slider" data-id="<?= $i ?>">
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
                <div class="infos">
                <h2><?= $nom ?></h2>
                <h3 id="slidetech"><?=$type?></h3>
            </div>
                <div class="expo_content">
                    <?php
                        foreach ($flexible_contents as $content) {
                            
                            $template_name = $content['acf_fc_layout'];
                            $template_file = sprintf('%s/layouts/%s.php', get_template_directory(), $template_name);
                            if (file_exists($template_file)) {
            
                                printf('<section class="layout_%s">', $template_name);
                                include($template_file);
                                printf('</section>');
                            }
                     }
                    ?>
                </div>
            </div>
        </div>

    </div>
    <?php
    endwhile;
    ?>
</div>
<?php

    // Affichez la pagination
    echo '<div class="pagination">';
    echo paginate_links(array(
        'total'    => $custom_query->max_num_pages,
        'current'  => max( 1, get_query_var( 'paged' ) ),
        'prev_text' => '<',
        'next_text' => '>',
    ));
    echo '</div>';

    // Réinitialisez les données de la requête personnalisée
    wp_reset_postdata();

    ?>
</div>
<?php
get_footer();
?>

<?php
// $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

// $args = array(
//     'post_type'      => 'artiste',
//     'posts_per_page' => 9, // Nombre de publications par page
//     'paged'          => $paged,
// );

// $custom_query = new WP_Query( $args );

// if ( $custom_query->have_posts() ) :
//     while ( $custom_query->have_posts() ) : $custom_query->the_post();
//         $the_post = $custom_query->posts;
//         p($the_post);
//     endwhile;

//     // Affichez la pagination
//     echo '<div class="pagination">';
//     echo paginate_links( array(
//         'total'    => $custom_query->max_num_pages,
//         'current'  => max( 1, get_query_var( 'paged' ) ),
//         'prev_text' => '&laquo;',
//         'next_text' => '&raquo;',
//     ) );
//     echo '</div>';

//     // Réinitialisez les données de la requête personnalisée
//     wp_reset_postdata();

// else :
//     // Aucune publication trouvée
//     echo '<p>Aucune publication trouvée</p>';
// endif;
?>