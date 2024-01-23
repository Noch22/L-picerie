<?php
    /* Template Name: A propos */
    get_header();
    $contenus = get_field('contenu_de_la_page', 'options');
    $sponsors = get_field('sponsors', 'options');
?>
<div class="wrap_center">
<div class="about">
    <?php
foreach ($contenus as $content) {
                            
    $template_name = $content['acf_fc_layout'];
    $template_file = sprintf('%s/layouts/%s.php', get_template_directory(), $template_name);
    if (file_exists($template_file)) {

        printf('<section class="layout_%s">', $template_name);
        include($template_file);
        printf('</section>');
    }
}

?>

<div class="sponsors">
    <div class="text">
    <?php
foreach ($sponsors as $content) {
                            
    $template_name = $content['acf_fc_layout'];
    $template_file = sprintf('%s/layouts/%s.php', get_template_directory(), $template_name);
    if (file_exists($template_file)) {
        if($template_name == "sponsor"){
            
        }else {
            printf('<section class="layout_%s">', $template_name);
            include($template_file);
            printf('</section>');
        }

       
    }
}
?>

    </div>
    <div class="logos">
<?php
foreach ($sponsors as $content) {
                            
    $template_name = $content['acf_fc_layout'];
    $template_file = sprintf('%s/layouts/%s.php', get_template_directory(), $template_name);
    if (file_exists($template_file)) {
        if($template_name == "sponsor"){
            printf('<section class="layout_%s">', $template_name);
            include($template_file);
            printf('</section>');
        }else {
           
        }

       
    }
}

?>
    <section class="layout_sponsor" id="join">
        <h4>Devenez sponsor de l'association !</h4>
        <a href="#contact_tab" class="toggle_sponsors">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_382_230" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="40" height="40">
                <rect width="40" height="40" fill="#D9D9D9"/>
                </mask>
                <g mask="url(#mask0_382_230)">
                <path d="M18.333 28.3335H21.6663V21.6668H28.333V18.3335H21.6663V11.6668H18.333V18.3335H11.6663V21.6668H18.333V28.3335ZM19.9997 36.6668C17.6941 36.6668 15.5275 36.2293 13.4997 35.3543C11.4719 34.4793 9.70801 33.2918 8.20801 31.7918C6.70801 30.2918 5.52051 28.5279 4.64551 26.5002C3.77051 24.4724 3.33301 22.3057 3.33301 20.0002C3.33301 17.6946 3.77051 15.5279 4.64551 13.5002C5.52051 11.4724 6.70801 9.7085 8.20801 8.2085C9.70801 6.7085 11.4719 5.521 13.4997 4.646C15.5275 3.771 17.6941 3.3335 19.9997 3.3335C22.3052 3.3335 24.4719 3.771 26.4997 4.646C28.5275 5.521 30.2913 6.7085 31.7913 8.2085C33.2913 9.7085 34.4788 11.4724 35.3538 13.5002C36.2288 15.5279 36.6663 17.6946 36.6663 20.0002C36.6663 22.3057 36.2288 24.4724 35.3538 26.5002C34.4788 28.5279 33.2913 30.2918 31.7913 31.7918C30.2913 33.2918 28.5275 34.4793 26.4997 35.3543C24.4719 36.2293 22.3052 36.6668 19.9997 36.6668Z" fill="#1C1B1F"/>
                </g>
            </svg>
        </a>
    </section>
</div>
</div>

</div>
</div>

<?php

get_footer();

?>